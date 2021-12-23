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
                case 'hoadon':
                    require_once('MVC/controllers/HoadonController.php');
                    $controller_obj = new HoadonController();
                    switch ($act) {
                        case 'list':
                            $controller_obj->list();
                            break;
                        case 'chitiet':
                            $controller_obj->chitiet();
                            break;
                        case 'delete':
                            $controller_obj->delete();
                            break;
                        case 'xetduyet':
                            $controller_obj->xetduyet();
                            break;
                            case 'tuchoi':
                                $controller_obj->tuchoi();
                                break;
                        default:
                            $controller_obj->list();
                            break;
                    }
                    break;
                case 'nguoidung':
                    require_once('MVC/controllers/NguoiDungController.php');
                    $controller_obj = new NguoiDungController();
                    switch ($act) {
                        case 'list':
                            $controller_obj->list();
                            break;
                        case 'detail':
                            $controller_obj->detail();
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
        
            
        default:
            if($mod == 'orders')
                header('location: ?mod=hoadon');
            else if($mod == 'categories')
                header('location: ?mod=danhmuc');
            else if($mod == 'books')
                header('location: ?mod=sanpham');
            else    
                header('location: ?mod=nguoidung');
    }


