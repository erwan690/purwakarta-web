<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login/student_model');
		$this->load->helper('url');
		
	}	
	
	//Shows the dashboard
	public function index()
	{
		 if($this->session->userdata('is_logged_in'))
        {
                  
		$this->load->view('header');
		$this->load->view('student');
		$this->load->view('footer');
		}
		else{		
		redirect('home');
		}
	}
	//Insert the Student 
	public function  insert_student()
	{
		$interest=implode(',',$this->input->post('interest'));
		$data=array('name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'year'=>$this->input->post('year'),
			'gender'=>$this->input->post('gender'),
			'interest'=>$interest,
			'status'=>1);
		
		
		$result=$this->student_model->insert_student($data);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"Student Records Added Successfully");
			redirect('student');

		}
		else
		{

			$this->session->set_flashdata('msg1',"Student Records Added Failed");
			redirect('student');


		}
	}
	//List of students 
		public function list_students()
	{
		 $this->load->library('pagination'); 
		 if($this->session->userdata('is_logged_in'))
        {
                  	 
 		$data['student1']=$this->student_model->get_student1();

 		$total_row=count($data['student1']);

        $config = array();
        $config["base_url"] = base_url() . "student/list_students";       
        $config["total_rows"] = $total_row;
        $config["per_page"] = 1;
        $config['use_page_numbers'] = TRUE;
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
        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
          }
        else{
               $page = 1;
        }
        
        $data['pagination'] = $this->pagination->create_links();
        $data['student']=$this->student_model->get_student($config["per_page"],$page);
			

    			$data['error']='';

        		$this->load->view('header');
			 	$this->load->view('list_of_students',$data);
			  	$this->load->view('footer');
		}
	
		else{		
		redirect('home');
		}
	}

	//Change the Status of student to hide fron the table 

	public function delete_student()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->student_model->delete_student($id,$data);
		if($result==true)
		{
			$this->session->set_flashdata('msg1',"Deleted Successfully");
			redirect('student/list_students');

		}
		else
		{

			$this->session->set_flashdata('msg1',"Student Records Deletion Failed");
			redirect('student/list_students');


		}

	}
	//View the Edit page 
	public function edit_student()
	{
		$id=$this->uri->segment(3);
		$data['student']=$this->student_model->edit_student($id);
		$this->load->view('header',$data);
		$this->load->view('edit_student');
	}

	//Update Student

	public function  update_student()
	{
		$id=$this->input->post('id');
		$interest=implode(',',$this->input->post('interest'));
		$data=array('name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'year'=>$this->input->post('year'),
			'gender'=>$this->input->post('gender'),
			'interest'=>$interest,
			'status'=>1);
				
		$result=$this->student_model->update_student($data,$id);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"Student Records Updated Successfully");
			redirect('student/list_students');

		}
		else
		{

			$this->session->set_flashdata('msg1',"No changes Made in Student Records");
			redirect('student/list_students');


		}
	}

	
}









         

        
?>
