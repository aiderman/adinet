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
        $this->load->view('public/dashboard', $data);
    }
    public function menuCetring()
    {
        $data["paket1"] = $this->M_global->listPaket1();
        $data["paket2"] = $this->M_global->listPaket2();
        $data["paket3"] = $this->M_global->listPaket3();
        // echo "<pre>";
        // echo print_r($data);
        // echo "</pre>";
        // die();

        $this->load->view('public/menuCetring', $data);
    }
    public function menuBox()
    {
        $data["box25"] = $this->M_global->listbox25();
        $data["box30"] = $this->M_global->listbox30();
        $data["box35"] = $this->M_global->listbox35();
        $data["box40"] = $this->M_global->listbox40();
        // echo "<pre>";
        // echo print_r($data);
        // echo "</pre>";
        // die();


        $this->load->view('public/menuBox', $data);
    }
}
