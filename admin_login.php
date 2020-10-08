<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login | Cholazgallery.com</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="about.css">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/ser.css">

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    
	<!------link google font----->
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>
<section id="serpop">
	<div class="container-fluid">
		
	<div class="container">
		
		<div class="login-container">
			<?php
				if(isset($_POST["login"]))
				{
					$sql="select * from insadmin where NAME='{$_POST["aname"]}' and PASS='{$_POST["apass"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["NAME"]=$ro["NAME"];
						echo "<script>window.open('admin_home.php','_self');</script>";
					}
					else
					{

echo '<script>alert("Please Enter Valid Password")</script>'; 
					}
					
				}
				
				
			?>
		
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<img class="avatar" src="image/user.png">
				<h2 >Admin Panel</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>User ID</h5>
						<input class="input" type="text" name="aname" required="required">
					</div>
				</div>
				<div class="input-div two">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div>
						<h5>Password</h5>
						<input class="input" type="Password" name="apass" required="required">
					</div>
				</div>
			<button name="login" class="btn">login</button>
			</form>
		</div>
	</div>

	</div>
</section>

	<script type="text/javascript" src="css/ser.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>