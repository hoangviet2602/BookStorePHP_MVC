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
    
    
   
        
    default:
        require_once('Controllers/HomeController.php');
        $controller_obj = new Bookcontroller();
        $postController->getPost();
        break;
}
?>