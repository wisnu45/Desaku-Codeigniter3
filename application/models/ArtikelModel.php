<?php


defined('BASEPATH') or exit('No direct script access allowed');

class ArtikelModel extends CI_Model
{

    private $_table = "artikel";

    public function getArtikel()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('artikel as p');
        return $this->db->get_where($this->_table, ['p.id' => $id])->row_array();
    }
}

/* End of file ArtikelModel.php */
