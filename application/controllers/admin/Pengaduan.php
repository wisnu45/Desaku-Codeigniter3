<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PendudukModel');
        $this->load->library('session');
        if ($this->session->userdata('jenis_user') != "Admin") {
            redirect('login', 'refresh');
        }
    }
    public function index()
    {
        $data['nama2'] = $this->session->userdata('user');
        $data['idUser'] = $this->session->userdata('id');
        $data['title'] = "Daftar Pengaduan";
        $data['pengaduan'] = $this->PendudukModel->getPengaduan();
        $this->load->view('admin/pengaduan', $data);
    }


    public function pengaduan_detail($id)
    {
        $data['nama2'] = $this->session->userdata('user');
        $data['idUser'] = $this->session->userdata('id');
        $data['title'] = "Desaku | Pengaduan Detail";
        $data['pengaduanDetail'] = $this->PendudukModel->getPengaduanId($id);
        $this->load->view('admin/pengaduan_detail', $data);
    }
}

/* End of file Pengaduan.php */
