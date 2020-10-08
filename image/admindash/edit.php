<?php 
include"database.php";
session_start();
$id=$_GET['id'];
if(!isset($_SESSION["NAME"]))
    {
        echo"<script>window.open('../admin_login.php?mes=Access Denied...','_self');</script>";
        
    }     

?>
<!DOCTYPE html>
<html lang="en">

<head>
<style >
.textuser{
    color:black;
    font-size:15px;
    background-color:rgba(0,0,0,0.2);
    text-transform:uppercase;
    padding:5px 10px;
    max-width:150px;
    text-align:center;
}
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


tr:nth-child(even){background-color: rgba(0,0,0,0.01);}

tr:hover {background-color: rgba(0,0,0,0.1);}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgba( 0,0,0,0.04);
  color: black;
}

</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit  | Shree AK Groups</title>

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
            <h1 class="h3 mb-0  texthead">Edit Profile</h1>
          </div>
          <?php 
 
 if (isset($_POST["submit"]))
  {
      // File upload path
$targetDir = "../images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["vexp"]) && !empty($_FILES["file"]["name"]) && isset($_POST["title"]) && isset($_POST["vcomp"]) && isset($_POST["vnum"]) && isset($_POST["vinum"]) && isset($_POST["phone"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql="UPDATE fileup SET image='".$fileName."',VEXP='".$_POST['vexp']."',title='".$_POST['title']."',VCOMP='".$_POST['vcomp']."',VNUM='".$_POST['vnum']."',VINUM='".$_POST['vinum']."',PHONE='".$_POST['phone']."',DOB='".$_POST['dob']."',ADDR='".$_POST['addr']."',PIN='".$_POST['pin']."',NOM='".$_POST['nom']."',NREL='".$_POST['nrel']."',NDOB='".$_POST['ndob']."' WHERE id='".$id."';";
            $update = $db->query($sql);
            if($update){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                
echo '<script>alert("Details Successfully Edited")</script>'; 
							echo "<script>window.open('index.php','_self');</script>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;
 }
 ?>
 <?php 
 
 $sql="SELECT * FROM fileup WHERE id='".$id."'";
  $res=$db->query($sql);
  	if($res->num_rows>0)
	{
		$row=$res->fetch_assoc();
	}
 
 ?>
         
          <div class="user" style="padding-top:50px">
      
          <!----flex item--->
            <form action="" method="post" enctype="multipart/form-data">
                
					<h3 class="textuser">User Id <?php echo $_GET["id"]; ?></h3>
            <table>
   <tr>
    <td><label for="title">Name</label></td>
    <td><input type="text" name="title" id="title" value="<?php echo $row['title']?>" required="required"></td>
  </tr>
  
  <tr>
    <td><label for="phone">Phone Number</label></td>
    <td><input type="tel" name="phone" id="phone" value="<?php echo $row['PHONE']?>"></td>
  </tr>
  
  <tr>
    <td><label for="vcomp">Insurance type</label></td>
    <td>
        <!--<h5>Insurance type</h5>--->
        <select name="vcomp" class="input" value="<?php echo $row['VCOMP']?>" required="required"/>
                          <option value="Vehicle">Vehicle</option>
                          <option value="Family">Family</option>
                         <option value="Critical Illness">Critical Illness</option>
                         <option value="Senior Citizen">Senior Citizen</option>
                         <option value="Child Plan">Child Plan</option>
                         <option value="Investment Plan">Investment Plan</option>
                         <option value="Pension Plan">Pension Plan</option>
                         <option value="Home">Home</option>
                         <option value="Travel">Travel</option>
                         <option value="Property Insurance">Property Insurance</option>
                          <option value="Others">Others</option>
                       </select>
    </td>
  </tr>
  
  <tr>
    <td><label for="vnum">Policy Number</label></td>
    <td><input type="text" name="vnum" id="vnum" value="<?php echo $row['VNUM']?>"></td>
  </tr>
  
  <tr>
    <td><label for="vinum">Policy Date</label></td>
    <td><input type="date" name="vinum" id="vinum" value="<?php echo $row['VINUM']?>"></td>
  </tr>
  
  <tr>
    <td><label for="vexp">Expiry date</label></td>
    <td><input type="date" name="vexp" id="vexp" required="required" value="<?php echo $row['VEXP']?>"></td>
  </tr>
  <tr>
    <td><label for="addr">Address</label></td>
    <td><input type="text" name="addr" id="addr" value="<?php echo $row['ADDR']?>"></td>
  </tr>
  <tr>
    <td><label for="pin">PIN</label></td>
    <td><input type="text" name="pin" id="pin" value="<?php echo $row['PIN']?>"></td>
  </tr>
  <tr>
    <td><label for="nom">Nominee</label></td>
    <td><input type="text" name="nom" id="nom" value="<?php echo $row['NOM']?>"></td>
  </tr>
  <tr>
    <td><label for="nrel">Nominee Relation</label></td>
    <td><input type="text" name="nrel" id="nrel" value="<?php echo $row['NREL']?>"></td>
  </tr>
  <tr>
    <td><label for="dob">Date Of Birth</label></td>
    <td><input type="date" name="dob" id="dob" required="required" value="<?php echo $row['DOB']?>"></td>
  </tr>
  
  <tr>
    <td><label for="ndob">Nominee Date Of Birth</label></td>
    <td><input type="date" name="ndob" id="ndob" required="required" value="<?php echo $row['NDOB']?>"></td>
  </tr>
  <tr>
    <td><label for="file">Upload PDF</label></td>
    <td> <input type="file" name="file" id="file" accept="application/pdf,application/vnd.ms-excel" required="required"></td>
  </tr>
  <tr>
    <td>  <input type="submit" value="submit" name="submit"></td>
  </tr>
</table>
                
            </form>
    
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
