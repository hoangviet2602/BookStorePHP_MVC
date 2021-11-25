<?php

session_start();
$mod = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($mod) {
    case 'home':
        require_once('controller/BookController.php');
        $postController = new   BookController();
        $postController->getPost();
        break;
    
    
    case 'detail':
        require_once('controller/DetailController.php');
        $controller_obj = new DetailController();
        $controller_obj->list();
        break;
    
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('controller/LoginController.php');
        $controller_obj = new LoginController();
            switch ($act) {
                case 'login':
                    $controller_obj->login();
                    break;
                case 'dangnhap':
                    $controller_obj->login_action();
                    break;
                 case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
               
                 
                default:
                    $controller_obj->login();
                    break;
            }
            break;
            case 'cart':
                $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                require_once('controller/CartController.php');
                $controller_obj = new CartController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list_cart();
                        break;
                    case 'update':
                        $controller_obj->update_cart();
                        break;
                    case 'add':
                        $controller_obj->add_cart();
                        break;
                    case 'delete':
                        $controller_obj->delete_cart();
                        break;
                    case 'deleteall':
                        $controller_obj->deleteall_cart();
                        break;
                    default:
                        $controller_obj->list_cart();
                        break;
                }
                break; 
                case 'checkout':
                    $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
                    require_once('controller/CheckoutController.php');
                    $controller_obj = new CheckoutController();
                    switch ($act) {
                        case 'list':
                            $controller_obj->list();
                            break;
                            
                        case 'save':
                            $controller_obj->save();
                            break;
                        case 'order_complete':
                            $controller_obj->order_complete();
                            break;
                        default:
                            $controller_obj->list();
                            break;
                    }
                    break;                        
    default:
        require_once('controller/BookController.php');
        $controller_obj = new Bookcontroller();
        $controller_obj->getPost();
        break;
}
?>