<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarabsen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftarabsen_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["daftarabsen"] = $this->daftarabsen_model->getAll();
        $this->load->view("dosmen/daftarabsen", $data);
    }

    public function add_mhs()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_mhs");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dosmen/daftarabsen');
       
        $daftarabsen = $this->daftarabsen_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftarabsen->rules());

        if ($validation->run()) {
            $daftarabsen->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $daftarabsen->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("dosmen/edit_absen", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}
