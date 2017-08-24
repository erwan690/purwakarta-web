<?php

class Warung_model extends CI_Model 
{

	public function insert_warung($data)
	{
		$this->db->insert('warung',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function insert_alamat($data)
	{
		$this->db->insert('alamat',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function insert_comment($data)
	{
		$this->db->insert('testimonial',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function insert_fasilitas($data)
	{
		$this->db->insert('fasilitas_warung',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function insert_galeri($data)
	{
		$this->db->insert('galeri',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function insert_promosi($data)
	{
		$this->db->insert('promo',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function get_warung1()
	{
		$this->db->select('*');
		$this->db->from('warung');
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
	public function get_fasilitas()
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		$query =$this->db->get();
		return $query->result();
	}

	public function jumlah()
	{
		
		$query =$this->db->get('warung');
		return $query->num_rows();
	}
	public function get_warung($sampai,$dari)
	{
	
		$query =$this->db->get('warung',$sampai,$dari);
		return $query->result();

	}

	public function delete_warung($id)
	{
		//$this->delete_alamat_warung($id);
		//$this->delete_fasilitas_warung($id);
		//$this->delete_galeri_warung($id);
		//$this->delete_menu_warung($id);
		$this->db->where('id_warung',$id);
		$this->db->delete('warung');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function delete_fasilitas_warung($id)
	{
		$this->db->where('id_warung',$id);
		$this->db->delete('fasilitas_warung');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function delete_fasilitas_warung_satuan($id)
	{
		$this->db->where('id_fasilitas_warung',$id);
		$this->db->delete('fasilitas_warung');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function delete_galeri_warung($id)
	{
		$this->db->where('id_warung',$id);
		$this->db->delete('galeri');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function delete_promosi_warung($id)
	{
		$this->db->where('id_promo',$id);
		$this->db->delete('promo');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function delete_alamat_warung($id)
	{
		$this->db->where('id_warung',$id);
		$this->db->delete('alamat');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
		public function delete_menu_warung($id)
	{
		$this->db->where('id_warung',$id);
		$this->db->delete('menu');
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}
	public function edit_warung($id)
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}

	public function get_fasilitas_warung($id)
	{
		$this->db->select('*');
		$this->db->from('fasilitas_warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function get_galeri($id)
	{
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function get_images($id)
	{


		$this->db->select('image');
		$this->db->from('warung');
		$this->db->where('id_warung',$id);
		$this->db->get();
		$query1 = $this->db->last_query();


		$this->db->select('image');
		$this->db->from('menu');
		$this->db->where('id_warung',$id);
		$this->db->get();
		$query2 = $this->db->last_query();

		$this->db->select('image');
		$this->db->from('promo');
		$this->db->where('id_promo',$id);
		$this->db->get();
		$query3 = $this->db->last_query();

		$this->db->select('image');
		$this->db->from('galeri');
		$this->db->where('id_warung',$id);
		$this->db->get();
		$query4 = $this->db->last_query();

		$query = $this->db->query($query1." UNION ".$query2." UNION ".$query3." UNION ".$query4);
		return $query->result();


	}

	public function get_menu($id)
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();
		

	}
		public function get_promosi($id)
	{
		$this->db->select('*');
		$this->db->from('promo');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function get_alamat_warung($id)
	{
		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function add_warung_detail($id)
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();

	}
	public function update_warung($data,$id)
	{
		$this->db->where('id_warung',$id);
		$this->db->update('warung',$data);
		return ($this->db->affected_rows() != 1 ) ? false:true;
	}	

	public function detail_warung($id)
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();
	}

	public function get_comment($id)
	{
		$this->db->select('*');
		$this->db->from('testimonial');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();
	}

	public function get_fasilitas_warung_user($id)
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		$this->db->join('fasilitas_warung','fasilitas_warung.id_fasilitas=fasilitas.id_fasilitas');
		$this->db->where('fasilitas_warung.id_warung',$id);
		$query =$this->db->get();
		return $query->result();
	}
		public function get_alamat_warung_user($id)
	{

		$this->db->select('*');
		$this->db->from('alamat');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();
	}
		public function get_galeri_warung_user($id)
	{

		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();
	}
			public function get_menu_warung_user($id)
	{

		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('id_warung',$id);
		$query =$this->db->get();
		return $query->result();
	}

	public function get_jurnal(){

		$this->db->select('nama_jurnal');
		$this->db->from('jurnal');
		$query =$this->db->get();
		return $query->result();
	}

		public function get_warung_baru()
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->limit(10);
		$this->db->order_by('id_warung','asc');
		$query =$this->db->get();
		return $query->result();
	}
	
}
