<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
	
		 $this->load->helper(array('form', 'url'));	
		
		}	
	
	//Shows the dashboard
	public function index()
	{	 $this->load->library('pagination'); 
		 if($this->session->userdata('is_logged_in'))
        {		
                  	 
 		$data['kategori1']=$this->kategori_model->get_kategori1();

 		$total_row= $this->kategori_model->jumlah();

        $config = array();
        $config["base_url"] = base_url() . "kategori/index";       
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
        
  				$data['kategori']=$this->kategori_model->get_kategori($sampai,$dari);
				$data['title']= 'kategori';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('list_kategori',$data);
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


public function delete_kategori()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->kategori_model->delete_kategori($id,$data);
		if($result==true)
				{
         
                    $this->session->set_flashdata('msg',"Delete Successfully");
                    redirect('kategori');

				}
				else
				{

                   
                    $this->session->set_flashdata('msg1',"Kategori Masih Digunakan");
                    redirect('kategori');


				}

	}
	
public function user_view_kategori(){
	$data['kategori']=$this->kategori_model->get_kategori1();
				$data['title']= 'kategori';
        		$this->load->view('dashboard/header',$data);
			 	$this->load->view('user_view_kategori',$data);
			  	$this->load->view('dashboard/footer');
}
	public function add_kategori() {

			$id=$this->uri->segment(3);
			$data['title'] = 'Add kategori';
			$this->load->view('dashboard/admin_header',$data);
			$this->load->view('add_kategori');
			$this->load->view('dashboard/admin_footer');

		}

	public function  insert_kategori()
	{


				$config['upload_path']          = './images/kategori';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
 

                $this->load->library('upload', $config);
   
                if ( ! $this->upload->do_upload('image'))
                {


				$data = array(
					'nama_kategori' => $this->input->post('nama_kategori'));
					$result=$this->kategori_model->insert_kategori($data);


				} else {

					$data = array(
						'image' => 'images/kategori/'.$this->upload->data('file_name'),
						'nama_kategori' => $this->input->post('nama_kategori'));
					 	$result=$this->kategori_model->insert_kategori($data);


				}


	        
	        // a model that deals with your image data (you have to create this)
	       
			
				if($result==true)
				{
  
                    $this->session->set_flashdata('msg'," Added Successfully");
                       redirect('kategori');

				}
				else
				{


                    $this->session->set_flashdata('msg',"Added Filed");
        		redirect('kategori');


				}
            
}

public function edit_kategori()
	{
		$id=$this->uri->segment(3);
		$data['kategori']=$this->kategori_model->edit_kategori($id);
		$data['title']= 'Edit kategori';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_kategori',$data);
		$this->load->view('dashboard/admin_footer');
	}

	//Update Student


public function  update_kategori()
	
        { 
        	$config['upload_path']          = './images/kategori/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['overwrite']           = TRUE;

                $this->load->library('upload', $config);
   
                if ( ! $this->upload->do_upload('userfile'))
                {
                		$id=$this->input->post('id');
                        $data = array('nama_kategori' => $this->input->post('nama_kategori'));
                        $result=$this->kategori_model->update_kategori($data,$id);
	                    $this->session->set_flashdata('msg',"no update image");
	                	     redirect('kategori/index');
                }
                else
                {
                		$id=$this->input->post('id');
                        $data = array('image' => 'images/kategori/'.$this->upload->data('file_name'),
									  'nama_kategori' => $this->input->post('nama_kategori'));
                        
                        $result=$this->kategori_model->update_kategori($data,$id);

                        $old_image=$this->input->post('old_image');
						unlink($old_image);

                        if($result==true)
							{
		          
		                    $this->session->set_flashdata('msg',"Update Successfully");
		                       redirect('kategori/index');

							}
						else
							{

		           
		                    $this->session->set_flashdata('msg',"Update Filed");
		                      redirect('kategori/index');


							}



                }
  
}
	
}









         

        
?>
