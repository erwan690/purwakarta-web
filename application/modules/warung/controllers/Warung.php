<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Warung extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('warung_model');
	
		 $this->load->helper(array('form', 'url'));	
		
		}	
	
	//Shows the dashboard
	public function index()
	{
		 if($this->session->userdata('is_logged_in'))
        {
        
  
        		$this->load->view('dashboard/admin_header');
			 	$this->load->view('warung');
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



	public function  add_warung()
	{
		$data['kategori']=$this->warung_model->get_kategori();
		$data['title'] = 'Add Warung';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_warung',$data);
		$this->load->view('dashboard/admin_footer');

	}

	public function  insert_warung()
	{


				$config['upload_path']          = './images/warung/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
 

                $this->load->library('upload', $config);
   
                if ( ! $this->upload->do_upload('image'))
                {

                	$data = array(

						'nama_warung' => $this->input->post('nama_warung'),
						'id_kategori' => $this->input->post('id_kategori'),
						'telephone' => $this->input->post('telephone'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'deskripsi' => $this->input->post('deskripsi'));

					  $result=$this->warung_model->insert_warung($data);


				$this->session->set_flashdata('msg1',"success but empty image");

				} else {

					$data = array(
						'image' => 'images/warung/'.$this->upload->data('file_name'),
						'nama_warung' => $this->input->post('nama_warung'),
						'id_kategori' => $this->input->post('id_kategori'),
						'telephone' => $this->input->post('telephone'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'deskripsi' => $this->input->post('deskripsi'));

					    $result=$this->warung_model->insert_warung($data);

				}


	        
	        // a model that deals with your image data (you have to create this)
	    

			
				if($result==true)
				{
					$this->session->set_flashdata('msg',"Added Successfully");
					redirect('warung/list_warung');

				}
				else
				{

					$this->session->set_flashdata('msg1',"Added Failed");
					redirect('warung/list_warung');


				}
            
}
public function  insert_alamat()
	{

			//$this->session->set_flashdata('msg1',"empty image please check field upload");
				
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
                    $this->session->set_flashdata('msg',"Added Filed");
                    redirect('warung/add_warung_detail/'.$id_warung);


				}
            
}



	//List of students 
		public function list_warung()
		{
		 
		if($this->session->userdata('is_logged_in'))
        {
        
        $this->load->library('pagination'); 
                  	 
 		$data['warung1']=$this->warung_model->get_warung1();

 		$total_row=  $this->warung_model->jumlah();

        $config = array();
        $config["base_url"] = base_url() . "warung/list_warung";       
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

        


        $data['warung']=$this->warung_model->get_warung($sampai,$dari);
		$data['title'] = 'Warung';
        $this->load->view('dashboard/admin_header',$data);
		$this->load->view('warung',$data);
		$this->load->view('dashboard/admin_footer');

		}
	
		else{		
		redirect('home');
		}
	}

	public function test_war(){
		$id=$this->input->post('id');
		$data['image_warung']=$this->warung_model->get_images($id);
		$this->load->view('test_image',$data);


	}

	//Change the Status of student to hide fron the table 

	public function delete_warung()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->warung_model->delete_menu_warung($id,$data);
		$result=$this->warung_model->delete_promosi_warung($id,$data);
		$result=$this->warung_model->delete_alamat_warung($id,$data);
		$result=$this->warung_model->delete_galeri_warung($id,$data);
		$result=$this->warung_model->delete_fasilitas_warung($id,$data);
		$result=$this->warung_model->delete_warung($id,$data);
		
		
		
		
		

		$data['image_warung']=$this->warung_model->get_images($id);
		$image_warung=$this->warung_model->get_images($id);
		if ($image_warung){

		foreach ($image_warung as $key => $value) {

			  unlink($value);
		}
		    
		}
      
		if($result==true)
		{
			$this->session->set_flashdata('msg',"Deleted Successfully");
			redirect('warung/list_warung');

		}
		else
		{

			$this->session->set_flashdata('msg1',"warung Records Deletion Failed");
			redirect('warung/list_warung');


		}

	}

	public function add_warung_detail() {

		$id=$this->uri->segment(3);
		$data['warung_detail']=$this->warung_model->add_warung_detail($id);
		$data['kategori']=$this->warung_model->get_kategori();
		$data['fasilitas']=$this->warung_model->get_fasilitas();
		$data['galeri']=$this->warung_model->get_galeri($id);
		$data['menu']=$this->warung_model->get_menu($id);
		
		$data['fasilitas_warung']=$this->warung_model->get_fasilitas_warung($id);
		$data['alamat_warung']=$this->warung_model->get_alamat_warung($id);
		//$data['alamat']=$this->warung_model->get_alamat();
		$data['title'] = 'Warung Detail';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_warung_detail',$data);
		$this->load->view('dashboard/admin_footer');


	}

	public function add_fasilitas() {

		$id=$this->uri->segment(3);
		$data['warung_detail']=$this->warung_model->add_warung_detail($id);
		$data['fasilitas']=$this->warung_model->get_fasilitas();

		$data['title'] = 'Add Fasilitas';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_fasilitas',$data);
		$this->load->view('dashboard/admin_footer');

	}

	public function delete_fasilitas(){
		
		$id=$this->input->post('id');
		$wrid = $this->input->post('id_warung');
		$sukes = $this->warung_model->delete_fasilitas_warung_satuan($id);
		if ($sukes == true) {
					$this->session->set_flashdata('msg',"Deleted Successfully");
					redirect('warung/add_warung_detail/'.$wrid);
				}
				else
				{
					$this->session->set_flashdata('msg1',"Deleted Gagal Mang");
					redirect('warung/add_warung_detail/'.$wrid);
				}		
	}

	public function add_galeri() {

		$id=$this->uri->segment(3);
		$data['warung_detail']=$this->warung_model->add_warung_detail($id);
	

		$data['title'] = 'Add Galeri';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_galeri',$data);
		$this->load->view('dashboard/admin_footer');

	}

	public function  insert_comment()
	{

				$config['upload_path']          = './images/comment';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
 

                $this->load->library('upload', $config);
                $id = $id=$this->uri->segment(3);
                if (!$this->upload->do_upload('image'))
                {

					$data = array(
						'id_user' => $this->input->post('id_user'),
						'id_warung' =>  $this->input->post('id_warung'),
						//'email' => $this->session->email,
						//'image' => 'images/comment/'.$this->upload->data('file_name'),
						'testimonial' => $this->input->post('comment'));
					 	$result=$this->warung_model->insert_comment($data);


				} else {

					$data = array(
						'id_user' => $this->input->post('id_user'),
						'id_warung' =>  $this->input->post('id_warung'),
						'image' => 'images/comment/'.$this->upload->data('file_name'),
						'testimonial' => $this->input->post('comment'));
					 	$result=$this->warung_model->insert_comment($data);
					

				}


	        
	        // a model that deals with your image data (you have to create this)
	       
			
				if($result==true)
				{
                    $this->session->set_flashdata('msg'," Added Successfully");
                    redirect('warung/detail_warung/'.$this->input->post('id_warung'));

				}
				else
				{

                    $this->session->set_flashdata('msg',"Added Successfully");
        		    redirect('warung/detail_warung/'.$this->input->post('id_warung'));


				}
			
            
}



	public function add_alamat() {

		$id=$this->uri->segment(3);
		$data['warung_detail']=$this->warung_model->add_warung_detail($id);
		$data['title'] = 'Add Alamat';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('add_alamat',$data);
		$this->load->view('dashboard/admin_footer');

	}


	public function insert_fasilitas() {

		foreach ( $this->input->post('fasilitas') as $key => $value) {		

			$data = array(

				'id_warung' => $this->input->post('id_warung'),
				'id_fasilitas' => $value

			);

			$result=$this->warung_model->insert_fasilitas($data);

		}
	        

				if($result==true)
				{
                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg'," Added Successfully");
                    redirect('warung/add_warung_detail/'.$id_warung);

				}
				else
				{

                    $id_warung = $this->input->post('id_warung');
                    $this->session->set_flashdata('msg',"Added Filed");
                    redirect('warung/add_warung_detail/'.$id_warung);


				}

	}

	public function detail_warung()
	{
		$id=$this->uri->segment(3);
		$data['id_warung']=$this->uri->segment(3);
		$data['warung']=$this->warung_model->detail_warung($id);
		$data['comments']=$this->warung_model->get_comment($id);
		$data['kategori']=$this->warung_model->get_kategori();
		$data['jurnal']=$this->warung_model->get_jurnal();
		$data['fasilitas_warung']=$this->warung_model->get_fasilitas_warung_user($id);
		$data['alamat_warung']=$this->warung_model->get_alamat_warung_user($id);
		$data['galeri_warung']=$this->warung_model->get_galeri_warung_user($id);
		$data['menu_warung']=$this->warung_model->get_menu_warung_user($id);
				
		$data['title'] = 'Detail Warung';
		$this->load->view('dashboard/header',$data);
		$this->load->view('detail_warung',$data);
		$this->load->view('dashboard/footer');
	}

		public function warung_baru()
	{

		$data['warung']=$this->warung_model->get_warung_baru();
				
		$data['title'] = 'Warung Baru';
		$this->load->view('dashboard/header',$data);
		$this->load->view('list_warung_baru',$data);
		$this->load->view('dashboard/footer');
	}


	//View the Edit page 
	public function edit_warung()
	{
		$id=$this->uri->segment(3);
		$data['warung']=$this->warung_model->edit_warung($id);
		$data['kategori']=$this->warung_model->get_kategori();

		$data['title'] = 'Edit Warung';
		$this->load->view('dashboard/admin_header',$data);
		$this->load->view('edit_warung',$data);
		$this->load->view('dashboard/admin_footer');
	}



	//Update Student

	public function  update_warung()
	{


		    $config['upload_path']          = './images/warung/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 4000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['overwrite']           = TRUE;

                $this->load->library('upload', $config);
   
                if ( !$this->upload->do_upload('userfile'))
                {
						$id=$this->input->post('id');
						$data = array(
						'nama_warung' => $this->input->post('nama_warung'),
						'id_kategori' => $this->input->post('id_kategori'),
						'telephone' => $this->input->post('telephone'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'deskripsi' => $this->input->post('deskripsi'));
                        $result=$this->warung_model->update_warung($data,$id);

                        if($result==true)
							{
								$this->session->set_flashdata('msg',"Warung Records Updated Successfully");
								redirect('warung/list_warung');

							}
							else
							{

								$this->session->set_flashdata('msg1',"No changes Made in warung Records");
								redirect('warung/list_warung');

							}
                }else
                {
                		$id=$this->input->post('id');
						$data = array(
						'image' => 'images/warung/'.$this->upload->data('file_name'),
						'nama_warung' => $this->input->post('nama_warung'),
						'id_kategori' => $this->input->post('id_kategori'),
						'telephone' => $this->input->post('telephone'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'deskripsi' => $this->input->post('deskripsi'));
						$old_image=$this->input->post('old_image');
						unlink($old_image);
                        $result=$this->warung_model->update_warung($data,$id);

                        if($result==true)
							{
								$this->session->set_flashdata('msg',"Warung Records Updated Successfully");
								redirect('warung/list_warung');

							}
							else
							{

								$this->session->set_flashdata('msg1',"No changes Made in warung Records");
								redirect('warung/list_warung');

							}



                }

		
	}

	
}









         

        
?>
