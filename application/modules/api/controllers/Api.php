<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	       $this->load->model('api_model');

		   $this->load->helper(array('form', 'url'));		
		}

public function getkategori()
{
	$allkategori = $this->api_model->get_all_kategori();
	
	$datakategori= array();
	foreach ($allkategori as $key) 
	{
		$datakategori['kategoris'][]=$key;
	}
	$data = json_encode($datakategori);
	$this->output->set_content_type('application/json');
	$this->output->set_output($data);

}

public function getallwarung()
{
	$warung = $this->api_model->get_all_warung();
	$data = json_encode($warung);
	$this->output->set_content_type('application/json');
	$this->output->set_output($data);
}
public function getwarung($id_kategori)
{
	$legendaris = $this->api_model->get_detail_kategori($id_kategori);
	$datalegendaris= array();
	foreach ($legendaris as $key) 
	{
		$datalegendaris['warungs'][]=$key;
	}
	$data = json_encode($datalegendaris);
	$this->output->set_content_type('application/json');
	$this->output->set_output($data);
}

public function getdetail($id_warung){
	$warungs = $this->api_model->get_detail_warung($id_warung);
	$data = json_encode($warungs);
	$this->output->set_content_type('application/json');
	$this->output->set_output($data);

}

public function getgaleri($id_warung){
	$warungs = $this->api_model->get_galeri($id_warung);
	$data = json_encode($warungs);
	$this->output->set_content_type('application/json');
	$this->output->set_output($data);

}

}