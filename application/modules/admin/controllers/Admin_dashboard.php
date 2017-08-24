<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		
		}	
	
	//Shows the dashboard
	public function index()
	{

		$data['title'] = 'Dashboard';

		$this->load->view('dashboard/admin_header',$data);
		
		$this->load->view('admin/admin_dashboard');
		
		$this->load->view('dashboard/admin_footer');

	
	}
}
