<?php
require_once("model/detail.php");
class DetailController
{
    var $detail_model;
    public function __construct()
    {
       $this->detail_model = new Detail();
    }
    
  
    function list()
    {
        $id = $_GET['id'];
        $data = $this->detail_model->detail_sp($id);
        $id2 = $data['authorid'];
       $data_tg = $this->detail_model->detail_tg($id2);
       $id3 = $data['categoryid'];
       $data_dm = $this->detail_model->detail_dm($id3);
       
        require_once('view/index.php');
    }
}