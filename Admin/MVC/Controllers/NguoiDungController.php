<?php
require_once("MVC/Models/nguoidung.php");
class NguoiDungController
{
    var $nguoidung_model;

    public function __construct()
    {
        $this->nguoidung_model = new nguoidung();
      
    }
    public function list()
    {
        $data = $this->nguoidung_model->All();
        require_once("MVC/Views/Admin/index.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
        require_once("MVC/Views/Admin/index.php");
    }
    public function add()
    {
        require_once("MVC/Views/Admin/index.php");
    }
    public function store()
    {
        $data = array(
            'password' => md5($_POST['password']),
            'username' => $_POST['username'],
            'isadmin' =>  '1',
            'isdisable'  =>  '0',
            'fullname' =>    $_POST['Ho'],
            'phone'  =>   $_POST['phone'],
            'email' =>    $_POST['email'],
            'male' => $_POST['male'],     
            'address'  =>   $_POST['address'],  
            'dob' => $_POST['dob'],     
             
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->nguoidung_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/authors/edit.php");
    }
    public function update()
    {
        $data = array(
            'userid' => $_POST['userid'],
            'password' => md5($_POST['password']),
            'username' => $_POST['username'],
            'isadmin' =>  '1',
            'isdisable'  =>  '0',
            'fullname' =>    $_POST['Ho'],
            'phone'  =>   $_POST['phone'],
            'email' =>    $_POST['email'],
            'male' => $_POST['male'],     
            'address'  =>   $_POST['address'],  
            'dob' => $_POST['dob'],   
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->update($data);
    }
}
