<?php
/**
 * @author: jin
 * @copyright: 2019
 *
 */


defined('BASEPATH') OR exit('No direct script access allowed');



if( ! function_exists('popping_logout')){

    /**
     * 此函数功能为弹出VIEW视图弹出框-登出；
     */
    function popping_logout(){
        $html = <<<A
            <script>
                $(function(){
                    $('#JsSignOut').click(function(){
                        $('.mask,.dialog').show();
                        $('.dialog .dialog-bd p').html('你将安全等出');
                        $('.dialog .dialog-hd strong').html('确认登出？');
                    });
                });
            </script>
A;
        echo $html;
    }

}

if( ! function_exists('poping_login')){

    /**
     * 此函数功能为弹出VIEW视图弹出框-登录；
     */
    function poping_login(){
        $html = <<<A
            <script>
                $(function(){
                    $('#JsSignIn').click(function(){
                        $('.mask,.dialog').show();
                        $('.dialog .dialog-bd p').html('你将安全等出');
                        $('.dialog .dialog-hd strong').html('确认登出？');                        
                    });
                });
            </script>
A;


    }

}


