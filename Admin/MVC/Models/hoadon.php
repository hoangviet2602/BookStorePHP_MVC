<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "orders";
    var $contens = "orderid";
    function trangthai($id){
        $query = "select * from orders where orderstatus = $id  ORDER BY orderid DESC";

        require("result.php");

        return $data;
    }
    function chitiethoadon($id){
        $query = "select ct.*, s.bookname as Ten from ordersdetails as ct, books as s where ct.bookid = s.bookid and ct.orderid = $id ";

        require("result.php");
        
        return $data;
    }
}