<?php


class Todolist extends CI_Controller
{
    public function index(){
        $this->load->view("publicinc/header");
        $this->load->view("todolist");
        $this->load->view("publicinc/footer");
    }
}