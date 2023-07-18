<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{

    private $_table = "agenda";
    public function rules()
    {
        return [
            [
                'field' => 'agenda',
                'label' => 'agenda',
                'rules' => 'required'
            ],

            [
                'field' => 'tempat',
                'label' => 'tempat',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal',
                'label' => 'tanggal',
                'rules' => 'required'
            ],
            [
                'field' => 'jam',
                'label' => 'jam',
                'rules' => 'required'
            ]
        ];
    }

    public function getAllagenda()
    {
        $this->db->from('agenda');
        $this->db->join('user', 'agenda.id_user = user.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_agenda() 
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->order_by('tanggal','DESC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }

    public function tambahAgenda()
    {
        $data=array(
            "id_user"=>$this->input->post("id_user"),
            "agenda" => $this->input->post("agenda"),
            "tempat" => $this->input->post("tempat"),
            "tanggal" => $this->input->post("tanggal"),
            "koordinator" => $this->input->post("koordinator"),
            "jam" => $this->input->post("jam")
        );
        $this->db->insert($this->_table, $data);
    }

    public function hapus($id){
        $this->db->where('id_agenda',$id);
        $this->db->delete('agenda');
    }

    public function getagendaid($id){
        return $this->db->get_where($this->_table, ['id_agenda' => $id])->row_array();
    }

    public function update(){
        $post = $this->input->post();
        $this->id_agenda = $post["id_agenda"];
        $this->id_user = $post["id_user"];
        $this->agenda = $post["agenda"];
        $this->tempat = $post["tempat"];
        $this->tanggal = $post["tanggal"];
        $this->koordinator = $post["koordinator"];
        $this->jam = $post["jam"];
        $this->db->update($this->_table, $this, array('id_agenda' => $post['id_agenda']));
    } 

    public function getJumlahAgenda()
    {
        return $this->db->query("SELECT COUNT('id_agenda') FROM agenda")->row_array();
    }
}
