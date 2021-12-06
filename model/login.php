<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action($data)
    {
        $query = "SELECT * from users  WHERE username = '" . $data['username'] . "' AND password = '" . $data['password'] . "' AND isdisable = 0";

        $login = $this->conn->query($query)->fetch_assoc();
        if ($login != NULL) {
            if($login['isadmin'] == 1){
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
             
            }else{
               
                    $_SESSION['isLogin'] = true;
                    $_SESSION['login'] = $login;
                
            }
            header('Location: ?mod=home');
            //setcookie('msg1', 'Đăng nhập  thành công', time() + 5);
        } else {
            setcookie('msg1', 'Đăng nhập không thành công', time() + 5);
            header('Location: ?act=taikhoan#dangnhap');
        }
        
    }
    
    function logout()
    {    
        if(isset($_SESSION['isLogin_Admin'])){
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
      
        if(isset($_SESSION['isLogin'])){
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: ?act=home');
    }
    function check_account()
    {
        $query =  "SELECT * from users";

        require("result.php");

        return $data;
    }
  
    function error()
    {
        header('location: ?act=errors');
    }
    
    function dangky_action($data, $check1, $check2)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO users($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {
                    setcookie('msg', 'Đăng ký thành công', time() + 2);
                } else {
                    setcookie('msg', 'Đăng ký không thành công', time() + 2);
                }
            } else {
                setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
        }
        header('Location: ?act=taikhoan#dangky');
    }
}
