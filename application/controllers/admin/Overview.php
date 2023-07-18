<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
		$this->load->model('SuratModel');
		$this->load->model('PendudukModel');
		$this->load->model('agenda_model');
		$this->load->model('PendudukModel');
		$this->load->library('form_validation');
		if ($this->session->userdata('jenis_user') != "Admin") {
			redirect('Login', 'refresh');
		}
	}


	public function index()
	{


		$query = $this->db->query("SELECT pendidikan as pen, COUNT(pendidikan) as pd FROM penduduk GROUP BY pendidikan");

		$record = $query->result();
		$data1 = [];

		foreach ($record as $row) {
			$data1['label'][] = $row->pen;
			$data1['data'][] = $row->pd;
		}
		$data1['chart_data'] = json_encode($data1);


		// Pekerjaan
		$query = $this->db->query("SELECT pekerjaan as pen, COUNT(pekerjaan) as pd FROM penduduk GROUP BY pekerjaan");

		$record = $query->result();
		$data2 = [];

		foreach ($record as $row) {
			$data2['label2'][] = $row->pen;
			$data2['data2'][] = $row->pd;
		}

		$data2['chart_data2'] = json_encode($data2);

		//Agama
		$query = $this->db->query("SELECT agama as pen, COUNT(agama) as pd FROM penduduk GROUP BY agama");
		$record = $query->result();
		$data3 = [];

		foreach ($record as $row) {
			$data3['label3'][] = $row->pen;
			$data3['data3'][] = $row->pd;
		}
		$data3['chart_data3'] = json_encode($data3);

		//jenis Kelamin
		$query = $this->db->query("SELECT jenis_kelamin as pen, COUNT(jenis_kelamin) as pd FROM penduduk GROUP BY jenis_kelamin");
		$record = $query->result();
		$data4 = [];
		foreach ($record as $row) {
			$data4['label4'][] = $row->pen;
			$data4['data4'][] = $row->pd;
		}
		$data3['chart_data4'] = json_encode($data4);


		//agenda
		$data['nama2'] = $this->session->userdata('user');
		$data['idUser'] = $this->session->userdata('id');
		$data['surat'] =  $this->SuratModel->getJumlahSurat();
		$data['pengaduan'] =  $this->PendudukModel->getJumlahPengaduan();
		$data['agenda'] =  $this->agenda_model->getJumlahAgenda();
		$data['penduduk'] =  $this->PendudukModel->getJumlahPenduduk();

		$data = array_merge($data, $data2, $data1, $data3, $data4);


		$this->load->view('admin/overview', $data);
	}
}
