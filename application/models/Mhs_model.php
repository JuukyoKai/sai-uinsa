<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $nim;
    public $name;
    public $jurusan;
    public $fakultas;


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


}
