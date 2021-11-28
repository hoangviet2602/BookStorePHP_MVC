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

    function dangky(){
        $check1 = 0; //check trung ten va email
        $check2 = 0;//check mat khau giong nhau
        $data_check = $this->login_model->check_account();

        //kiểm tra email và tài khoản đã tồn tại chưa
        foreach ($data_check as $value) {
            if ($value['email'] == $_POST['email'] || $value['username'] == $_POST['username']) {
                $check1 = 1;
            }
        }
        //kiểm tra password nhập lại có đúng không
        if ($_POST['password'] != $_POST['check_password']) {
            $check2 = 1;
        }
        
        //tạo mảng chứa dữ liệu nhập vào
        $data = array(
            'password' => md5($_POST['password']),
            'username' => $_POST['username'], 
            'isadmin' =>  '0',
            'isdisable' => '0',
            'fullname' => $_POST['fullname'],
            'phone' => $_POST['phone'],
            'email' =>    $_POST['email'],
            'male' => '1',
            'address' => "",
            'dob' => "",
        );

        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->login_model->dangky_action($data, $check1, $check2);
    }

}
