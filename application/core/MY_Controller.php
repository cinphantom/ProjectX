<?php


class MY_Controller
{
    public function __construct(){
        parent::__construct();

        $this->checkUser();

    }

    public function checkUser(){
        if(!$this->session->has_userdata('user')){
            redirect(site_url(['login/index']));
        }
    }
}