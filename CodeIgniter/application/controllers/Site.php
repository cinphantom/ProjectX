<?php


class Site extends CI_Controller
{
    var $title;
    public function __construct(){
        parent::__construct();
    }
    private function tiny(){
        return 46;
    }
    public function ads(){
        $a = $this->tiny();
        echo $a;
    }
    public function index(){
        echo "i'm index";
    }
    public function url(){
        $this->load->helper('url');
        echo site_url('site/index');
    }
}