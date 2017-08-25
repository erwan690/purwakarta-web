
<?php

class Blog_model extends CI_Model
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

		public function insert_blogsi($data)
	{
		$this->db->insert('blog_view',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

		public function jumlah()
	{

		$query =$this->db->get('blog_view');
		return $query->num_rows();
	}

	public function get_blog1()
	{
		$this->db->select('*');
		$this->db->from('blog_view');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_blog($sampai,$dari)
	{

		$query =$this->db->get('blog_view',$sampai,$dari);
		return $query->result();
	}
	public function delete_blog($id)
	{
		$this->db->where('id_blog',$id);
		$this->db->delete('blog_view');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_blog($id)
	{
		$this->db->select('*');
		$this->db->from('blog_view');
		$this->db->where('id_blog',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_blog($data,$id)
	{
		$this->db->where('id_blog',$id);
		$this->db->update('blog_view',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
