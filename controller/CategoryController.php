<?php
require_once("model/Category.php");
class CategoryController
{
    var $category_model;
    public function __construct()
    {
       $this->category_model = new Category();
    }
    
  
    function list()
    {
        
        $id = $_GET['id'];
        $value = $this->category_model->detail_sp($id);
      
            require_once('view/shop/shop.php');
    }
   
}