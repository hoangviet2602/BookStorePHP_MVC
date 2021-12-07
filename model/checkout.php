<?php
require_once("model.php");
class Checkout extends Model
{
  function save($data){
    $f = "";
    $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO orders($f) VALUES ($v);";
    
    $status = $this->conn->query($query);

    $query_mahd = "select  orderid from orders ORDER BY timestamp DESC LIMIT 1";
    $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();

    foreach ($_SESSION['sanpham'] as $value) {
        $MaSP =$value['bookid'];
        $SoLuong = $value['quantity'];
        $DonGia = $value['price'];
        $MaHD = $data_mahd['orderid'];
        $query_ct = "INSERT INTO ordersdetails(orderid,bookid,qtyordered,amount) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia)";

        $status_ct = $this->conn->query($query_ct);
    }
    
    if ($status == true and $status_ct = true) {
        setcookie('msg', 'Đăng ký thành công', time() + 2);
        header('location: ?act=checkout&xuli=order_complete');
    } else {
        setcookie('msg', 'Đăng ký không thành công', time() + 2);
        header('location: ?act=checkout');
    }
  }
  function All()
    {
        $query = "select * from orders WHERE userid = ".$_SESSION['login']['userid'];

        require("result.php");

        return $data;
        
    }
    
}