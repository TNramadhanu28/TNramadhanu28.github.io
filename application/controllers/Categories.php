<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function umum()
	{
		$data['title'] = 'Umum Categories';
		$data['umum'] = $this->model_kategori->umum()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('umum', $data);
		$this->load->view('layout/home/footer');
	}

	public function bebas()
	{
		$data['title'] = 'Bebas Categories';
		$data['bebas'] = $this->model_kategori->bebas()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('bebas', $data);
		$this->load->view('layout/home/footer');
	}

	public function alat()
	{
		$data['title'] = 'Alat Categories';
		$data['alat'] = $this->model_kategori->alat()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('alat', $data);
		$this->load->view('layout/home/footer');
	}

	public function mtk()
	{
		$data['title'] = 'Mtk Categories';
		$data['mtk'] = $this->model_kategori->mtk()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('mtk', $data);
		$this->load->view('layout/home/footer');
	}

	public function biologi()
	{
		$data['title'] = 'Biologi Categories';
		$data['biologi'] = $this->model_kategori->biologi()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('biologi', $data);
		$this->load->view('layout/home/footer');
	}

	public function fisika()
	{
		$data['title'] = 'Fisika Categories';
		$data['fisika'] = $this->model_kategori->fisika()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('fisika', $data);
		$this->load->view('layout/home/footer');
	}

	public function kimia()
	{
		$data['title'] = 'Kimia Categories';
		$data['kimia'] = $this->model_kategori->kimia()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('kimia', $data);
		$this->load->view('layout/home/footer');
	}

	public function kesenian()
	{
		$data['title'] = 'Kesenian Categories';
		$data['kesenian'] = $this->model_kategori->kesenian()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('kesenian', $data);
		$this->load->view('layout/home/footer');
	}

	public function perangkat()
	{
		$data['title'] = 'Perangkat Categories';
		$data['perangkat'] = $this->model_kategori->perangkat()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('perangkat', $data);
		$this->load->view('layout/home/footer');
	}

	public function bola()
	{
		$data['title'] = 'Bola Categories';
		$data['bola'] = $this->model_kategori->bola()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('bola', $data);
		$this->load->view('layout/home/footer');
	}

	public function elektronik()
	{
		$data['title'] = 'Elektronik Categories';
		$data['elektronik'] = $this->model_kategori->elektronik()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('electronic', $data);
		$this->load->view('layout/home/footer');	
	}

	public function kesehatan()
	{
		$data['title'] = 'Kesehetan Categories';
		$data['kesehatan'] = $this->model_kategori->kesehatan()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('kesehatan', $data);
		$this->load->view('layout/home/footer');
	}

	public function kebersihan()
	{
		$data['title'] = 'Kebersihan Categories';
		$data['kebersihan'] = $this->model_kategori->kebersihan()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('kebersihan', $data);
		$this->load->view('layout/home/footer');
	}

	public function ulasan()
	{
		$data['title'] = 'Ulasan';
		$data['ulasan'] = $this->model_kategori->ulasan()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('ulasan', $data);
		$this->load->view('layout/home/footer');
	}

	public function info()
	{
		$data['title'] = 'Info';
		$data['info'] = $this->model_kategori->info()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('info', $data);
		$this->load->view('layout/home/footer');
	}

	
}
