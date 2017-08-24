<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper(array('form', 'url'));	

		
		}	
	
	//Shows the dashboard
	public function index()
	{
	
		$data['slide']=$this->home_model->get_slide();
		$data['album']=$this->home_model->get_album();
		$data['partner']=$this->home_model->get_partner();
		$this->load->view('dashboard/header');
		
		$this->load->view('home/home',$data);
		
		$this->load->view('dashboard/footer');

		
	}

	public function register()
	{
	

		$this->load->view('dashboard/header');
		
		$this->load->view('users_register');
		
		$this->load->view('dashboard/footer');

		
	}

	public function profile()
	{
	

		$this->load->view('dashboard/header');
		
		$this->load->view('profile');
		
		$this->load->view('dashboard/footer');

		
	}
	public function insert_register() {



				$config['upload_path']          = './images/user_ava/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

              /*$configmail = Array(
			     'protocol' => 'smtp',
			     'smtp_host' => 'smtp.gmail.com',
			     'smtp_port' => 465,
			     'smtp_user' => 'impaparock@gmail.com', // change it to yours
			     'smtp_pass' => 'paparock', // change it to yours
			     'mailtype' => 'html',
			     'charset' => 'iso-8859-1',
			     'wordwrap' => TRUE
			  ); */
			 

                $this->load->library('upload', $config);
               // $this->load->library('email',$configmail);
   
                if ( ! $this->upload->do_upload('image'))
                {

                /*`id_user`, `firstname`, `lastname`, `address`, `phone`, `avatar`, `username`, `email`, `password`*/
				$data = array(
					'surename' => $this->input->post('surename'),
					'email' => $this->input->post('email'),
					'password' => sha1($this->input->post('password')));

					$result=$this->users_model->insert_register($data);
						/*$this->email->from('impaparock@gmail.com', 'impaparock@gmail.com');
						$this->email->to($this->input->post('email'));
						$this->email->subject('Test email from CI and Gmail');
						$this->email->message('This is a test.');
						$this->email->send();*/

					    //var_dump($data);


				} else {

					$data = array(
						'avatar' => 'images/user_ava/'.$this->upload->data('file_name'),
		                'surename' => $this->input->post('surename'),
					     'email' => $this->input->post('email'),
						'password' => sha1($this->input->post('password')));
						/*$this->email->from('impaparock@gmail.com', 'impaparock@gmail.com');
						$this->email->to($this->input->post('email'));
						$this->email->subject('Test email from CI and Gmail');
						$this->email->message('This is a test.');
						$this->email->send();*/
					 	$result=$this->users_model->insert_register($data);
					//var_dump($data);
				}

				 // Note: no $config param needed


	        
	        // a model that deals with your image data (you have to create this)
	       
			
	}

	public function mailtest() {

			 

   
                $this->load->library('email');

                		$this->email->from('yufitaufikhidayat@gmail.com');
						$this->email->to('impaparock@gmail.com');
						$this->email->subject('Test email from CI and Gmail');
						$this->email->message('This is a test.');
						$this->email->send();

						if($this->email->send()) {

							echo "yes";
						}else {

							echo "no";
						}
	}

	public function login()
	{

		if($_POST)
		{
			
			$result = $this->users_model->check_login();
			if($result)
			{
				$get_id=$this->users_model->get_id();
				foreach($get_id as $val)
                { 
                     $email=$val->email;
                     $surename=$val->surename;
                     $userid=$val->id_user;
                     $ava=$val->avatar;
                    
                }

                $data = array(
                'email'=>$email,
                'user_id' => $userid,
                'surename' => $surename,
                'ava' => $ava,
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/sweetalert.css"></style>
<script type="text/javascript" src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
swal({
title: "Welcome",
text: "login success",
type: "success",
timer: 1000,   
showConfirmButton: false
},
function(){
    window.location.href = '../home';
});
});
</script>
<?php
			} else {

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/sweetalert.css"></style>
<script type="text/javascript" src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
swal({
title: "Error!",
text: "Here's my error message!",
type: "error",
confirmButtonText: "Cool"
},
function(){
    window.location.href = '../home';
});
});
</script>

<?php

			}
		}
	else{	
		$this->load->view('dashboard/header');
		$this->load->view('home/home');
		$this->load->view('dashboard/footer');

		}
	}

	 public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }


}
