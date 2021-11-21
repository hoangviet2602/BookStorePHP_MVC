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
                case 'dangky':
                    $controller_obj->dangky();
                    break;
                default:
                    $controller_obj->login();
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