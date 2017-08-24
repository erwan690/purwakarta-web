<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('partner_model');
	
		 $this->load->helper(array('form', 'url'));	
		
		}	
	
	//Shows the dashboard
	public function index()
	{	 $this->load->library('pagination'); 
		 if($this->session->userdata('is_logged_in'))
        {		
                  	 
 		$data['partner1']=$this->partner_model->get_partner1();

 		$total_row= $this->partner_model->jumlah();

        $config = array();
        $config["base_url"] = base_url() . "partner/index";       
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
        
  				$data['partner']=$this->partner_model->get_partner($sampai,$dari);
				$data['title']= 'partner';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('list_partner',$data);
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


public function delete_partner()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->partner_model->delete_partner($id,$data);
		if($result==true)
				{
         
                    $this->session->set_flashdata('msg',"Delete Successfully");
                    redirect('partner');

				}
				else
				{

                   
                    $this->session->set_flashdata('msg',"Delete Filed");
                    redirect('partner');


				}

	}
	

public function add_partner() {

		$id=$this->uri->segment(3);
		$data['title'] = 'Add partnersi';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_partner');
		$this->load->view('dashboard/admin_footer');

	}

	public function  insert_partner()
	{


				$config['upload_path']          = './images/partner/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
 

                $this->load->library('upload', $config);
   
                if ( ! $this->upload->do_upload('image'))
                {


				$data = array(
					'deskripsi' => $this->input->post('deskripsi'));
					$result=$this->partner_model->insert_partner($data);


				} else {

					$data = array(
						'image' => 'images/partner/'.$this->upload->data('file_name'),
						'deskripsi' => $this->input->post('deskripsi'));
					 	$result=$this->partner_model->insert_partner($data);


				}


	        
	        // a model that deals with your image data (you have to create this)
	       
			
				if($result==true)
				{
  
                    $this->session->set_flashdata('msg'," Added Successfully");
                       redirect('partner');

				}
				else
				{


                    $this->session->set_flashdata('msg',"Added Filed");
        		redirect('partner');


				}
            
}

public function edit_partner()
	{
		$id=$this->uri->segment(3);
		$data['partner']=$this->partner_model->edit_partner($id);
		$data['title']= 'Edit partner';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_partner',$data);
		$this->load->view('dashboard/admin_footer');
	}

	//Update Student


public function  update_partner()
	
        { 
        	$config['upload_path']          = './images/partner/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['overwrite']           = TRUE;

                $this->load->library('upload', $config);
   
                if ( ! $this->upload->do_upload('userfile'))
                {
                		$id=$this->input->post('id');
                        $data = array('deskripsi' => $this->input->post('deskripsi'));
                        $result=$this->partner_model->update_partner($data,$id);
	                    $this->session->set_flashdata('msg',"no update image");
	                
                }
                else
                {
                		$id=$this->input->post('id');
                        $data = array('image' => 'images/partner/'.$this->upload->data('file_name'),
									  'deskripsi' => $this->input->post('deskripsi'));
                        
                        $result=$this->partner_model->update_partner($data,$id);

                        $old_image=$this->input->post('old_image');
						unlink($old_image);

                        if($result==true)
							{
		          
		                    $this->session->set_flashdata('msg',"Update Successfully");
		                       redirect('partner');

							}
						else
							{

		           
		                    $this->session->set_flashdata('msg',"Update Filed");
		                      redirect('partner');


							}



                }
  
}
	
}









         

        
?>
