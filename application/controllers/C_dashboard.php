<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('M_global');
        $this->load->helper('url');
    }

    public function index()
    {
        $data["allItem"] = $this->M_global->findAll();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();
        $this->load->view('public/dashboard', $data);
    }
}
