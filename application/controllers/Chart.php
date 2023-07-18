<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url', 'form', 'html');
    }


    public function bar_chart()
    {
    }


    public function index()
    {
        $query = $this->db->query("SELECT pendidikan as pen, COUNT(pendidikan) as pd FROM penduduk GROUP BY pendidikan");

        $record = $query->result();
        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->pen;
            $data['data'][] = $row->pd;
        }
        $data['chart_data'] = json_encode($data);
        $this->load->view('chart.php', $data);
    }


    public function jumlahSurat()
    {
    }
}

/* End of file Chart.php */
