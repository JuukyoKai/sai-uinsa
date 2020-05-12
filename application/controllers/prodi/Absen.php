<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("absen_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["absen"] = $this->absen_model->getAll();
        $this->load->view("prodi/product/daftar_absen", $data);
    }

    
}
