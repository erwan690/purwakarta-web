<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('fasilitas_model');
		$this->load->helper('url');
		
		}	
	
	//Shows the dashboard
	public function index()
	{
	 
		$this->load->view('dashboard/admin_header');
		$this->load->view('fasilitas_list');
		$this->load->view('dashboard/admin_footer');
	
	}
	//Insert the Student 
	public function  insert_fasilitas()
	{

		$data=array('nama_fasilitas'=>$this->input->post('nama_fasilitas'));
		
		
		$result=$this->fasilitas_model->insert_fasilitas($data);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"fasilitas Records Added Successfully");
			redirect('fasilitas/list_fasilitas');

		}
		else
		{

			$this->session->set_flashdata('msg1',"fasilitas Records Added Failed");
			redirect('fasilitas/list_fasilitas');


		}
	}
	//List of students 
		public function list_fasilitas()
		{
		 $this->load->library('pagination'); 
		 if($this->session->userdata('is_logged_in'))
        {
                  	 
 		$data['fasilitas1']=$this->fasilitas_model->get_fasilitas1();

 		$total_row= $this->fasilitas_model->jumlah();

        $config = array();
        $config["base_url"] = base_url() . "fasilitas/list_fasilitas";       
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
        $data['fasilitas']=$this->fasilitas_model->get_fasilitas($sampai,$dari);
			

    			$data['error']='';
    			$data['title'] = 'Fasilitas';
        		$this->load->view('dashboard/admin_header',$data);
			 	$this->load->view('fasilitas_list',$data);
			 	$this->load->view('dashboard/admin_footer');


		}
	
		else{		
		redirect('home');
		}
	}

	//Change the Status of student to hide fron the table 

	public function delete_fasilitas()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->fasilitas_model->delete_fasilitas($id,$data);
		if($result==true)
		{
			$this->session->set_flashdata('msg1',"Deleted Successfully");
			redirect('fasilitas/list_fasilitas');

		}
		else
		{

			$this->session->set_flashdata('msg1',"fasilitas Records Deletion Failed");
			redirect('fasilitas/list_fasilitas');


		}

	}
	//View the Edit page 
	public function edit_fasilitas()
	{
		$id=$this->uri->segment(3);
		$data['fasilitas']=$this->fasilitas_model->edit_fasilitas($id);

		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_fasilitas');

	}

	public function edit_fasilitas_warung()
	{
		$id=$this->uri->segment(3);
		$data['fasilitas_warung']=$this->fasilitas_model->edit_fasilitas_warung($id);
		$data['fasilitas']=$this->fasilitas_model->get_fasilitas1();
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_fasilitas_warung');

	}


	//Update Student

	public function  update_fasilitas()
	{
		$id=$this->input->get('id');
		$data=array('nama_fasilitas'=>$this->input->get('name'));
				
		$result=$this->fasilitas_model->update_fasilitas($data,$id);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"fasilitas Records Updated Successfully");
		

		}
		else
		{

			$this->session->set_flashdata('msg1',"No changes Made in Student Records");
			


		}
	}

	
}









         

        
?>
