<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $tajwid;
    public $kelancaran;
    public $makhraj;
    public $gharib;
    public $quiz1;
    public $quiz2;
    public $uts;
    public $uas;

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
