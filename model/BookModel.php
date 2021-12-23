<?php
    class BookModel{
        public function getPost(){
            $con = mysqli_connect('localhost','root','','bansach2');
            mysqli_set_charset($con,'utf-8');

            if(mysqli_connect_errno()){
                echo 'Connect error: ' .mysqli_connect_error();
            }

            $result = $con -> query('SELECT b.*,t.*
            FROM books as b , authors as t
            WHERE booktype = 1 AND b.authorid = t.authorid');

            $posts = array();

            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){

                    $posts[] = $post;
                }   
            }
            return $posts;
        }

        public function getPost2(){
            $con = mysqli_connect('localhost','root','','bansach2');
            mysqli_set_charset($con,'utf-8');

            if(mysqli_connect_errno()){
                echo 'Connect error: ' .mysqli_connect_error();
            }

            $result = $con -> query('SELECT b.*,t.*
            FROM books as b , authors as t
            WHERE booktype = 4 AND b.authorid = t.authorid');

            $posts2 = array();

            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){

                    $posts2[] = $post;
                }   
            }
            return $posts2;
        }
        public function getPost3(){
            $con = mysqli_connect('localhost','root','','bansach2');
            mysqli_set_charset($con,'utf-8');

            if(mysqli_connect_errno()){
                echo 'Connect error: ' .mysqli_connect_error();
            }

            $result = $con -> query('SELECT b.*,t.*
            FROM books as b , authors as t
            WHERE booktype = 3 AND b.authorid = t.authorid');

            $posts3 = array();

            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){

                    $posts3[] = $post;
                }   
            }
            return $posts3;
        }

        public function getPost4(){
            $con = mysqli_connect('localhost','root','','bansach2');
            mysqli_set_charset($con,'utf-8');

            if(mysqli_connect_errno()){
                echo 'Connect error: ' .mysqli_connect_error();
            }

            $result = $con -> query('SELECT b.*,t.*
            FROM books as b , authors as t
            WHERE booktype = 2 AND b.authorid = t.authorid');

            $posts4 = array();

            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){

                    $posts4[] = $post;
                }   
            }
            return $posts4;
        }
        public function getcategory(){
            $con = mysqli_connect('localhost','root','','bansach2');
            mysqli_set_charset($con,'utf-8');

            if(mysqli_connect_errno()){
                echo 'Connect error: ' .mysqli_connect_error();
            }

            $result = $con -> query('SELECT * FROM categories ');

            $categories = array();

            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result)){

                    $categories[] = $post;
                }   
            }
            return $categories;
        }



    }
    
?>
    
  