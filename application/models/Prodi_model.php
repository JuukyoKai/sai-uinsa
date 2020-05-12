<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $nim;
    public $name;
    public $jurusan;
    public $fakultas;
    public $tajwid;
    public $kelancaran;
    public $makhraj;
    public $gharib;
    public $tingkat;

    public function rules()
    {
        return [
            ['field' => 'nim',
            'label' => 'nim',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'name',
            'rules' => 'required'],
            
            ['field' => 'jurusan',
            'label' => 'jurusan',
            'rules' => 'required']
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

 /*   public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->nim = $post["nim"];
		$this->name = $post["name"];
		$this->jurusan = $post["jurusan"];
        $this->fakultas = $post["fakultas"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->nim = $post["nim"];
		$this->name = $post["name"];
        $this->jurusan = $post["jurusan"];
        $this->fakultas = $post["fakultas"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
		//$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("product_id" => $id));
	}
	
	/*private function _uploadImage()
	{
		$config['upload_path']          = './upload/product/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->product_id;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		if ($product->image != "default.jpg") {
			$filename = explode(".", $product->image)[0];
			return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
		}
	}*/

}
