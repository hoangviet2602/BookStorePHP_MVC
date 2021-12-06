<?php 
 class BookController{

    public function getPost(){
            require_once('model/BookModel.php');
            $postModel = new BookModel();
           $posts = $postModel->getPost();
           $posts2 = $postModel->getPost2();
           $posts3 = $postModel->getPost3();
           $posts4 = $postModel->getPost4();
           $category = $postModel->getcategory();

            require_once('view/BookView.php');
            $bookView = new BookView();
            $bookView ->showallBook($posts,$posts2,$posts3,$posts4,$category);
            
    }
 
    
} 

?>