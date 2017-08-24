<?php

class Galeri_model extends CI_Model 
{

	public function insert_galeri($data)
	{
		$this->db->insert('galeri',$data);
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

	public function delete_galeri($id)
	{
		$this->db->where('id_galeri',$id);
		$this->db->delete('galeri');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}


	public function get_benihbuah1()
	{
		$this->db->select('*');
		$this->db->from('bbenih');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_benihbuah($sampai,$dari)
	{
		
		$query =$this->db->get('bbenih',$sampai,$dari);
		return $query->result();
	}

	public function jumlah()
	{
		
		$query =$this->db->get('bbenih');
		return $query->num_rows();
	}

	public function get_benihs1()
	{
		$this->db->select('*');
		$this->db->from('sbenih');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_benihs($sampai,$dari)
	{
		
		$query =$this->db->get('sbenih',$sampai,$dari);
		return $query->result();
	}

	public function jumlahs()
	{
		
		$query =$this->db->get('sbenih');
		return $query->num_rows();
	}


}
