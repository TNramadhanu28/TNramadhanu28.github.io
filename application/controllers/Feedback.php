<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model'); // Memuat model 'feedback_model'
        $this->load->library('form_validation'); // Memuat library 'form_validation'
    }

    public function index()
    {
        $this->load->view('home/feedback'); // Tampilkan halaman formulir feedback
    }

    public function simpan_feedback()
{
    // Validasi input sebelum menyimpan ke database
    $this->form_validation->set_rules('name', 'Customer Name', 'required');
    $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
    $this->form_validation->set_rules('pesan', 'Pesan', 'required');
    $this->form_validation->set_rules('rating', 'Rating', 'required|numeric|greater_than[0]|less_than[6]');

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, kembali ke halaman feedback_form dengan pesan error
        $this->load->view('bill/ulasan/');
    } else {
        // Jika validasi berhasil, ambil data dari formulir
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');
        $rating = $this->input->post('rating');

        // Memasukkan data-feedback ke dalam array
        $dataFeedback = array(
            'nama_user' => $name,
            'email' => $email,
            'pesan' => $pesan,
            'rating' => $rating,
        );

        // Menyimpan data-feedback ke dalam tabel 'user'
        $this->db->insert('user', $dataFeedback);

        // Redirect ke halaman yang sesuai setelah berhasil menyimpan feedback
        redirect('bill/ulasan/');
    }
}


    public function tampilkan_feedback()
{
    $data['feedback_list'] = $this->Feedback_model->get_all_user();

    $this->load->view('home/feedback', $data);
}



}
