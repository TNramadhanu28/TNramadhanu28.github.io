<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Arkas Home';
		$data['product'] = $this->model_pembayaran->get('product')->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('home', $data);
		$this->load->view('layout/home/footer');
	}

	public function info()
	{
		$data['title'] = 'INFO';
		$this->load->view('layout/home/header', $data);
		$this->load->view('info', $data);
		$this->load->view('layout/home/footer');
	}

	public function feedback()
    {
    $data['title'] = 'Ulasan';
    
    // Ambil data feedback dari model Feedback_model
    $this->load->model('Feedback_model');
    $data['feedback_list'] = $this->Feedback_model->get_all_feedback();

    // Muat view 'feedback' sambil mengirimkan data feedback
    $this->load->view('layout/home/header', $data);
    $this->load->view('feedback', $data);
    $this->load->view('layout/home/footer');
     }

}
