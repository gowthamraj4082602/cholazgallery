<?php
    include"database.php";
    session_start();



	$sql="SELECT * FROM fileup WHERE id={$_GET["id"]}";
	$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$ro=$res->fetch_assoc();
							$_SESSION["id"]=$ro["id"];
						
							
							echo "<div class='error'>Success</div>";
						}
						else
						{
							echo "<div class='error'>Invalid Username Or Password</div>";
						}
	?>
	
				<h3 class="text">Welcome <?php echo $_SESSION["id"]; ?></h3><br><hr><br>