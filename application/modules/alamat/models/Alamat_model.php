<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alamat_model extends CI_Model 
{

	/*public function insert_jurnal($data)
	{
		$this->db->insert('jurnal',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function get_jurnal1()
	{
		$this->db->select('*');
		$this->db->from('jurnal');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_jurnal($total,$page)
	{
		
		
		$this->db->limit($total);
		$this->db->where('id_jurnal ',$page);
		$query =$this->db->get('jurnal');
		return $query->result();
	}*/
	
	public function delete_alamat($id)
	{
		$this->db->where('id_alamat',$id);
		$this->db->delete('alamat');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_alamat($id)
	{
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('id_alamat',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_alamat($data,$id)
	{
		$this->db->where('id_alamat',$id);
		$this->db->update('alamat',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
