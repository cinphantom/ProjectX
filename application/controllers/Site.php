<?php
class Site extends CI_Controller
{
    public function index(){
        $this->load->view('publicinc/header');
        $this->load->view('index');
        $this->load->view('publicinc/footer');
    }
}