<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
  
    
   
    case "detail":
        require_once("product-detail/product-detail.php");
        break;

    case "taikhoan":
        require_once("login/login.php");
           break;
        
    default:
        require_once("error-404.php");
        break;
}
