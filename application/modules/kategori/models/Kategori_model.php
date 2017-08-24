<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends CI_Model 
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

		public function insert_kategori($data)
	{
		$this->db->insert('kategori',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

		public function jumlah()
	{
		
		$query =$this->db->get('kategori');
		return $query->num_rows();
	}

	public function get_kategori1()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_kategori($sampai,$dari)
	{
		
		$query =$this->db->get('kategori',$sampai,$dari);
		return $query->result();
	}

	
	public function delete_kategori($id)
	{
		$this->db->select('id_kategori');
		$this->db->from('warung');
		$this->db->where('id_kategori',$id);
		$query= $this->db->get();
		if ($query->num_rows() > 0) 
		{
				return false;
		}
		else
		{
		$this->db->where('id_kategori',$id);
		$this->db->delete('kategori');
		$result = $this->db->affected_rows();
		//var_dump($result);
		//die();
		if ($result > 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
		
	}
	public function edit_kategori($id)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_kategori($data,$id)
	{
		$this->db->where('id_kategori',$id);
		$this->db->update('kategori',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
