<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	       $this->load->model('galeri_model');

		   $this->load->helper(array('form', 'url'));		
		}	
	
	//Shows the dashboard
	public function index()
	{
		
	
	


        $this->load->view('dashboard/admin_header');
		$this->load->view('add_galeri',array('error' => ' ' ));
		$this->load->view('dashboard/admin_footer');
		
	
	
	}

    public function add_galeri() {

    

    if($this->session->userdata('is_logged_in'))
        {
                  
        $id=$this->uri->segment(3);
        $data['warung_detail']=$this->galeri_model->add_warung_detail($id);

        $data['title'] = 'Add Galeri';
        $this->load->view('dashboard/admin_header',$data);
        $this->load->view('galeri',$data);
        $this->load->view('dashboard/admin_footer');
        }else{       
        redirect('home');
        }

    }

public function delete_galeri()
    {
        $id=$this->input->post('id');
        $data=array('status'=>0);
        $image=$this->input->post('image');
        $result=$this->galeri_model->delete_galeri($id,$data);
        if (file_exists($image)){
        unlink($image);
        }
        if($result==true)
                {
                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg',"Delete Successfully");
                    redirect('warung/add_warung_detail/'.$id_warung);

                }
                else
                {

                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg2',"Delete Filed");
                    redirect('warung/add_warung_detail/'.$id_warung);


                }

    }
 public function do_upload()
        {
                $name_array = array();
                $count = count($_FILES['userfile']['size']);
                foreach($_FILES as $key=>$value)
                for($s=0; $s<=$count-1; $s++) {
                $_FILES['userfile']['name']=$value['name'][$s];
                $_FILES['userfile']['type']    = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error']       = $value['error'][$s];
                $_FILES['userfile']['size']    = $value['size'][$s];  
                $config['upload_path'] = './images/galeri/';
                $config['allowed_types'] = 'gif|jpg|png';
                //$config['max_size'] = '100';
                //$config['max_width']  = '1024';
                //$config['max_height']  = '768';
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = 'images/galeri/'.$data['file_name'];
                }
                $names= implode(',', $name_array);

                foreach ($name_array as $key) {
              
               
                $data = array(
                    'id_warung' => $this->input->post('id_warung'),
                    'image' => $key);
                
                $result=$this->galeri_model->insert_galeri($data);

                    }

                if($result==true)
                {
                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg',"image Records Added Successfully");
                    redirect('warung/add_warung_detail/'.$id_warung);

                }
                else
                {
                       $id_warung = $this->input->post('id_warung');

                $this->session->set_flashdata('msg1',"image Records Added fail");
                    redirect('warung/add_warung_detail/'.$id_warung);



                }

  
}

 
	
}









         

        
?>
