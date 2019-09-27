<?php
class Login extends CI_Controller
{
    public function index(){

        $this->load->helper("form");
        $this->load->helper('viewanimated');
        if($this->input->method()=='post'){
            //validate the login post form
            $this->load->library('form_validation');
            //define the rules
            $this->form_validation->set_rules([
                [
                    'field' => 'username',
                    'label' => '用户名',
                    'rules' => 'required',
                    'errors' => ['required' => '%s必须填写',]
                ],
                [
                    'field' => 'password',
                    'label' => '密码',
                    'rules' => 'required',
                    'errors' => ['required' => '%s必须填写',]
                ]
            ]);
            //validate
            if($this->form_validation->run()){
                $html="yes";
            }else{
                $html="wrong";
            }
            $data=array('html'=>$html);
            $this->load->helper('url');
            $this->load->view('login', $data);
        }
    }
}