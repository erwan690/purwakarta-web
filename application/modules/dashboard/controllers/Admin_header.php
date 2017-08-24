<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_header extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		
		}	
	
	//Shows the dashboard
	public function index()
	{
	       
		$this->load->view('admin_header');
		

	}

	
}









         

        
?>
