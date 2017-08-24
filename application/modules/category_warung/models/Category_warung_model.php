<?php 
class Category_warung_model extends CI_Model 
{
	
public function list_warung($id)
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->where('id_kategori',$id);
		$query =$this->db->get();
		return $query->result();

	}

public function get_title($id)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$query =$this->db->get();
		return $query->result();

	}

		public function get_warung()
	{
		$this->db->select('*');

		$query =$this->db->get('warung','4');
		return $query->result();
	}
}

?>