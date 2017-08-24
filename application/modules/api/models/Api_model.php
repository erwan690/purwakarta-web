<?php

class Api_model extends CI_Model 
{
	public function get_id_kategori($nama_kategori)
	{
		$this->db->select('id_kategori');
		$this->db->from('kategori');
		$this->db->where('nama_kategori',$nama_kategori);
		$query =$this->db->get();
		return $query->result();
	}

	public function get_all_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_detail_kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('warung');
		$this->db->where('id_kategori',$id_kategori);
		$query =$this->db->get();
		return $query->result();
	}

	public function get_detail_warung($id_warung)
	{
		$sql= "SELECT warung.nama_warung AS namawarung,
	   warung.telephone AS telephone,
	   warung.latitude AS latitude,
	   warung.longitude AS longitude,
	   warung.deskripsi AS deskripsi,
	   warung.image AS gambar,
	   alamat.kota AS kota,
       alamat.provinsi AS provinsi,
       alamat.alamat AS alamat,
       menu.image AS menu,
       (SELECT GROUP_CONCAT(fasilitas.nama_fasilitas ORDER BY fasilitas.nama_fasilitas SEPARATOR ',') FROM fasilitas_warung LEFT JOIN fasilitas ON fasilitas.id_fasilitas = fasilitas_warung.id_fasilitas WHERE fasilitas_warung.id_warung=warung.id_warung) AS fasilitas
       	FROM warung
 	LEFT JOIN alamat ON warung.id_warung = alamat.id_warung 
 	LEFT JOIN menu ON warung.id_warung = menu.id_warung
	LEFT JOIN fasilitas_warung ON alamat.id_warung = fasilitas_warung.id_warung
	WHERE warung.id_warung= ?
	GROUP BY warung.id_warung";
		$query=$this->db->query($sql,array($id_warung));
		return $query->result();

	}

	public function get_galeri($id_warung)
	{
		$this->db->select('image');
		$this->db->from('galeri');
		$this->db->where('id_warung',$id_warung);
		$query =$this->db->get();
		return $query->result();
	}

	public function get_all_warung()
	{
		$sql= "SELECT warung.id_warung,
	   warung.nama_warung AS namawarung,
	   warung.telephone AS telephone,
	   warung.latitude AS latitude,
	   warung.longitude AS longitude,
	   warung.deskripsi AS deskripsi,
	   warung.image AS gambar,
	   alamat.kota AS kota,
       alamat.provinsi AS provinsi,
       alamat.alamat AS alamat,
       menu.image AS menu,
       (SELECT GROUP_CONCAT(fasilitas.nama_fasilitas ORDER BY fasilitas.nama_fasilitas SEPARATOR ',') FROM fasilitas_warung LEFT JOIN fasilitas ON fasilitas.id_fasilitas = fasilitas_warung.id_fasilitas WHERE fasilitas_warung.id_warung=warung.id_warung) AS fasilitas
       	FROM warung
 	LEFT JOIN alamat ON warung.id_warung = alamat.id_warung 
 	LEFT JOIN menu ON warung.id_warung = menu.id_warung
	LEFT JOIN fasilitas_warung ON alamat.id_warung = fasilitas_warung.id_warung
	GROUP BY warung.id_warung";
		$query =$this->db->query($sql);
		return $query->result();

	}
	
}