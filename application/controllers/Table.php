<?php


class table extends CI_Controller
{
    public function index(){
        $this->load->view("publicinc/header");
        $this->load->view("table");
        $this->load->view("publicinc/footer");
    }
}