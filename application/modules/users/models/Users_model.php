<?php 

class Users_model extends CI_Model 
{


	public function insert_register($data)
	{
		$this->db->insert('user',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

	public function check_login()
	{
		$this->db->where('surename',$_POST['surename']);
		$this->db->where('password',sha1($_POST['password']));
		return $this->db->get('user')->num_rows();
	}

	/*Get Session values */
		
	function get_id()
	{
		$username=$_POST['surename'];
		$password=sha1($_POST['password']);
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('password', $password);
		$this->db->where('surename', $username);
		$query = $this->db->get();
		return $query->result();
				
	}

	function get_user($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->result();
				
	}



}
?>