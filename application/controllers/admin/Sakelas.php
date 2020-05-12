<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sakelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("sakelas_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["sakelas"] = $this->sakelas_model->getAll();
        
        $this->load->view("admin/sakelas/list_kelas", $data);
    }

    public function add_kelas()
    {
        $data['dosmen'] = $this->sakelas_model->get();
        $sakelas = $this->sakelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($sakelas->rules());

        if ($validation->run()) {
            $sakelas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/sakelas/new_kelas");
        
        }
  

    public function edit_kelas($id = null)
    {
        if (!isset($id)) redirect('admin/sakelas');
       
        $dosmen = $this->sadosmen_model;
        $validation = $this->form_validation;
        $validation->set_rules($dosmen->rules());

        if ($validation->run()) {
            $dosmen->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sadosmen"] = $dosmen->getById($id);
        if (!$data["sadosmen"]) show_404();
        
        $this->load->view("admin/sakelas/edit_kelas", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sakelas_model->delete($id)) {
            redirect(site_url('admin/sakelas'));
        }
    }
}