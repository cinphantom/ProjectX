<?php
class Login extends CI_Controller
{
    public function index(){
        $data=array();
        $data['message']['get']=$this->input->get();
        if($this->input->method()=='post'){
            $data['message']['post'] = $this->input->post();
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
                ],
            ]);
            //validate
//            if(!$this->form_validation->run()){
//                $data['message'][0]='form_validation';
//                //validated
//                $user = $this->db->get_where('admin',['username'=>$this->input->post('username')])->row_array();
//                if(!$user){
//                    exit('wrong user');
//                }
//                if($user['password']!=$this->input->post('password')){
//                    exit('wrong password');
//                }
////                //access granted
//                $this->session->set_userdata('user',$user);
//                redirect(site_url(['site/index']));
//            }
            $data['message'][1]='form_validation_not_run';
        }
        $this->load->view('login', $data);
    }

    public function checkLogin(){
        $admin = $this->db->get_where('admin',['username'=>$this->input->post('username')])->row_array();

        if(!$admin){
            return false;
        }

        if($admin['password'] != $this->input->post('password')){
            return false;
        }

        //access granted
        $this->session->set_userdate(['admin'=>$admin]);
        return true;
    }

    public function logout(){
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect(site_url(['login/index']));
    }
}