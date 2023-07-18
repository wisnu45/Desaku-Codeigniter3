<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendataan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PendudukModel');
		$this->load->library('form_validation');
		if ($this->session->userdata('jenis_user') != "Admin") {
			redirect('Login', 'refresh');
		}
	}

	public function index()
	{
		$data['title'] = "Desaku | Penduduk";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$data["penduduk"] = $this->PendudukModel->getAll();
		$this->load->view("admin/penduduk_view", $data);
	}

	public function penduduk_detail($id)
	{
		$data['title'] = "Desaku | Penduduk Detail";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$data['penduduk'] = $this->PendudukModel->getById($id);
		$this->load->view('admin/penduduk_detail', $data);
	}


	public function add()
	{
		$data['title'] = "Desaku | Tambah Penduduk";
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$penduduk = $this->PendudukModel;
		$validation = $this->form_validation;
		$this->form_validation->set_rules('nik', 'nik', 'trim|required');
		$this->form_validation->set_rules('id_alamat', 'id_alamat', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('nomor_kk', 'nomor_kk', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('status_penduduk', 'status_penduduk', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
		$this->form_validation->set_rules('status_kawin', 'status_kawin', 'trim|required');

		if ($validation->run()) {
			$penduduk->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/penduduk_new_form", $data);
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/penduduk_view');

		$penduduk = $this->PendudukModel;
		$validation = $this->form_validation;
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		$this->form_validation->set_rules('nik', 'nik', 'trim|required');
		$this->form_validation->set_rules('id_alamat', 'id_alamat', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('nomor_kk', 'nomor_kk', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('status_penduduk', 'status_penduduk', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
		$this->form_validation->set_rules('status_kawin', 'status_kawin', 'trim|required');

		if ($validation->run()) {
			$penduduk->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["penduduk"] = $penduduk->getById($id);
		if (!$data["penduduk"]) show_404();

		$this->load->view("admin/penduduk_edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->PendudukModel->delete($id)) {
			redirect(site_url('admin/pendataan'));
			$this->session->set_flashdata('success', 'Berhasil dihapus');
		}
	}
}
