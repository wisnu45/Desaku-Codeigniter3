<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    private $_table = "artikel";

    public $id_artikel;
    public $id_user;
    public $judul;
    public $gambar_judul = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }


    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('artikel as a');
        $this->db->join('user', 'a.id_user = user.id');
        return $this->db->get()->result_array();
	}
	
	public function get_agenda() 
    {
        $this->db->select('*');
        $this->db->from('artikel as a');
        $this->db->join('user', 'a.id_user = user.id');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getById($id)
    {
		$this->db->select('*');
        $this->db->from('artikel as a');
        $this->db->join('user', 'a.id_user = user.id');
        return $this->db->get_where($this->_table, ['a.id_artikel' => $id])->row_array();
	}
	


    public function save()
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
		$this->id_user = $post["id_user"];
		$this->gambar_judul = $this->_uploadImage();
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id_artikel"];
		$this->judul = $post["judul"];
		$this->id_user = $post["id_user"];
		
		if (!empty($_FILES["gambar_judul"]["name"])) {
            $this->gambar_judul = $this->_uploadImage();
        } else {
            $this->gambar_judul = $post["old_image"];
		}

        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('id_artikel' => $post['id_artikel']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_artikel" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/artikel/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->judul;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar_judul')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		if ($product['gambar_judul'] != "default.jpg") {
			$filename = explode(".", $product->gambar_judul)[0];
			return array_map('unlink', glob(FCPATH."upload/artikel/$filename.*"));
		}
	}

}
