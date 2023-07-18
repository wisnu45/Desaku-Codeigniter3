<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratOnlineAdmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
		$this->load->model('SuratModel');
		$this->load->library('form_validation');
		if ($this->session->userdata('jenis_user') != "Admin") {
			redirect('Login', 'refresh');
		}
	}


	public function index()
	{

		$data['nama2'] = $this->session->userdata('user');
		$data['idUser'] = $this->session->userdata('id');
		$data['title'] = "Desaku | Daftar Surat";
		$data['surat'] =  $this->SuratModel->getSurat();
		$this->load->view('admin/surat', $data);
	}


	public function surat_detail($id)
	{
		$data['title'] = 'Surat Detail';
		$data['idUser'] = $this->session->userdata('id');
		$data['nama2'] = $this->session->userdata('user');
		$data['suratDetail'] = ['Proses', 'Dapat diambil', 'Gagal'];
		$validation = $this->form_validation;
		$data['suratDetail'] = $this->SuratModel->getSuratId($id);
		$surat = $this->SuratModel;
		$validation = $this->form_validation;
		$validation->set_rules($surat->rules());


		if ($validation->run()) {
			$surat->updateStatusSurat();
			$this->session->set_flashdata('success', 'Data Berhasil disimpan');
			redirect('admin/SuratOnlineAdmin', 'refresh');
		}
		$this->load->view('admin/surat_detail', $data);
	}
}
