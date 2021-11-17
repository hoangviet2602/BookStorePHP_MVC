<?php
    class BookModel{
        public function getPost(){
            include('connect.php');

            $result = $con -> query('SELECT * FROM books');

            $posts = array();

            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){

                    $posts[] = $post;
                }   
            }
            return $posts;
        }
    }
    
  