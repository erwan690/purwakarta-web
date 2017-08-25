<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('promo_model');

		 $this->load->helper(array('form', 'url'));

		}

	//Shows the dashboard
	public function index()
	{	 $this->load->library('pagination');
		 if($this->session->userdata('is_logged_in'))
        {

 		$data['promo1']=$this->promo_model->get_promo1();

 		$total_row= $this->promo_model->jumlah();

        $config = array();
        $config["base_url"] = base_url() . "promo/index";
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

  				$data['promo']=$this->promo_model->get_promo($sampai,$dari);
				$data['title']= 'Promo';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('list_promo',$data);
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


public function delete_promo()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->promo_model->delete_promo($id,$data);
		if($result==true)
				{

                    $this->session->set_flashdata('msg',"Delete Successfully");
                    redirect('promo');

				}
				else
				{


                    $this->session->set_flashdata('msg',"Delete Filed");
                    redirect('promo');


				}

	}

public function user_view_promo(){
	$data['promo']=$this->promo_model->get_promo1();
				$data['title']= 'Promo';
        		$this->load->view('dashboard/header',$data);
			 	$this->load->view('user_view_promo',$data);
			  	$this->load->view('dashboard/footer');
}
public function add_promosi() {

		$id=$this->uri->segment(3);
		$data['title'] = 'Add Promosi';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_promo');
		$this->load->view('dashboard/admin_footer');

	}

	public function  insert_promosi()
	{


				$config['upload_path']          = './images/promo';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {


				$data = array(
					'deskripsi' => $this->input->post('deskripsi'),
				'judul_promo' => $this->input->post('judul'));
					$result=$this->promo_model->insert_promosi($data);


				} else {

					$data = array(
						'image' => 'images/promo/'.$this->upload->data('file_name'),
						'deskripsi' => $this->input->post('deskripsi'),
					'judul_promo' => $this->input->post('judul'));
					 	$result=$this->promo_model->insert_promosi($data);


				}



	        // a model that deals with your image data (you have to create this)


				if($result==true)
				{

                    $this->session->set_flashdata('msg'," Added Successfully");
                       redirect('promo');

				}
				else
				{


                    $this->session->set_flashdata('msg',"Added Filed");
        		redirect('promo');


				}

}

public function edit_promo()
	{
		$id=$this->uri->segment(3);
		$data['promo']=$this->promo_model->edit_promo($id);
		$data['title']= 'Edit Promo';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_promo',$data);
		$this->load->view('dashboard/admin_footer');
	}

	//Update Student


public function  update_promo()

        {
        	$config['upload_path']          = './images/promo/';
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
											'judul_promo'=> $this->input->post('judul'));
                        $result=$this->promo_model->update_promo($data,$id);
	                    $this->session->set_flashdata('msg',"no update image");
											 redirect('promo');
                }
                else
                {
                			$id=$this->input->post('id');
                        $data = array('image' => 'images/promo/'.$this->upload->data('file_name'),
									  		'deskripsi' => $this->input->post('deskripsi'),
												'judul_promo'=> $this->input->post('judul'));

                        $result=$this->promo_model->update_promo($data,$id);

                        $old_image=$this->input->post('old_image');
												if ($old_image) {
													unlink($old_image);
												}

                        if($result==true)
							{

		                    $this->session->set_flashdata('msg',"Update Successfully");


							}
						else
							{


		                    $this->session->set_flashdata('msg',"Update Filed");
		                      redirect('promo');


							}



                }

}

}












?>
