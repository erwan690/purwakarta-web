<?php 

class Home_model extends CI_Model 
{


	public function get_slide()
	{
		$this->db->select('*');
		$this->db->from('slide');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_album()
	{
		$this->db->select('*');
		$this->db->from('album_slide');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_partner()
	{
		$this->db->select('*');
		$this->db->from('partner');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$query =$this->db->get();
		return $query->result();
	}

		public function get_warung()
	{
		$this->db->select('*');

		$query =$this->db->get('warung','4');
		return $query->result();
	}
	public function get_autocomplete($search_data) {
        $this->db->select('*');
        $this->db->like('nama_warung', $search_data);
        return $this->db->get('warung', 10);
    }
}
?>