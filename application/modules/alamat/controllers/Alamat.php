<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alamat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('alamat_model');
	
		 $this->load->helper(array('form', 'url'));	
		
		}	
	
	//Shows the dashboard
	public function index()
	{
		 if($this->session->userdata('is_logged_in'))
        {
        
  
        		$this->load->view('dashboard/admin_header');
			 	$this->load->view('alamat');
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


	public function delete_alamat()
		{
			$id=$this->input->post('id');
			$data=array('status'=>0);
			$result=$this->alamat_model->delete_alamat($id,$data);
			if($result==true)
					{
	                    $id_warung = $this->input->post('id_warung');
	                    $this->session->set_flashdata('msg',"Delete Successfully");
	                    redirect('warung/add_warung_detail/'.$id_warung);

					}
					else
					{

	                    $id_warung = $this->input->post('id_warung');
	                    $this->session->set_flashdata('msg1',"Delete Filed");
	                    redirect('warung/add_warung_detail/'.$id_warung);


					}

		}
	
	public function  insert_alamat()
		{

				$this->session->set_flashdata('msg1',"empty image please check field upload");
					
					$data = array(
						'id_warung' => $this->input->post('id_warung'),
						'kota' => $this->input->post('kota'),
						'provinsi' => $this->input->post('provinsi'),
						'alamat' => $this->input->post('alamat'),
						'priority' => $this->input->post('priority')

					);
				


		        
		        // a model that deals with your image data (you have to create this)
		        $result=$this->warung_model->insert_alamat($data);

				
					if($result==true)
					{
	                    $id_warung = $this->input->post('id_warung');
	                    $this->session->set_flashdata('msg',"Added Successfully");
	                    redirect('warung/add_warung_detail/'.$id_warung);

					}
					else
					{

	                    $id_warung = $this->input->post('id_warung');
	                    $this->session->set_flashdata('msg1',"Added Filed");
	                    redirect('warung/add_warung_detail/'.$id_warung);


					}
	            
	}



	public function edit_alamat()
		{
			$id=$this->uri->segment(3);
			$data['alamat']=$this->alamat_model->edit_alamat($id);

			$this->load->view('dashboard/admin_header');
			$this->load->view('edit_alamat',$data);
			$this->load->view('dashboard/admin_footer');
		}

	//Update Student

	public function  update_alamat()
		{
			$id=$this->input->post('id');

			//$url = $this->do_upload();
		

					$data = array(
						'kota' => $this->input->post('kota'),
						'provinsi' => $this->input->post('provinsi'),
						'alamat' => $this->input->post('alamat'),
						'priority' => $this->input->post('priority')
						);

		
			$result= $this->alamat_model->update_alamat($data,$id);
			if($result==true)
			{
	                    $id_warung = $this->input->post('id_warung');
	                    $this->session->set_flashdata('msg'," update Successfully");
	                    redirect('warung/add_warung_detail/'.$id_warung);

			}
			else
			{
	                    $id_warung = $this->input->post('id_warung');
	                    $this->session->set_flashdata('msg1'," update_filed");
	                    redirect('warung/add_warung_detail/'.$id_warung);

			}
		}

	
}









         

        
?>
