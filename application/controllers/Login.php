<?php
class Login extends CI_Controller
{
    public function index(){
        $this->load->helper("form");


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

//                $user = $this->db->get_where('user',['username'=>$this->input->post('username')])->row_array();
//                if(!$user){
//                    echo();
//                }
                $html=<<<A
                    <script
                            type="text/javascript">
                            $('.mask,.dialog').show();
                            $('.dialog .dialog-hd p').html('Something goes wrong!');
                            $('.dialog .dialog-bd p').html('没有找到该用户，请确认用户名');
                        }
                    </script>
A;

            }else{
                $html="";
            }
        }
        $data=array('html'=>"haglkjas");
        $this->load->helper('url');
        $this->load->view('login', $data);
    }
}