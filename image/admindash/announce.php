<?php 
include "database.php";

if(isset($_POST['message'])){
    if($db->query("UPDATE announcement SET announcement_message='".$_POST['message']."';")){
        header("location:index.php");
    }else{
        echo '<script>alert("Something went wrong!")</script>';
    }
}
?>