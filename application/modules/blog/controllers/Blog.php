<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');

		 $this->load->helper(array('form', 'url'));

		}

	//Shows the dashboard
	public function index()
	{	 $this->load->library('pagination');
		 if($this->session->userdata('is_logged_in'))
        {

 		$data['blog1']=$this->blog_model->get_blog1();

 		$total_row= $this->blog_model->jumlah();

        $config = array();
        $config["base_url"] = base_url() . "blog/index";
        $config["total_rows"] = $total_row;
        $config["per_page"] = 10;
        $config['use_page_numbers'] = FALSE;
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
  		$dari = $this->uri->segment(3) ;
      	$sampai = $config["per_page"];
        $data['pagination'] = $this->pagination->create_links();

  				$data['blog']=$this->blog_model->get_blog($sampai,$dari);
				$data['title']= 'blog';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('list_blog',$data);
			  	$this->load->view('dashboard/admin_footer');

		}

		else{
		redirect('home');
		}
	}
	private function do_upload()
	{
		$type = explode('.', $_FILES["image"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["image"]["tmp_name"]))
				if(move_uploaded_file($_FILES["image"]["tmp_name"],$url))
					return $url;
		return "";
	}


public function delete_blog()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->blog_model->delete_blog($id,$data);
		if($result==true)
				{

                    $this->session->set_flashdata('msg',"Delete Successfully");
                    redirect('blog');

				}
				else
				{


                    $this->session->set_flashdata('msg',"Delete Filed");
                    redirect('blog');


				}

	}

public function user_view_blog(){
	$data['blog']=$this->blog_model->get_blog1();
				$data['title']= 'blog';
        		$this->load->view('dashboard/header',$data);
			 	$this->load->view('user_view_blog',$data);
			  	$this->load->view('dashboard/footer');
}
public function add_blogs() {

		$id=$this->uri->segment(3);
		$data['title'] = 'Add blogs';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_blog');
		$this->load->view('dashboard/admin_footer');

	}

	public function  insert_blog()
	{


				$config['upload_path']          = './images/blog';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {


				$data = array(
					'deskripsi' => $this->input->post('deskripsi'),
				'judul_blog'=> $this->input->post('judul'));
					$result=$this->blog_model->insert_blogsi($data);


				} else {

					$data = array(
						'image' => 'images/blog/'.$this->upload->data('file_name'),
						'deskripsi' => $this->input->post('deskripsi'),
					'judul_blog'=> $this->input->post('judul'));
					 	$result=$this->blog_model->insert_blogsi($data);


				}



	        // a model that deals with your image data (you have to create this)


				if($result==true)
				{

                    $this->session->set_flashdata('msg'," Added Successfully");
                       redirect('blog');

				}
				else
				{


                    $this->session->set_flashdata('msg',"Added Filed");
        		redirect('blog');


				}

}

public function edit_blog()
	{
		$id=$this->uri->segment(3);
		$data['blog']=$this->blog_model->edit_blog($id);
		$data['title']= 'Edit blog';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_blog',$data);
		$this->load->view('dashboard/admin_footer');
	}

	//Update Student


public function  update_blog()

        {
        	$config['upload_path']          = './images/blog/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['overwrite']           = TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                		$id=$this->input->post('id');
                        $data = array('deskripsi' => $this->input->post('deskripsi'),
											'judul_blog'=> $this->input->post('judul'));
                        $result=$this->blog_model->update_blog($data,$id);
	                    $this->session->set_flashdata('msg',"no update image");
											 redirect('blog');
                }
                else
                {
                			$id=$this->input->post('id');
                        $data = array('image' => 'images/blog/'.$this->upload->data('file_name'),
									  		'deskripsi' => $this->input->post('deskripsi'),
												'judul_blog'=> $this->input->post('judul'));

                        $result=$this->blog_model->update_blog($data,$id);

                        $old_image=$this->input->post('old_image');
												unlink($old_image);
                        if($result==true)
							{

		                    $this->session->set_flashdata('msg',"Update Successfully");


							}
						else
							{


		                    $this->session->set_flashdata('msg',"Update Filed");
		                      redirect('blog');


							}



                }

}

}












?>
