<?php
require_once("model/checkout.php");
class CheckoutController
{
    var $checkout_model;
    public function __construct()
    {
        $this->checkout_model = new Checkout();
    }
    function list()
    {
        if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->checkout_model->danhmuc();
            $data_chitietDM = array();

           
            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            require_once('view/index.php');
        } else {
            header('location: ?act=taikhoan');
        }
    }
    function list2()
    {
        $data = array();
        $data = $this->checkout_model->All();
        require_once('view/index.php');
    }
    function  save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }

        $data = array(
            'userid' => $_SESSION['login']['userid'],
            'timestamp' => $ThoiGian,
            'address' => $_POST['address'],
            'totalmoney' => $count,
            'receivername' =>    $_POST['receivername'],
            'phone' => $_POST['phone'],
            
            
            
        );
        $this->checkout_model->save($data);
    }
    function order_complete()
    {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('view/index.php');
    }
}
