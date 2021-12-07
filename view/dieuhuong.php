<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) { 
    case "home":
        require_once('BookView.php');   
        break;
    case "detail":
        require_once("product-detail/product-detail.php");
        break;
    case "category":
        require_once("shop/shop.php");
        break;   
    case "taikhoan":
        require_once("login/login.php");
           break;
    case "cart":
        require_once("cart/cart.php");
        break;      
     case "checkout":
            $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
            switch ($act) {
                case 'list':
                    require_once("order/checkout.php");
                    break;
                case 'order_complete':
                    require_once("order/order_complete.php");
                    break;
                case 'list_ordered':
                    require_once("order/list_ordered.php");
                    break;
                default:
                    require_once("order/checkout.php");
                    break;
            }
            break; 
        
    default:
        require_once("error-404.php");
        break;

}
