<?php
require_once("model.php");
class Category extends Model
{
    public function detail_sp($id)
    {
        $query =  "SELECT * from books where categoryid = $id ";
        $result = $this->conn->query($query);

        $categories = array();
        while($post = mysqli_fetch_assoc($result)){

            $categories[] = $post;
        } 
        
        return $categories;
        
    }

    public function getcategory($id){
        $con = mysqli_connect('localhost','root','','bansach2');
        mysqli_set_charset($con,'utf-8');

        if(mysqli_connect_errno()){
            echo 'Connect error: ' .mysqli_connect_error();
        }

        $result = $con -> query('SELECT * from books where categoryid = '.$id);

        $categories = array();

        if($result->num_rows > 0){
            while($post = mysqli_fetch_assoc($result)){

                $categories[] = $post;
            }   
        }
        return $categories;
    }
   
   
}