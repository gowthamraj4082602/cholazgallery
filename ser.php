<!DOCTYPE html>
<html>
<head>
  <title>Quotation</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/ser.css">
  <link rel="stylesheet" type="text/css" href="css/ser.js">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/quotes.css">
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
if(isset($_POST['submit'])){
    $to = "shreeakgroupsmani@gmail.com"; // this is your Email address
    $from = "shreeakgroupsmani@gmail.com";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Vehicle Insurance Part 1";
    

 $email_body=
              
          "User Name:$name.\n".
      
          "User Phone:$phone.\n";



    $headers = "From:" . $from;
   
    
mail($to,$subject,$email_body,$headers);

 echo "<script>window.open('ser2.php','_self');</script>";
   echo '<span style="text-align:center;color:white;margin-bottom:20px;">Mail Sent. Thank you! we will contact you shortly.</span>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
          
        <img class="avatar" src="image/user.png">
        <h2 >Step 1 / 2</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h5>Your Name</h5>
            <input class="input" type="text" required="required" name="name">
          </div>
        </div>
        <div class="input-div two">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div>
            <h5>Phone Number</h5>
            <input class="input" type="text" required="required" name="phone"   pattern="[0-9]{10}">
          </div>
        </div>
        <a href="tel:+919500142266">Make a Call</a>
        <input type="submit" class="btn" value="Submit" name="submit">
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