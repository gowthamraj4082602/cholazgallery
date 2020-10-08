<?php
	include "database.php";
	session_start();
	
	unset ($_SESSION["id"]);
	
	session_destroy();
	echo "<script>window.open('../admin_login.php','_self');</script>";
?>