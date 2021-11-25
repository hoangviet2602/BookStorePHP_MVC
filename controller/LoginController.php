<?php
require_once("model/login.php");
class LoginController
{
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
    }
    
    function login()
    {
        require_once('view/index.php');
    }
    function login_action()
    {
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'username' => $taikhoan,
            'password' => $matkhau,
          
        );
        $this->login_model->login_action($data);
    }
    function dangxuat()
    {
        
        $this->login_model->logout();
    }
}
