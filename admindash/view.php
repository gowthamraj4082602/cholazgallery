<?php
   error_reporting (E_ERROR | E_WARNING | E_PARSE);

    include"database.php";
    session_start();

	$sql="SELECT * FROM fileup WHERE id={$_GET["id"]}";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}	
		else
	     {
			echo "<div class='error'>Insert Failed..</div>";
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style >
  .view{
    color: white;
    background-color: green;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 10px;
    letter-spacing: 1px;
    font-weight: 600; 
  }
  table{
    width: 100%; 
  border-collapse: collapse; 
  font-size: 17px;  
  }
table{
  color: rgba(0,0,0,0.9) !important;
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

  <title>View Details  | Shree AK Groups
 </title>

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
        <div class="sidebar-brand-text ">Groups</div>
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
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-outdent"></i>
          <span>Logout</span></a>
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
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
            <h1 class="h3 mb-0  texthead">View Profile</h1>


          </div>
         
  <div class="tabuser">

      <?php 


  echo "<div class='table-responsive'>";
    echo "<table  class='table' >
        <tr>
          <th>Vehicle No</th>
          <th>V. Type</th>
           <th>Make</th>
          <th>Model</th>
          
          <th>Engine No</th>
          <th>Chasis No</th>
          <th>Prev Policy Comp</th>

          <th>Prev Policy Type</th>
          <th>Prev Policy No</th> 
          <th>NCB %</th>
        </tr>
        ";
         $sql="SELECT * FROM vehtest WHERE id={$_GET["id"]}";
		     $res=$db->query($sql);

		if($res->num_rows>0)
		{
             $row=$res->fetch_assoc();
			 echo "<tr>
        <td>{$row["VN"]}</td>
        
        <td>{$row["TV"]}</td>
        <td>{$row["MK"]}</td>
        <td>{$row["MODEL"]}</td>

        <td>{$row["EN"]}</td>
        <td>{$row["EN"]}</td>
        <td>{$row["PPC"]}</td>
        <td>{$row["PPT"]}</td>
        <td>{$row["PPN"]}</td>
        <td>{$row["NCB"]}</td>
</tr>
      ";
      
      
      			

		}
?>
      
<!----flex item--->
    
</div>

<html>
<head>
<title>View Employee Data</title>
</head>
<body>
</body>
</html>


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
          <a class="btn btn-primary" href="login.html">Logout</a>
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
