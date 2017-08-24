
<?php

class Partner_model extends CI_Model 
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

		public function insert_partner($data)
	{
		$this->db->insert('partner',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

		public function jumlah()
	{
		
		$query =$this->db->get('partner');
		return $query->num_rows();
	}

	public function get_partner1()
	{
		$this->db->select('*');
		$this->db->from('partner');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_partner($sampai,$dari)
	{
		
		$query =$this->db->get('partner',$sampai,$dari);
		return $query->result();
	}

	
	public function delete_partner($id)
	{
		$this->db->where('id_partner',$id);
		$this->db->delete('partner');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_partner($id)
	{
		$this->db->select('*');
		$this->db->from('partner');
		$this->db->where('id_partner',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_partner($data,$id)
	{
		$this->db->where('id_partner',$id);
		$this->db->update('partner',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
