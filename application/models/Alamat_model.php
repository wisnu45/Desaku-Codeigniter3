<?php defined('BASEPATH') or exit('No direct script access allowed');

class Alamat_model extends CI_Model
{
    private $_table = "detail_alamat";

    public $id_alamat;
    public $jalan;
    public $rt;
    public $rw;
    public $nomor;

    public function rules()
    {
        return [
            [
                'field' => 'jalan',
                'label' => 'jalan',
                'rules' => 'required'
            ],

            [
                'field' => 'rt',
                'label' => 'rt',
                'rules' => 'numeric'
            ],

            [
                'field' => 'rw',
                'label' => 'rw',
                'rules' => 'numeric'
            ],

            [
                'field' => 'nomor',
                'label' => 'nomor',
                'rules' => 'numeric'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_alamat" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->jalan = $post["jalan"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->nomor = $post["nomor"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_alamat = $post['id_alamat'];
        $this->jalan = $post["jalan"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->nomor = $post["nomor"];
        $this->db->update($this->_table, $this, array('id_alamat' => $post['id_alamat']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_alamat" => $id));
    }
}
