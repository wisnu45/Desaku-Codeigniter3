<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alamat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Alamat_model");
        $this->load->library('form_validation');
        if ($this->session->userdata('jenis_user') != "Admin") {
            redirect('Login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Desaku|| Alamat';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $data["alamat"] = $this->Alamat_model->getAll();
        $this->load->view("admin/alamat_list", $data);
    }

    public function add()
    {
        $data['title'] = 'Desaku|| Alamat';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');
        $alamat = $this->Alamat_model;
        $validation = $this->form_validation;
        $validation->set_rules($alamat->rules());

        if ($validation->run()) {
            $alamat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/alamat_add", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/Alamat');

        $data['title'] = 'Desaku|| Alamat';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');

        $alamat = $this->Alamat_model;
        $validation = $this->form_validation;
        $validation->set_rules($alamat->rules());

        if ($validation->run()) {
            $alamat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["alamat"] = $alamat->getById($id);
        if (!$data["alamat"]) show_404();

        $this->load->view("admin/alamat_edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        $data['title'] = 'Desaku|| Alamat';
        $data['idUser'] = $this->session->userdata('id');
        $data['nama2'] = $this->session->userdata('username');

        if ($this->Alamat_model->delete($id)) {
            redirect(site_url('admin/Alamat'));
        }
    }
}
