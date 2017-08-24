<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
		$this->load->helper('url');
		
		}	
	
	//Shows the dashboard
	public function index()
	{
	 
		$this->load->view('dashboard/admin_header');
		$this->load->view('slide_list');
		$this->load->view('dashboard/admin_footer');
	
	}
	//Insert the Student 
	public function  insert_slide()
	{
		foreach ($this->input->post('slide') as $key => $value) {
			
			$data=array('id_album'=>$this->input->post('id_album'),'image'=>$value);
			$result=$this->slide_model->insert_slide($data);
		}

		
		
		

		if($result==true)
		{
			$this->session->set_flashdata('msg',"slide Records Added Successfully");
			redirect('slide/list_album');

		}
		else
		{

			$this->session->set_flashdata('msg1',"slide Records Added Failed");
			redirect('slide/list_album');


		}
	}

	public function  insert_album()
	{

			
			$data=array('album_name'=>$this->input->post('album_name'));
			$result=$this->slide_model->insert_album($data);

		
		
		

		if($result==true)
		{
			$this->session->set_flashdata('msg',"Create Album Successfully");
			redirect('slide/list_album');

		}
		else
		{

			$this->session->set_flashdata('msg1',"Create Album Failed");
			redirect('slide/list_album');


		}
	}
	//List of students 
	public function list_slide()
		{
		 $this->load->library('pagination'); 
		 if($this->session->userdata('is_logged_in'))
        {
                  	 
 		$data['slide1']=$this->slide_model->get_slide1();
 		$id=$this->uri->segment(3);
 		$total_row= $this->slide_model->jumlah($id);

        $config = array();
        $config["base_url"] = base_url() . "slide/list_slide/" . $this->uri->segment(3) ."/" ;       
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
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
        $data['slide']=$this->slide_model->get_slide($sampai,$dari);
        $data['slider']=$this->slide_model->get_images();
			

    			$data['error']='';
    			$data['title'] = 'slide';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('slide_list',$data);
			 	$this->load->view('dashboard/admin_footer');


		}
	
		else{		
		redirect('home');
		}
	}

	public function list_album()
		{
		 $this->load->library('pagination'); 
		 if($this->session->userdata('is_logged_in'))
        {
                  	 
 		$data['album1']=$this->slide_model->get_slide1();

 		$total_row= $this->slide_model->jumlah_album();

        $config = array();
        $config["base_url"] = base_url() . "slide/list_album";       
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
        $config['use_page_numbers'] = false;
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
        $data['album']=$this->slide_model->get_album($sampai,$dari);
			

    			$data['error']='';
    			$data['title'] = 'album';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('album_list',$data);
			 	$this->load->view('dashboard/admin_footer');


		}
	
		else{		
		redirect('home');
		}
	}

	//Change the Status of student to hide fron the table 

	public function delete_slide()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->slide_model->delete_slide($id,$data);
		if($result==true)
		{
			$this->session->set_flashdata('msg1',"Deleted Successfully");
			redirect('slide/list_slide');

		}
		else
		{

			$this->session->set_flashdata('msg1',"slide Records Deletion Failed");
			redirect('slide/list_slide');


		}

	}
	//View the Edit page 

	public function add_slide()
	{
		$id=$this->uri->segment(3);
		$data['slide']=$this->slide_model->get_images();
		$data['album']=$this->slide_model->get_album_id($id);
		$data['title'] ='Add_slide';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_slide',$data);

	}


	public function edit_slide()
	{
		$id=$this->uri->segment(3);
		$data['slide']=$this->slide_model->edit_slide($id);

		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_slide');

	}

	public function edit_slide_image()
	{
		$id=$this->uri->segment(3);
		$data['slide_image']=$this->slide_model->edit_slide($id);
		$data['slide']=$this->slide_model->get_images();
		$data['title']= 'Edit Slide Image';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_slide_image',$data);
		$this->load->view('dashboard/admin_footer');
	}

	public function edit_slide_warung()
	{
		$id=$this->uri->segment(3);
		$data['slide_warung']=$this->slide_model->edit_slide_warung($id);
		$data['slide']=$this->slide_model->get_slide1();
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_slide_warung');

	}


	//Update Student

	public function  update_album_slide()
	{
		$id=$this->input->get('id');
		$data=array('album_name'=>$this->input->get('name'));
				
		$result=$this->slide_model->edit_album_slide($data,$id);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"slide Records Updated Successfully");
		

		}
		else
		{

			$this->session->set_flashdata('msg1',"No changes Made in Student Records");
			


		}
	}

	public function  update_image_slide()
	{
		$config['upload_path']          = './images/menu/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['overwrite']           = TRUE;

                $this->load->library('upload', $config);
   
                if ( ! $this->upload->do_upload('userfile'))
                {
                		$id=$this->input->post('id');
                    
                        $result=$this->slide_model->update_slide($data,$id);
	                    $this->session->set_flashdata('msg',"no update image");
	                
                }
                else
                {
                		$id=$this->input->post('id');
                        $data = array('image' => 'images/menu/'.$this->upload->data('file_name')
									  );
                        
                        $result=$this->slide_model->update_slide($data,$id);

                        if($result==true)
							{
		          			$ids=$this->input->post('ids');
		                    $this->session->set_flashdata('msg',"Update Successfully");
		                       redirect('slide/list_slide/'.$ids);

							}
						else
							{

		                   $ids=$this->input->post('ids');
		                    $this->session->set_flashdata('msg',"Update Filed");
		                      redirect('list_album');
		                        redirect('slide/list_slide/'.$ids);


							}



                }
	}

	

	
}









         

        
?>
