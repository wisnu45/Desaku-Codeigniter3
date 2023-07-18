<?php defined('BASEPATH') or exit('No direct script access allowed');

class Visi_model extends CI_Model
{
    private $_table = "visi_misi";

    public $id;
    public $visi;
    public $misi1;
    public $misi2;
    public $misi3;
    public $misi4;
    public $misi5;
    public $proker1;
    public $proker2;
    public $proker3;
    public $proker4;
    public $proker5;
    public $proker6;

    public function rules()
    {
        return [
            [
                'field' => 'visi',
                'label' => 'visi',
                'rules' => 'required'
            ],

            [
                'field' => 'misi1',
                'label' => 'misi1',
                'rules' => 'required'
            ],

            [
                'field' => 'misi2',
                'label' => 'misi2',
                'rules' => 'required'
            ],

            [
                'field' => 'misi3',
                'label' => 'misi3',
                'rules' => 'required'
            ],

            [
                'field' => 'proker1',
                'label' => 'proker1',
                'rules' => 'required'
            ],

            [
                'field' => 'proker2',
                'label' => 'proker2',
                'rules' => 'required'
            ],

            [
                'field' => 'proker3',
                'label' => 'proker3',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function get()
    {
        $this->db->select('*');
        $this->db->from('visi_misi');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->visi = $post["visi"];
        $this->misi1 = $post["misi1"];
        $this->misi2 = $post["misi2"];
        $this->misi3 = $post["misi3"];
        $this->misi4 = $post["misi4"];
        $this->misi5 = $post["misi5"];
        $this->proker1 = $post["proker1"];
        $this->proker2 = $post["proker2"];
        $this->proker3 = $post["proker3"];
        $this->proker4 = $post["proker4"];
        $this->proker5 = $post["proker5"];
        $this->proker6 = $post["proker6"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->visi = $post["visi"];
        $this->misi1 = $post["misi1"];
        $this->misi2 = $post["misi2"];
        $this->misi3 = $post["misi3"];
        $this->misi4 = $post["misi4"];
        $this->misi5 = $post["misi5"];
        $this->proker1 = $post["proker1"];
        $this->proker2 = $post["proker2"];
        $this->proker3 = $post["proker3"];
        $this->proker4 = $post["proker4"];
        $this->proker5 = $post["proker5"];
        $this->proker6 = $post["proker6"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
