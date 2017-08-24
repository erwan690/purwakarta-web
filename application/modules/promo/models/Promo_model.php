
<?php

class Promo_model extends CI_Model
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

		public function insert_promosi($data)
	{
		$this->db->insert('promo',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}

		public function jumlah()
	{

		$query =$this->db->get('promo');
		return $query->num_rows();
	}

	public function get_promo1()
	{
		$this->db->select('*');
		$this->db->from('promo');
		$query =$this->db->get();
		return $query->result();
	}
	public function get_promo($sampai,$dari)
	{

		$query =$this->db->get('promo',$sampai,$dari);
		return $query->result();
	}
	public function delete_promo($id)
	{
		$this->db->where('id_promo',$id);
		$this->db->delete('promo');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_promo($id)
	{
		$this->db->select('*');
		$this->db->from('promo');
		$this->db->where('id_promo',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_promo($data,$id)
	{
		$this->db->where('id_promo',$id);
		$this->db->update('promo',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
}
