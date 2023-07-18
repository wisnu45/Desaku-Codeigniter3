<?php defined('BASEPATH') or exit('No direct script access allowed');

class Struktur_model extends CI_Model
{
    private $_table = "struktur_organisasi";

    public $id;
    public $id_penduduk;
    public $jabatan;

    public function rules()
    {
        return [
            [
                'field' => 'id_penduduk',
                'label' => 'id_penduduk',
                'rules' => 'required'
            ],

            [
                'field' => 'jabatan',
                'label' => 'jabatan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('struktur_organisasi as s');
        $this->db->join('penduduk', 's.id_penduduk = penduduk.nik');
        return $this->db->get()->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }



    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->id_penduduk = $post["id_penduduk"];
        $this->jabatan = $post["jabatan"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}
