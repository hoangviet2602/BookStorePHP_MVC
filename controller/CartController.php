<?php
require_once("model/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_danhmuc = $this->cart_model->danhmuc();

        $data_chitietDM = array();

       

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('view/index.php');
    }
    function add_cart()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
            $arr['quantity'] = $arr['quantity'] + 1;
            $arr['ThanhTien'] = $arr['quantity'] * $arr["price"];
            $_SESSION['sanpham'][$id] = $arr;
        } else {
            $arr['bookid'] = $data['bookid'];
            $arr['bookname'] = $data['bookname'];
            $arr['price'] = $data['price'];
            $arr['quantity'] = 1;
            $arr['ThanhTien'] = $data['price'];
            $arr['bookimageurl'] = $data['bookimageurl'];
            $_SESSION['sanpham'][$id] = $arr;
        }

        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
        }

        header('Location:?act=cart#dxd');
    }
    function update_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['quantity'] = $arr['quantity'] + 1;
        $arr['ThanhTien'] = $arr['quantity'] * $arr["price"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location: ?act=cart#dxd');
    }
    function delete_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if ($arr['quantity'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['quantity'] = $arr['quantity'] - 1;
            $arr['ThanhTien'] = $arr['quantity'] * $arr["price"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?act=cart#dxd');
    }
    function deleteall_cart()
    {
        unset($_SESSION['sanpham']);
        header('Location: ?act=cart#dxd');
    }
}
