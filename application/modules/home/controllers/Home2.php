<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper('url');

		
		}	
	
	//Shows the dashboard
	public function index()
	{
	
		$data['slide']=$this->home_model->get_slide();
		$data['album']=$this->home_model->get_album();
		$data['partner']=$this->home_model->get_partner();
		$this->load->view('dashboard/header2');
		
		$this->load->view('home/home2',$data);
		
		$this->load->view('dashboard/footer2');

		
	}

	public function autocomplete() {
        $search_data = $this->input->post('search_data');
        $query = $this->home_model->get_autocomplete($search_data);

        foreach ($query->result() as $row):
            echo "<li><a href='" . base_url() . "warung/detail_warung/" . $row->id_warung . "'>" . $row->nama_warung . "</a></li>";
        endforeach;
    }
}
