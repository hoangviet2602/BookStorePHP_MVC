<?php
require("model.php");
class sanpham extends model
{
    var $table = "books";
    var $contens = "bookid";
    
    function tacgia(){
        $query = "select * from authors ";
       require("result.php");
        return $data;
    }
    //function loaisp(){
    //    $query = "select * from loaisanpham ";
    //    require("result.php");
     //   return $data;
    //}
    function danhmuc(){
        $query = "select * from categories ";
        require("result.php");
        return $data;
    }
}
