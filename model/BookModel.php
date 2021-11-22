<?php
    class BookModel{
        public function getPost(){
            $con = mysqli_connect('localhost','root','','bansach2');
            mysqli_set_charset($con,'utf-8');

            if(mysqli_connect_errno()){
                echo 'Connect error: ' .mysqli_connect_error();
            }

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
?>
    
  