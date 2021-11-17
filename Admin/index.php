<?php
session_start();

    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    $tmp = '';
    switch ($mod) {
        
        case 'sanpham':
            $tmp = 'sanpham';
            require_once('MVC/controllers/SanphamController.php');
            $controller_obj = new SanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
            case 'danhmuc':
               
                require_once('MVC/controllers/DanhmucController.php');
                $controller_obj = new DanhmucController();
                switch ($act) { 
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'add':
                        $controller_obj->add();
                        break;
                    case 'store':
                        $controller_obj->store();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'edit':
                        $controller_obj->edit();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
        
            
        default:
        if($mod = 'danhmmuc')
            header('location: ?mod=danhmuc');
         elseif($mod ='sanpham')
            header('location: ?mod=sanpham');
            // require_once('MVC/controllers/LoginController.php');
            // $controller_obj = new LoginController();
            // $controller_obj->admin();
            // break;
    }


