<?php

class Fasilitas_model extends CI_Model 
{

	public function insert_fasilitas($data)
	{
		$this->db->insert('fasilitas',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function get_fasilitas1()
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		$query =$this->db->get();
		return $query->result();
	}

	public function get_fasilitas($sampai,$dari)
	{
		
		$query =$this->db->get('fasilitas',$sampai,$dari);
		return $query->result();
	}

	public function jumlah()
	{
		
		$query =$this->db->get('fasilitas');
		return $query->num_rows();
	}

	public function delete_fasilitas($id)
	{
		$this->db->where('id_fasilitas',$id);
		$this->db->delete('fasilitas');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_fasilitas($id)
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		$this->db->where('id_fasilitas',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function edit_fasilitas_warung($id)
	{
		$this->db->select('*');
		$this->db->from('fasilitas_warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_fasilitas($data,$id)
	{
		$this->db->where('id_fasilitas',$id);
		$this->db->update('fasilitas',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
