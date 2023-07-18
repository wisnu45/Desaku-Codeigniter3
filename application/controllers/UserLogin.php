<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PendudukModel');
		$this->load->model('SuratModel');
		$this->load->model('Login_model');
		$this->load->library('session');
		$this->load->library('form_validation');

		$session_pend = $this->session->userdata('jenis_user');
		if ($session_pend != "Penduduk") {
			redirect('Login', 'refresh');
		}
	}


	public function index()
	{
		$data['title'] = "Desaku | Beranda";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		//        $data['profile'] = $this->Login_model->getByIdPenduduk($id);
		$this->load->view('usersLogin/index', $data);
	}

	public function view_profil($id)
	{
		$data['title'] = "Desaku | Profil";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$data['profile'] = $this->Login_model->getByIdPenduduk($id);
		$this->load->view('usersLogin/profil', $data);
	}

	public function surat_online_view()
	{
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$data['title'] = "Desaku | Surat Online";
		$data['surat'] = $this->SuratModel->getNameSurat();
		$this->load->view('usersLogin/surat_online.php', $data);
	}


	public function surat_online_add_data()
	{
		$data['coba'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$this->form_validation->set_rules('nik', 'nik', 'trim|required');
		$this->form_validation->set_rules('category', 'category', 'trim|required');
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['nama2'] = $this->session->userdata('user');
			$data['title'] = "Desaku | Surat Online tambah data";
			$this->load->view('usersLogin/surat_online_add_data', $data);
		} else {
			$this->SuratModel->tambahSurat();
			redirect('UserLogin/surat_online_view', 'refresh');
		}
	}

	public function pengaduan()
	{
		$data['coba'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$this->form_validation->set_rules('perihal', 'perihal', 'trim|required');
		$this->form_validation->set_rules('isi', 'isi', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Desaku | Pengaduan";
			$this->load->view('usersLogin/pengaduan', $data);
		} else {
			$this->PendudukModel->tambahPengaduan();
			redirect('UserLogin', 'refresh');
		}
	}
}
