<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaikemajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("nilaikemajuan_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["nilaikemajuan"] = $this->nilaikemajuan_model->getAll();
        $this->load->view("dosmen/nilaikemajuan", $data);
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

        $this->load->view("dosmen/nilaikemajuan");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dosmen/nilaikemajuan');
       
        $nilaikemajuan = $this->nilaikemajuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($nilaikemajuan->rules());

        if ($validation->run()) {
            $nilaikemajuan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $nilaikemajuan->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("dosmen/edit_nilaikemajuan", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}
