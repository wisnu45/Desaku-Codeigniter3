<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuratModel extends CI_Model
{

    private $_surat = "surat";


    public function rules()
    {
        return [
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ]
        ];
    }


    public function tambahSurat()
    {
        $data = array(
            "nik_pemohon" => $this->input->post('nik', true),
            "id_detail_surat" => $this->input->post('category', true),
            "isi" => $this->input->post('isi', true)
        );
        $this->db->insert('surat', $data);
    }

    public function getNameSurat()
    {
        $this->db->select('*');
        $this->db->from('surat as s');
        $this->db->join('penduduk', 's.nik_pemohon = penduduk.nik');
        $this->db->join('detail_surat as ds', 's.id_surat=ds.id');
        $this->db->where('nik_pemohon', $this->session->userdata('username'));
        $this->db->order_by('id_surat', 'desc');
        return $this->db->get()->result_array();
    }


    public function getSurat()
    {
        $this->db->select('*');
        $this->db->from('surat as s');
        $this->db->join('penduduk', 's.nik_pemohon = penduduk.nik');
        $this->db->join('detail_surat as ds', 's.id_surat=ds.id');
        return $this->db->get()->result_array();
    }


    public function getSuratId($id)
    {
        $this->db->select('*');
        $this->db->from('surat as s');
        $this->db->join('penduduk', 's.nik_pemohon = penduduk.nik');
        $this->db->join('detail_surat as ds', 's.id_surat=ds.id');
        return $this->db->get_where($this->_surat, ['s.id_surat' => $id])->row_array();
    }

    public function updateStatusSurat()
    {
        $post = $this->input->post();
        $this->id_surat    = $post["id"];
        $this->status_surat = $post["status"];
        $this->db->update($this->_surat, $this, array('id_surat' => $post['id']));
    }

    public function getJumlahSurat()
    {
        return $this->db->query("SELECT COUNT('id_surat') FROM surat")->row_array();
    }
}

/* End of file PendudukModel.php */
