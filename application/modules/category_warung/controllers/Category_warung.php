<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_warung extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('category_warung_model');
		$this->load->helper('url');

		
		}	
	
	//Shows the dashboard
	public function list_warung()
	{
		$id=$this->uri->segment(3);
	
		$data['warung_list']=$this->category_warung_model->list_warung($id);
		$data['warungs']=$this->category_warung_model->get_warung();
		$data['title_kategori']=$this->category_warung_model->get_title($id);
		$this->load->view('dashboard/header');
		
		$this->load->view('category_warung/list_warung',$data);
		
		$this->load->view('dashboard/footer');

		
	}

	
}
