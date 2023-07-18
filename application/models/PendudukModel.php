<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PendudukModel extends CI_Model
{

    private $_pengaduan = "pengaduan";
    private $_penduduk = "penduduk";
    public $nik;
    public $id_alamat;
    public $nama;
    public $status;
    public $nomor_kk;
    public $jenis_kelamin;
    public $agama;
    public $status_penduduk;
    public $tempat_lahir;
    public $tgl_lahir;
    public $pendidikan;
    public $pekerjaan;
    public $status_kawin;
    public $foto = "default.jpg";



    public function tambahPengaduan()
    {
        $data = array(
            "perihal" => $this->input->post('perihal', true),
            "nik_pengadu" => $this->input->post('nik', true),
            "isi" => $this->input->post('isi', true)


        );
        $this->db->insert('pengaduan', $data);
    }


    public function getPengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan as p');
        $this->db->join('penduduk', 'p.nik_pengadu = penduduk.nik');
        return $this->db->get()->result_array();
    }

    public function getPengaduanId($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan as p');
        $this->db->join('penduduk', 'p.nik_pengadu = penduduk.nik');
        return $this->db->get_where($this->_pengaduan, ['p.id' => $id])->row_array();
    }

    public function getAll()
    {
        return $this->db->get($this->_penduduk)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_penduduk, ["nik" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->id_alamat = $post["id_alamat"];
        $this->nama = $post["nama"];
        $this->status = $post["status"];
        $this->nomor_kk = $post["nomor_kk"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->agama = $post["agama"];
        $this->status_penduduk = $post["status_penduduk"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->status_kawin = $post["status_kawin"];
        $this->foto = $this->_uploadImage();
        $this->db->insert($this->_penduduk, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->id_alamat = $post["id_alamat"];
        $this->nama = $post["nama"];
        $this->status = $post["status"];
        $this->nomor_kk = $post["nomor_kk"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->agama = $post["agama"];
        $this->status_penduduk = $post["status_penduduk"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->status_kawin = $post["status_kawin"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update($this->_penduduk, $this, array('nik' => $post['nik']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_penduduk, array("nik" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/foto-penduduk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nik;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $penduduk = $this->getById($id);
        if ($penduduk->foto != "default.jpg") {
            $filename = explode(".", $penduduk->foto)[0];
            return array_map('unlink', glob(FCPATH . "upload/foto-penduduk/$filename.*"));
        }
    }

    public function getJumlahPengaduan()
    {
        return $this->db->query("SELECT COUNT('id') FROM pengaduan")->row_array();
    }

    public function getJumlahPenduduk()
    {
        return $this->db->query("SELECT COUNT('nik') FROM penduduk")->row_array();
    }
}

/* End of file PendudukModel.php */
