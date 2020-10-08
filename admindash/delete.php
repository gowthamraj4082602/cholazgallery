<?php 
include"database.php";
   $id=$_GET['id'];
    if($db->query("DELETE FROM fileup WHERE id ='".$id."';")){
        //Do Nothing
    }else{
        echo "Something went wrong";
    }
    if($db->query("DELETE FROM vehtest WHERE id ='".$id."';")){
            header("location:index.php");
    }else{
        echo "Something went wrong";
    }
?>