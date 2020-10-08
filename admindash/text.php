<?php
    include"database.php";
    session_start();
if(!isset($_SESSION["NAME"]))
    {
        echo"<script>window.open('admin_login.php?mes=Access Denied...','_self');</script>";
        
    }     
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
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
<section>
    
<div class="tabuser"  >
      <?php 

  $sql="select * FROM fileup ORDER BY id DESC LIMIT 4000";
  $res=$db->query($sql);
  echo "<div class='table-responsive'>";
    echo "<table border='1px' class='table' >
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Qualification</th>
          <th>Salary</th>
          <th>View</th>
          <th>Delete</th>

          <th>Salary</th>
          <th>View</th>
          <th>Delete</th>
        </tr>
        ";
  if($res->num_rows>0)
    
  {
    $i=0;
    while($row=$res->fetch_assoc())
    {
      $i++;
      echo "<tr>
        <td>{$i}</td>
       
        <td>{$row["title"]}</td>
        <td>{$row["VCOMP"]}</td>
        <td>{$row["VNUM"]}</td>

        <td>{$row["VINUM"]}</td>
        <td>{$row["VEXP"]}</td>
 <td>{$row["id"]}</td>
        <td>{$row["pass"]}</td>
        <td>{$row["VEXP"]}</td>
        <td><a href='staff_delete.php?id={$row["id"]}' class='btnr'>Delete</a></td>
        </tr>
      ";
    }
        echo "</table>";
        echo "</div>";
  }
    
  else
  {
    echo "<p>No Record Found</p>";
  }
  
?>
      
<!----flex item--->
    
</div>
          <!-- Conte
</section>
    <script type="text/javascript" src="css/ser.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

