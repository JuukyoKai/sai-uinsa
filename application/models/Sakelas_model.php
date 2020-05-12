<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sakelas_model extends CI_Model
{
    private $_table = "kelas";


    public $id;
    public $nama_kelas;
    public $jadwal;
    public $ruang;
    public $name;

    public function rules()
    {
        return [
            ['field' => 'nama_kelas',
            'label' => 'nama_kelas',
            'rules' => 'required'],

            ['field' => 'jadwal',
            'label' => 'jadwal',
            'rules' => 'required'],
            
            ['field' => 'ruang',
            'label' => 'ruang',
            'rules' => 'required']
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAllGroups()
        {
            /*
            $query = $this->db->get('location');

            foreach ($query->result() as $row)
            {
                echo $row->description;
            }*/
            $this->db->select('name');
            $this->db->from('dosmen');
            $query = $this->db->get();
            return $query->result_array();




            //echo 'Total Results: ' . $query->num_rows();
        }
        function get(){
            $query = $this->db->query('SELECT * FROM dosmen');
            return $query->result();
        }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nip" => $id])->row();
    }

    

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_kelas = $post["nama_kelas"];
		$this->jadwal = $post["jadwal"];
        $this->ruang = $post["ruang"];
        $this->name = $post["name"];
        $this->db->insert($this->_table, $this);
    }



    public function delete($id)
    {
		//$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
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
