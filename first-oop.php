<?php
class DB{
     
    function db_connect(){
        return $db_connect = mysqli_connect('localhost','root','','lutfor');
    }
   function select($table_name){
    $select_query = "SELECT * FROM $table_name";
    $from_db = mysqli_query($this->db_connect(), $select_query);
    return $from_db;
   }

   function count($table_name){
    $count_query = "SELECT COUNT(*) as total FROM $table_name";
    $from_db = mysqli_fetch_assoc(mysqli_query($this->db_connect(), $count_query));
    return $from_db['total'];
   }

    }

$db = new DB;
// print_r($db->count("users"));
?>