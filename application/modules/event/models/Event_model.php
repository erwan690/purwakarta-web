
<?php

class Event_model extends CI_Model
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

		public function insert_eventsi($data)
	{
		$this->db->insert('event',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

		public function jumlah()
	{

		$query =$this->db->get('event');
		return $query->num_rows();
	}

	public function get_event1()
	{
		$this->db->select('*');
		$this->db->from('event');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_event($sampai,$dari)
	{

		$query =$this->db->get('event',$sampai,$dari);
		return $query->result();
	}
	public function delete_event($id)
	{
		$this->db->where('id_event',$id);
		$this->db->delete('event');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_event($id)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id_event',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_event($data,$id)
	{
		$this->db->where('id_event',$id);
		$this->db->update('event',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
