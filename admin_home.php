<?php
    include"database.php";
    session_start();
if(!isset($_SESSION["NAME"]))
    {
        echo"<script>window.open('admin_login.php?mes=Access Denied...','_self');</script>";
        
    } 
    
    
    //Example check for sms
/*$ch=curl_init();//SetURLtoURLvariable
curl_setopt($ch,CURLOPT_URL,"");//SetURLHTTPpostto1
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);

echo $result;

curl_close($ch);*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Home | Cholazgallery.com</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

<style>
  .DatePickerInput::-webkit-inner-spin-button,
 .DatePickerInput::-webkit-calendar-picker-indicator {
     opacity:0;   
    -webkit-appearance: none;
 }
</style>
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
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
        $vcomp = $_POST["vcomp"];
        $vnum = $_POST["vnum"];
        $vinum = $_POST["vinum"];
        $vexp = $_POST["vexp"];
         $phone = $_POST["phone"];
         
         $dob=$_POST["dob"];
         $addr=$_POST["addr"];
         $pin=$_POST["pin"];
         $nom=$_POST["nom"];
         $nrel=$_POST["nrel"];
         $ndob=$_POST["ndob"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


   
     $prof = rand(1000,10000)."-".$_FILES["prof"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["prof"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$prof);

 
    #sql query to insert into database

    $sql = "INSERT into fileup(prof,title,VCOMP,VNUM,VEXP) VALUES('$prof','$title','$vcomp','$vnum','$vexp')";
    if(mysqli_query($db,$sql)){

echo '<script>alert("Details Successfully Submitted")</script>'; 
$sql="select * from fileup where  VNUM='{$_POST["vnum"]}'";
            $res=$db->query($sql);
            if($res->num_rows>0)
            {
              $ro=$res->fetch_assoc();
              $_SESSION["id"]=$ro["id"];
              
              
                    $row=$res->fetch_assoc();
        //$row["id"] = $_SESSION["id"]; 
           
            }
            else
            {
              echo "<div class='error'>Upload Failed</div>";
            }

    }
    else{
        echo "Error";
    }
}
 
 
?>



<form method="post" enctype="multipart/form-data">
                <img class="avatar" src="image/user.png">
                <h2 >Upload Works</h2>
                <a href="admindash/" class="dashlink">Dashboard</a>
                
             
                      <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-file-image-o "></i>
                    </div>

                        
                    <div>
                        
                        <h5>Work Image</h5>
    <input  name="prof" class="input"required="required" accept="image/*" type="text" onfocus="(this.type='File')" onblur="if(!this.value)this.type='File'">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Work Title</h5>
    <input type="text" name="title" class="input" required="required">

                    </div>
                </div>
                                  <div class="input-div one">
                    <div class="i">
                        <i class="fa fa-dropbox"></i>
                    </div>
                    <div>

                        <!--<h5>Insurance type</h5>--->
                        
                        <select name="vcomp" class="input" required="required"/>
                          <option value="Art Gallery">Art Gallery</option>
                         <option value="Idol Gallery">Idol Gallery</option>
                         <option value="Temple Gallery">Temple Gallery</option>
                         <option value="Jewel Gallery">Jewel Gallery</option>
                           <option value="Others">Others</option>
                       </select>

                    </div>
                </div>  
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Description</h5>
                        
    <input type="text" name="vnum" class="input"required="required" data-sort="DDMMYYYY">

                    </div>
                </div>   <div class="input-div one">
                    <div class="i">
                        <i class="fas  fa-calendar "></i>
                    </div>
                    <div>
                        <h5>Work Started</h5>
    <input  name="vexp" class="input"required="required" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">

                    </div>
                </div>  
                 
                

    <input type="submit" name="submit" class="btn" value="Sumbit">
    
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