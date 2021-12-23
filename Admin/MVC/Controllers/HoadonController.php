<?php
require_once("MVC/models/hoadon.php");
class HoaDonController
{
    var $hoadon_model;
    var $ct_hoadon_model;
    public function __construct()
    {
        $this->hoadon_model = new Hoadon();
      
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->hoadon_model->trangthai($id);
        } else {
            $data = $this->hoadon_model->All();
        }
        require_once("MVC/Views/Admin/index.php");
    }
    function xetduyet()
    {
        $data = array(
            'orderid' => $_GET['id'],
            'orderstatus' => 1,
        );
        $this->hoadon_model->update($data);
    }
    function tuchoi()
    {
        $data = array(
            'orderid' => $_GET['id'],
            'orderstatus' => 2,
        );
        $this->hoadon_model->update($data);
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->hoadon_model->delete($_GET['id']);
        }
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->chitiethoadon($id);
        require_once("MVC/Views/Admin/index.php");
    }
}
