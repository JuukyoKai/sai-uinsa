<?php

class Loginmhs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("loginmhs_model");
        $this->load->library('form_validation');
        // $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        if ($this->input->post()) {
            if ($this->loginmhs_model->doLogin()) redirect(site_url('mahasiswa/profil'));

            



        }
        $this->load->view("mahasiswa/login_mhs.php");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('mahasiswa/loginmhs/index'));
    }

    public function test()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
    }
}
