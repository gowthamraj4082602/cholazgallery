<?php
    error_reporting (E_ERROR | E_WARNING | E_PARSE); 

    include"database.php";
    session_start();
if(!isset($_SESSION["NAME"]))
    {
        echo"<script>window.open('../admin_login.php?mes=Access Denied...','_self');</script>";
        
    }     
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style >
.pdf{
    color:black;
}
  .view{
    color: white;
    text-align:center;
    background-color: green;
    text-transform:uppercase;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 600; 
    width:90%;
    display:block;
    margin:auto;
    border-radius:2px;
    border:1px solid rgba(0,0,0,0.6);
  }
  .view:hover{
      
    color: green;
    background-color: white;
    text-decoration:none;
    border:2px solid green;
      
  }
  table{
    width: 100%; 
  border-collapse: collapse; 
  font-size: 17px;  
  }
table{
  color: rgba(0,0,0,0.9) !important;
  border:1px solid rgba(0,0,0,0.1 )  !important;
  padding: 1px;  
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}


tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgba( 21, 74, 227 ,1);
  color: white;
}

</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard | Shree AK Groups</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/dash.css">

 <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion leftside" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
          <img src="image/logo.png">
        </div>
        <div class="sidebar-brand-text "></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

 <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-star "></i>
          <span>Dashboard </span></a>
      </li>

<!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item">
        <a class="nav-link" href="../admin_home.php">
          <i class="fas fa-fw fa-outdent"></i>
          <span>Add Proof</span></a>
      </li>
<!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
      <hr class="sidebar-divider">

     
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Manikandan</span>
                <img class="img-profile rounded-circle" src="image/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0  texthead">Dashboard</h1>

<?php 
 if (isset($_POST["submit"])){
   if(isset($_POST['user']) and $_POST['user']!=""){
     $condition="WHERE id=".$_POST['user'];
   }
   if(isset($_POST['sort']) and $_POST['sort']!=""){
    if($_POST['sort']=="Expiry date"){
      $condition="ORDER BY VEXP DESC";
    }else{
      $condition="WHERE VCOMP='Vehicle'";
    }
  }
 }
?>

          </div>
          
          <form action="announce.php" method="post">
              <input type="text" name="message" required="required" placeholder="Announcement">
              <input type="submit" name="announce" value="Announce">
          </form>
          <br>
          <form action="" method="post">
            <input type="text" name="user" placeholder="User ID">
            <select name="sort" placeholder="Sort by" value="">
            <option value="">None</option>
               <option value="Expiry date">Expiry date</option>
               <option value="Vehicle">Vehicle</option>
            </select>
            <input type="submit" name="submit" value="Submit">
          </form>
          <br>
         
<div class="tabuser"  >
      <?php 

  $sql="select * FROM fileup ".$condition." ORDER BY id DESC LIMIT 4000";
 
  $res=$db->query($sql);
  echo "<div class='table-responsive'>";
    echo "<table  class='table' >
        <tr>
          <th>S.No</th>
          <th>Name</th>
          
          <th>Remainder</th>
          
          <th>Phone</th>
          <th>Ins Type</th>
          <th>Policy No</th>
          <th>Policy Date</th>
          <th>Exp Date</th>

          <th>User Id</th>
          <th>Passwd</th>
          
          <th>Date Of Birth</th>
          <th>Address</th>
          <th>PIN</th>
          <th>Nominee</th>
          <th>Nominee Relation</th>
          <th>Nominee Date Of Birth</th>
           
 | Shree AK Groups          <th>Vehicle</th>
          <th>Edit</th>     
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
       
       
        <td> <a href='../images/{$row["image"]}' class='pdf'>{$row["title"]}</a></td>
        
        <td><a href='remi.php?id={$row["id"]}' target='popup'  class='view'  target='_blank'>Send</a></td>
        
        <td><a href='tel:+91{$row["PHONE"]}' target='popup'  class='phone'  target='_blank'>{$row["PHONE"]}</a></td>
        <td>{$row["VCOMP"]}</td>
        <td>{$row["VNUM"]}</td>

        <td>{$row["VINUM"]}</td>
        <td>{$row["VEXP"]}</td>
        <td>{$row["id"]}</td>
        <td>{$row["pass"]}</td>
        
        <td>{$row["DOB"]}</td>
        <td>{$row["ADDR"]}</td>
        <td>{$row["PIN"]}</td>
        <td>{$row["NOM"]}</td>
        <td>{$row["NREL"]}</td>
        <td>{$row["NDOB"]}</td>";

        //DISPLAYING VIEW ONLY FOR VEHICLE TYPES
        if($row["VCOMP"]=="Vehicle"){
          echo "<td> <a href='view.php?id={$row["id"]}' class='view'>View</a></td>";
        }else{
          echo "<td>-</td>";
        }

       echo "<td> <a href='edit.php?id={$row["id"]}' class='view'>Go</a></td>
          
          <td> <a href='delete.php?id={$row["id"]}' class='view'>DELETE</a></td>
       
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
          <!-- Content Row -->
          
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  <!-- Core plugin JavaScript-->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>
