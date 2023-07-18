<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Agenda_model');
		$this->load->model('Struktur_model');
		$this->load->model('Visi_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = "Sejarah Desa || Desaku";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/sejarah_desa.php', $data);
	}

	public function wilayah()
	{
		$data['title'] = "Desaku | Wilayah Desa";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/wilayah_desa', $data);
	}

	public function visi()
	{
		$data['title'] = "Desaku | Visi, Misi, dan Program Kerja";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$data['visi'] = $this->Visi_model->get();
		$this->load->view('users/visi_dan_misi', $data);
	}

	public function struktur()
	{
		$data['title'] = "Desaku | Struktur Organisasi";
		$data["struktur"] = $this->Struktur_model->getAll();
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/struktur_organisasi', $data);
	}

	public function data_wilayah()
	{
		$data['title'] = "Desaku | Data WIlayah Administartif";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/data_wilayah', $data);
	}

	public function data_pendidikan()
	{
		$query = $this->db->query("SELECT pendidikan as pen, COUNT(pendidikan) as pd FROM penduduk GROUP BY pendidikan");

		$record = $query->result();
		$data = [];

		foreach ($record as $row) {
			$data['label'][] = $row->pen;
			$data['data'][] = $row->pd;
		}
		$data['chart_data'] = json_encode($data);

		$data['title'] = "Desaku | Data Pendidikan";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/data_pendidikan', $data);
	}

	public function data_pekerjaan()
	{

		$query = $this->db->query("SELECT pekerjaan as pen, COUNT(pekerjaan) as pd FROM penduduk GROUP BY pekerjaan");
		$record = $query->result();
		$data = [];
		foreach ($record as $row) {
			$data['label2'][] = $row->pen;
			$data['data2'][] = $row->pd;
		}
		$data['chart_data2'] = json_encode($data);

		$data['title'] = "Desaku | Data Pekerjaan";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/data_pekerjaan', $data);
	}
	public function data_agama()
	{

		$query = $this->db->query("SELECT agama as pen, COUNT(agama) as pd FROM penduduk GROUP BY agama");
		$record = $query->result();
		$data = [];
		foreach ($record as $row) {
			$data['label3'][] = $row->pen;
			$data['data3'][] = $row->pd;
		}
		$data['chart_data3'] = json_encode($data);

		$data['title'] = "Desaku | Data Agama";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/data_agama', $data);
	}
	public function data_sex()
	{
		$data['title'] = "Desaku | Data Jenis Kelamin";
		$data['agenda'] = $this->Agenda_model->get_agenda();
		$this->load->view('users/data_sex', $data);
	}
}
