<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk menyimpan data feedback baru ke dalam database
    public function simpan_feedback($data) {
        return $this->db->insert('user', $data);
    }

    // Fungsi untuk mengambil semua data feedback dari database
    public function get_all_feedback() {
        // Mengambil data dari tabel 'user' kecuali data admin
        $this->db->where('level !=', '1');
        $this->db->where('pesan IS NOT NULL');
        $this->db->where('rating IS NOT NULL');
        return $this->db->get('user')->result_array();
    }
    // Fungsi lainnya sesuai kebutuhan Anda, seperti update dan delete
}
