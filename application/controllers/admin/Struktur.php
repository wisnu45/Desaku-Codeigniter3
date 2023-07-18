<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Struktur_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Desaku|| Agenda';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $data["struktur"] = $this->Struktur_model->getAll();
        $this->load->view("admin/struktur_list", $data);
    }


    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/struktur');
        $data['title'] = 'Desaku|| Agenda';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');

        $struktur = $this->Struktur_model;
        $validation = $this->form_validation;
        $validation->set_rules($struktur->rules());

        if ($validation->run()) {
            $struktur->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["struktur"] = $struktur->getById($id);
        if (!$data["struktur"]) show_404();

        $this->load->view("admin/struktur_edit_form", $data);
    }
}
