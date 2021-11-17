<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from books where bookid = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
    function detail_tg($id)
    {
        $query =  "SELECT * from authors where authorid = $id ";
        $result1 = $this->conn->query($query);
        return $result1->fetch_assoc();
    }
    function detail_dm($id)
    {
        $query =  "SELECT * from categories where categoryid = $id ";
        $result2 = $this->conn->query($query);
        return $result2->fetch_assoc();
    }
   
   
}