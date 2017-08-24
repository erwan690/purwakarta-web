<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	
		$this->load->helper('url');
		
		}	
	
	//Shows the dashboard
	public function index()
	{
		
	

        $this->load->view('dashboard/header');
		$this->load->view('about');
		$this->load->view('dashboard/footer');
		
	
	
	}

	//Change the Status of student to hide fron the table 


	
}









         

        
?>
