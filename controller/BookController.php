<?php 
 class BookController{

    public function getPost(){
            require_once('model/BookModel.php');
            $postModel = new BookModel();
           $posts = $postModel->getPost();

            require_once('view/BookView.php');
            $bookView = new BookView();
            $bookView ->showallBook($posts);
    }
} 

?>