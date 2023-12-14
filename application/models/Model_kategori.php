<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
    public function umum()
	{
		return $this->db->get_where('product', array('kategori' => 'Umum'));
	}

	public function bebas()
	{
		return $this->db->get_where('product', array('kategori' => 'Bebas'));
	}

	public function alat()
	{
		return $this->db->get_where('product', array('kategori' => 'Alat'));
	}

	public function mtk()
	{
		return $this->db->get_where('product', array('kategori' => 'Mtk'));
	}

	public function biologi()
	{
		return $this->db->get_where('product', array('kategori' => 'Biologi'));
	}

	public function fisika()
	{
		return $this->db->get_where('product', array('kategori' => 'Fisika'));
	}

	public function kimia()
	{
		return $this->db->get_where('product', array('kategori' => 'Kimia'));
	}

	public function kesenian()
	{
		return $this->db->get_where('product', array('kategori' => 'Kesenian'));
	}

	public function perangkat()
	{
		return $this->db->get_where('product', array('kategori' => 'Perangkat'));
	}

	public function bola()
	{
		return $this->db->get_where('product', array('kategori' => 'Bola'));
	}

    public function elektronik()
	{
		return $this->db->get_where('product', array('kategori' => 'Electronic'));
	}

	public function kesehatan()
	{
		return $this->db->get_where('product', array('kategori' => 'Kesehatan'));
	}

	public function kebersihan()
	{
		return $this->db->get_where('product', array('kategori' => 'Kebersihan'));
	}

	public function ulasan()
	{
		return $this->db->get_where('user', array('nama_user' => 'ulasan'));
	}

	
}
