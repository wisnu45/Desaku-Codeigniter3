<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('url');
        if ($this->session->userdata('jenis_user') != "Admin") {
            redirect('Login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Desaku|| Agenda';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $data['agenda'] = $this->Agenda_model->getAllagenda();
        $this->load->view('admin/agenda', $data);
    }

    public function add_agenda()
    {
        $data['title'] = 'Desaku | Tambah Agenda';
        $data['nama2'] = $this->session->userdata('username');
        $data['idUser'] = $this->session->userdata('id');
        $agenda = $this->Agenda_model;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->tambahAgenda();
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        }
        $this->load->view('admin/form_add_agenda', $data);
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();
        $this->Agenda_model->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/agenda', 'refresh');
    }

    public function edit_agenda($id = null)
    {
        $data['title'] = 'Desaku | Edit Agenda';
        $data['nama2'] = $this->session->userdata('username');
        $data['idUser'] = $this->session->userdata('id');
        if (!isset($id)) redirect('admin/agenda');

        $agenda = $this->Agenda_model;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["agenda"] = $agenda->getagendaid($id);
        if (!$data["agenda"]) show_404();

        $this->load->view("admin/agenda_edit", $data);
    }
}
