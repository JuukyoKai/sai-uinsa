<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sadosmen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("sadosmen_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["sadosmen"] = $this->sadosmen_model->getAlll();
        $this->load->view("admin/sadosmen/list_dosmen", $data);
    }

    public function add_dosmen()
    {
        $sadosmen = $this->sadosmen_model;
        $validation = $this->form_validation;
        $validation->set_rules($sadosmen->rules());

        if ($validation->run()) {
            $sadosmen->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/sadosmen/new_dosmen");
    }

    public function edit_dosmen($id = null)
    {
        if (!isset($id)) redirect('admin/sadosmen');
       
        $dosmen = $this->sadosmen_model;
        $validation = $this->form_validation;
        $validation->set_rules($dosmen->rules());

        if ($validation->run()) {
            $dosmen->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sadosmen"] = $dosmen->getById($id);
        if (!$data["sadosmen"]) show_404();
        
        $this->load->view("admin/sadosmen/edit_dosmen", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sadosmen_model->delete($id)) {
            redirect(site_url('admin/sadosmen'));
        }
    }
}
