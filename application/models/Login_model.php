<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{

    private $_user = "user";
    private $_penduduk = "penduduk_login";
    public $password;
    public $username;
    public $no_telp;
    public $email;
    public $alamat;
    public $foto = "default.jpg";
    public $jenis_user;

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],

            [
                'field' => 'no_telp',
                'label' => 'no_telp',
                'rules' => 'required|numeric'
            ]
        ];
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return FALSE;
        } else {

            foreach ($query->result() as $login) {
                $sess_data['id'] = $login->id;
                $sess_data['username'] = $login->username;
                $sess_data['password'] = $login->password;
                $this->session->set_userdata($sess_data);
            }
            return $query->result();
        }
    }

    public function login_penduduk($username, $password)
    {
        $this->db->select('*');
        $this->db->from('penduduk_login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            foreach ($query->result() as $login) {
                $sess_data['id'] = $login->id;
                $sess_data['username'] = $login->username;
                $sess_data['password'] = $login->password;
                $this->session->set_userdata($sess_data);
            }
            return $query->result();
        }
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_user, ["id" => $id])->row();
    }


    public function getAllagenda()
    {
        $this->db->from('agenda');
        $this->db->join('user', 'agenda.id_user = user.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getByIdPenduduk($id)
    {

        $this->db->select('*');
        $this->db->from('penduduk_login as pl');
        $this->db->join('penduduk', 'pl.username = penduduk.nik');
        $this->db->join('detail_alamat as al', 'penduduk.id_alamat=al.id_alamat');
        return $this->db->get_where($this->_penduduk, ["pl.id" => $id])->row();
    }

    public function registrasi_user()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->jenis_user = $post["jenis_user"];
        $this->email = $post["email"];
        $this->no_telp = $post["no_telp"];
        $this->alamat = $post["alamat"];
        $this->foto = $this->_uploadImage();
        $this->db->insert($this->_user, $this);
    }



    public function registrasi_penduduk()
    {
        $data = array(
            "username" => $this->input->post("username"),
            "password" => md5($this->input->post("password")),
            "no_telp" => $this->input->post("no_telp")
        );
        $cek = $this->db->insert($this->_penduduk, $data);
    }


    public function update_user()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->no_telp = $post["no_telp"];
        $this->alamat = $post["alamat"];
        $this->password = md5($post["password"]);
        $this->jenis_user = $post["jenis_user"];



        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update($this->_user, $this, array('id' => $post['id']));
    }


    private function _uploadImage()
    {
        $config['upload_path']          = './upload/foto-user/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->username;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $user = $this->getById($id);
        if ($user->foto != "default.jpg") {
            $filename = explode(".", $user->foto)[0];
            return array_map('unlink', glob(FCPATH . "upload/user/$filename.*"));
        }
    }
}
    
    /* End of file Login_Model.php */
