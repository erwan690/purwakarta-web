<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	       $this->load->model('menu_model');

		   $this->load->helper(array('form', 'url'));		
		}	
	
	//Shows the dashboard
	public function index()
	{
		
	

        $this->load->view('dashboard/admin_header');
		$this->load->view('add_menu',array('error' => ' ' ));
		$this->load->view('dashboard/admin_footer');
		
	
	
	}

        public function user_menu_baru(){
    $data['menu']=$this->menu_model->get_menu();
                $data['title']= 'Menu Baru';
                $this->load->view('dashboard/header',$data);
                $this->load->view('user_menu_baru',$data);
                $this->load->view('dashboard/footer');
}

public function api_user_menu_baru(){
    $data['menu']=$this->menu_model->get_menu();
                $data['title']= 'Menu Baru';
    echo (json_encode($data));
}

    public function add_menu() {

    

    if($this->session->userdata('is_logged_in'))
        {
                  
        $id=$this->uri->segment(3);
        $data['warung_detail']=$this->menu_model->add_warung_detail($id);

        $data['title'] = 'Add Menu';
        $this->load->view('dashboard/admin_header',$data);
        $this->load->view('menu',$data);
        $this->load->view('dashboard/admin_footer');
        }else{       
        redirect('home');
        }

    }

    public function delete_menu()
    {
        $id=$this->input->post('id');
        $data=array('status'=>0);
        $image=$this->input->post('image');
        unlink($image);
        $result=$this->menu_model->delete_menu($id,$data);
        if($result==true)
                {
                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg',"Delete Successfully");
                    redirect('warung/add_warung_detail/'.$id_warung);

                }
                else
                {

                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg',"Delete Filed");
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
                $config['upload_path'] = './images/menu/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = 'images/menu/'.$data['file_name'];
                }
                $names= implode(',', $name_array);

                foreach ($name_array as $key) {
              
               
                $data = array(
                    'id_warung' => $this->input->post('id_warung'),
                    'image' => $key);
                
                $result=$this->menu_model->insert_menu($data);

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

                $this->session->set_flashdata('msg',"image Records Added Successfully");
                    redirect('warung/add_warung_detail/'.$id_warung);



                }

  
}

 
	
}









         

        
?>
