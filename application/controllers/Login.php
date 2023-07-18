<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_model');
	}


	public function index()
	{
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Login Admin | Desa Trate";
			$this->load->view('Login/index', $data);
		} else {
			$this->index();
		}
	}


	public function proses_login()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars(md5($this->input->post('password')));

		$cek_login = $this->Login_model->login($username, $password);

		if ($cek_login) {
			foreach ($cek_login as $row) {
				$this->session->set_userdata('user', $row->username);
				$this->session->set_userdata('jenis_user', $row->jenis_user);
			}

			if ($this->session->userdata('jenis_user') == 'Admin') {
				redirect('admin/Overview');
			} else if ($this->session->userdata('jenis_user') == 'sekretaris') {
				redirect('sekretaris');
			} else if ($this->session->userdata('jenis_user') == 'Penduduk') {
				redirect('UserLogin/index');
			}
		} else {
			$this->session->set_flashdata('message', 'Username atau Password salah');
			redirect('Login', 'refresh');
		}
	}

	public function proses_login_penduduk()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars(md5($this->input->post('password')));

		$cek_login = $this->Login_model->login_penduduk($username, $password);

		if ($cek_login) {
			foreach ($cek_login as $row) {
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('jenis_user', $row->jenis_user);
			}
			if ($this->session->userdata('jenis_user') == 'Penduduk') {
				redirect('UserLogin/index');
			}
		} else {
			$this->session->set_flashdata('message', 'Username atau Password salah');
			redirect('/', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->userdata('Admin');
		$this->session->sess_destroy();
		redirect('Welcome', 'refresh');
	}


	public function logoutPenduduk()
	{
		$this->session->userdata('Penduduk');
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Berhasil Logout');
		redirect('Welcome');
	}

	public function buatAkunPenduduk()
	{
		$penduduk = $this->Login_model;
		$validation = $this->form_validation;
		$validation->set_rules($penduduk->rules());

		if ($validation->run() && $penduduk->registrasi_penduduk()) {
			$penduduk->registrasi_penduduk();
			$this->session->set_flashdata('success', 'Registrasi berhasil');
			redirect('/');
		} else {
			$this->session->set_flashdata('message', 'Data tidak valid');
			$this->load->view('Login/register_penduduk');
		}
	}


	public function buatAkunUser()
	{
		$user = $this->Login_model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if ($validation->run()) {
			$user->registrasi_user();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('Login/');
		}
		$this->load->view('Login/register_user');
	}

	public function view_profile_user($id)
	{
		$data['title'] = 'Desaku | Profil User';
		$data['nama2'] = $this->session->userdata('user');
		$data['idUser'] = $this->session->userdata('id');
		$data['profile'] = $this->Login_model->getById($id);
		$this->load->view('admin/profile_user', $data);
	}



	public function edit_user($id = null)
	{
		$data['nama2'] = $this->session->userdata('username');
		$data['idUser'] = $this->session->userdata('id');
		if (!isset($id)) redirect('Login/view_profile_user');

		$user = $this->Login_model;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if ($validation->run()) {
			$user->update_user();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["profile"] = $user->getById($id);
		if (!$data["profile"]) show_404();

		$this->load->view("admin/profile_user_edit", $data);
	}
}
