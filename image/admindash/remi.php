<?php
    include"database.php";
    session_start();
    if(!isset($_SESSION["NAME"]))
    {
        echo"<script>window.open('../admin_login.php?mes=Access Denied...','_self');</script>";
        
    } 
		$sql="SELECT * FROM fileup WHERE id='{$_GET["id"]}'";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		    

	// Authorisation details.
	$username = "gowthamatspace@gmail.com";
	$hash = "9edf082203e7173821692870dbf71feb0f9fbcae6435a8d52e804e0477a12d84";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "916380101098"; // A single number or a comma-seperated list of numbers
	$message = "Mr/Mrs. ".$row["title"]." your vehicle ".$row['VNUM']." insurance expired ".$row["VEXP"]." Please renewal your policy before expired. Contact SHREE AK GROUPS @9500142266 Thank you";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);


}
?>
    <script type='text/javascript'>
         self.close();
    </script>