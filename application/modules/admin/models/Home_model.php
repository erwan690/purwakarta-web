<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function check_login()
	{
		$this->db->where('username',$_POST['username']);
		$this->db->where('password',md5($_POST['password']));
		return $this->db->get('admin')->num_rows();
	}

	/*Get Session values */
		
	function get_id()
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('password', $password);
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->result();
				
	}

}
