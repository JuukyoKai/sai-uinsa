<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("prodi_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["hasil_test"] = $this->prodi_model->getAll();
        $this->load->view("prodi/product/main_prodi", $data);
    }

    
}