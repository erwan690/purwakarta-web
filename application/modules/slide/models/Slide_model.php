<?php

class Slide_model extends CI_Model 
{

	public function insert_slide($data)
	{
		$this->db->insert('slide',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function insert_album($data)
	{
	$this->db->insert('album_slide',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function get_slide1()
	{
		$this->db->select('*');
		$this->db->from('slide');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_album1()
	{
		$this->db->select('*');
		$this->db->from('album_slide');
		$query =$this->db->get();
		return $query->result();
	}

	public function get_images()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$query =$this->db->get();
		return $query->result();
	}

	public function get_slide($sampai,$dari)
	{
		$this->db->where('id_album',$dari);
		$query =$this->db->get('slide',$sampai);
		return $query->result();
	}
	public function get_album($sampai,$dari)
	{
		
		$query =$this->db->get('album_slide',$sampai,$dari);
		return $query->result();
	}
	public function get_album_id($id)
	{
		
		$this->db->select('*');
		$this->db->from('album_slide');
		$this->db->where('id_album',$id);
		$query =$this->db->get();
		return $query->result();
	}
	public function jumlah($id)
	{
		$this->db->where('id_album',$id);
		$query =$this->db->get('slide');
		return $query->num_rows();
	}


	public function jumlah_album()
	{
		
		$query =$this->db->get('album_slide');

		return $query->num_rows();
	}

	public function delete_slide($id)
	{
		$this->db->where('id_slide',$id);
		$this->db->delete('slide');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_slide($id)
	{
		$this->db->select('*');
		$this->db->from('slide');
		$this->db->where('id_slide',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function edit_slide_warung($id)
	{
		$this->db->select('*');
		$this->db->from('slide_warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_slide($data,$id)
	{
		$this->db->where('id_slide',$id);
		$this->db->update('slide',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function edit_album_slide($data,$id)
	{
		$this->db->where('id_album',$id);
		$this->db->update('album_slide',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

}
