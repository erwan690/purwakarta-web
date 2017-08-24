<?php

class Menu_model extends CI_Model 
{

	public function insert_menu($data)
	{
		$this->db->insert('menu',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

	public function add_warung_detail($id)
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}

	public function delete_menu($id)
	{
		$this->db->where('id_menu',$id);
		$this->db->delete('menu');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

	public function get_menu()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->limit(10);
		$this->db->order_by('id_menu','asc');
		$query =$this->db->get();
		return $query->result();
	}
	

}
