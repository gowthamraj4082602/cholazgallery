<?php 
include"database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blogs | Cholazgallery.com</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Link Swiper's CSS -->
	<link rel = "icon" href ="image/logo/logo3.png"type = "image/x-icon"> 
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/blog.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="scss.scss">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
 <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet"> <!--link of reviews---->

<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
	
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
   </head>
<body>
	 <a href="https://wa.link/ex1d9y"><div class="fixwhatsapp">
  <img src="image/whatsapp.png">
</div></a>
    
			<section id="topnav">
    	<div class="container-fluid">
    		<div class="container ">
    			<div class="row">
    				<div class="col-md-3 ">
    					<img class="backimg" src="image/logo/logow.png">
    				</div>
    				<!--end of col-md-3--->
    				<div class="col-md-9">
    					<div class="flex ">
    			<div class="flexitems bor time">
    				<h1>10:00AM - 9:00PM</h1>
    				<p>Our Opening Hours Mon. - Sat.</p>
    			</div>
    			<!---end of flexitems-->
    			<a href="tel: 9080593400"><div class="flexitems bor time">
    				<h1>9080593400</h1>
    				<p>Call Us For Free Consultation</p>
    			</div></a>
    			<!---end of flexitems-->
    			<a href="https://api.whatsapp.com/send?phone=90805 93400&text=I Just visited your website, I am interested to know more about your services!"  target="_blank"><div class="flexitems bor socicon">
    				<img src="image/whatsapp.png">
    				<h1>Whatsapp</h1>
    				
    			</div></a>
    			<!---end of flexitems-->
    			<a href="mailto:cholagallery@gmail.com"><div class="flexitems bor socicon">
    				<img src="image/gmail.png">
    				<h1>Mail</h1>
    				
    			</div></a>
    			<!---end of flexitems-->
    			<a href="https://www.google.co.in/maps/place/SUN+GOLD+WORKS/@10.7915542,79.1316556,17z/data=!3m1!4b1!4m5!3m4!1s0x3baac74b5a09662f:0x469b6676ec63e0e6!8m2!3d10.7915489!4d79.1338443"><div class="flexitems socicon">
    				<img src="image/map.png">
    				<h1>Map</h1>
    				
    			</div></a>
    			<!---end of flexitems-->

    			</div>
    				</div>
    				<!--end of col-md-9--->

    			</div>
    			
    			
    		</div>
    		
    	</div>
    </section>
    <!----end of topnav section---->
    
    <section id="navbar">
  

    <div class="navi">
      <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php"><img class="plogo"src="image/navlogo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
         <img src="image/vil.png">
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><img class="navlogo"src="image/nav/home.png">Home </a><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><img class="navlogo"src="image/nav2.png">About us</a>
      </li>


      <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="navlogo"src="image/nav/gallery.png">Gallery <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                     <li> <a href="art.php"><img src="image/nav/nav5.png"></a></li>
                      <li class="divider"></li>
                      <li><a href="art.php" class="droplink">Art</a></li>
                    </ul>
                  </div>
                   <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <li><a href="idol.php"><img src="image/nav/nav2.png"></a></li>
                      <li class="divider"></li>
                      <li><a href="idol.php" class="droplink">Idol</a></li>
                    </ul>
                  </div>
                   <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <li><a href="temple.php"><img src="image/nav/nav4.png"></a></li>
                      <li class="divider"></li>
                      <li><a href="temple.php" class="droplink">Temple</a></li>
                    </ul>
                  </div>

                   <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <li><a href="jewel.php"><img src="image/nav/nav3.png"></a></li>
                      <li class="divider"></li>
                      <li><a href="jewel.php" class="droplink">Jewel</a></li>
                    </ul>
                  </div>                  </div></ul>
                  </li>
      <li class="nav-item active">
        <a class="nav-link" href="blog.php"><img class="navlogo"src="image/nav6.png">Blogs</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contact.php"><img class="navlogo"src="image/nav5.png">Contact Us</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="#"><img class="navlogo"src="image/nav/app.png">App</a>
      </li>
     
    </ul>
 <form class="form-inline my-2 my-lg-0">
    </form>
        <a href="quotes.php"><button class="btn btn-outline-success my-2 my-sm-0 navbut"><img class="navlogo"src="image/list.png">Get Quotes</button></a>
      
      
  </div>
</nav>
    </div>
  
</section>
<!-----end of navbar section----->
<section id="blog">
	<div class="container-fluid blbg">
		<div class="bhead">
			<h1>Blog</h1>
			<p>Visit our workshop digitally, any doubts feel free to call us</p>
		
		</div>
	</div>
</section>
    
      
<section id="brateing">
	<div class="container-fluid brbg">
	    
	    <?php 
	    
	    $sql="SELECT * FROM fileup ORDER BY VEXP DESC";
	    $res=$db->query($sql);
	    if($res->num_rows>0){
	        while($row=$res->fetch_assoc()){
	            //PRINTING THE OUTPUT
	            echo '<div class="row space">
		   	<div class="col-md-1"></div>
			<!----end of col-md-1---->
			<div class="col-md-4">
				<div class="rtimg">
					<img src="images/'.$row['prof'].'">
				</div>
				
			</div>
			<!----end of col-md-4---->
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
			<div class="col-md-5 bgbor">
				<div class="rhead">
					<h1>'.$row['title'].'</h1>
					<div class="brline"></div>
						<h3>Category: <span>'.$row['VCOMP'].'</span></h3>
					
					<p>'.$row['VNUM'].'</p>
					<h3>Date: <span>'.$row['VEXP'].'</span></h3>
				</div>
							<div class="socflex">
			<div class="socflexitem">
				<a href="tel: 9080593400"><button class="stbut">Enquiry</button></a>
			</div>
			<!---end of socflexitem---->
			<div class="socflexitem">
				<div class="iconflex">
					<div class="iconflexitem">
						<h2><a href="https://instagram.com/cholaz_gallery?igshid=1wjtpd8n3ems6"><i class="fa fa-instagram" aria-hidden="true"></i></a></h2>
					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://www.facebook.com/282969172161780/"><i class="fa fa-facebook" aria-hidden="true"></i></a></h2>

					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://api.whatsapp.com/send?phone=90805 93400&text=I Just visited your website, I am interested to know more about your services!" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://www.youtube.com/channel/UCd_ALrvfAtTRtmFbYwXrq8w?guided_help_flow=3"><i class="fa fa-youtube-play" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="tel:+91-9994709363"><i class="fa fa-phone" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
				</div>
				<!----end of iconflex---->
							
																					
							
			
						
			</div>
			<!---end of socflexitem---->
		</div>
		<!---end of socflex-->


										
							</div>
			<!----end of col-md-5---->
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
		</div>';
	        }
	    }
	    
	    ?>

<div class="row space">
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
			<div class="col-md-4">
				<div class="rtimg">
					<img src="image/contkanna1.png">
				</div>
				
			</div>
			<!----end of col-md-4---->
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
			<div class="col-md-5 bgbor">
				<div class="rhead">
					<h1>Cholaz's Blogs</h1>
					<div class="brline"></div>
						<h3>Category: <span>Art Gallery</span></h3>
					
					<p>this is para content this is para content this is para content this is para content this is para content this is para content this is para content this is para content this is para content</p>
					<h3>Date: <span>09/09/2020</span></h3>
				</div>
							<div class="socflex">
			<div class="socflexitem">
				<a href="tel: 9080593400"><button class="stbut">Enquiry</button></a>
			</div>
			<!---end of socflexitem---->
			<div class="socflexitem">
				<div class="iconflex">
					<div class="iconflexitem">
						<h2><a href="https://instagram.com/cholaz_gallery?igshid=1wjtpd8n3ems6"><i class="fa fa-instagram" aria-hidden="true"></i></a></h2>
					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://www.facebook.com/282969172161780/"><i class="fa fa-facebook" aria-hidden="true"></i></a></h2>

					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://api.whatsapp.com/send?phone=90805 93400&text=I Just visited your website, I am interested to know more about your services!" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://www.youtube.com/channel/UCd_ALrvfAtTRtmFbYwXrq8w?guided_help_flow=3"><i class="fa fa-youtube-play" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="tel:+91-9994709363"><i class="fa fa-phone" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
				</div>
				<!----end of iconflex---->
							
																					
							
			
						
			</div>
			<!---end of socflexitem---->
		</div>
		<!---end of socflex-->


										
							</div>
			<!----end of col-md-5---->
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
		</div>
<!----end of row------>
<div class="row space">
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
			<div class="col-md-4">
				<div class="rtimg">
					<img src="image/contkanna1.png">
				</div>
				
			</div>
			<!----end of col-md-4---->
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
			<div class="col-md-5 bgbor">
				<div class="rhead">
					<h1>Cholaz's Blogs</h1>
					<div class="brline"></div>
					<h2>Category <span>Art Gallery</span></h2>
					
					<p>this is para content this is para content this is para content this is para content this is para content this is para content this is para content this is para content this is para content</p>
					<h3>Date: <span>09/09/2020</span></h3>
				</div>
							<div class="socflex">
			<div class="socflexitem">
					<a href="tel: 9080593400"><button class="stbut">Enquiry</button></a>
			</div>
			<!---end of socflexitem---->
			<div class="socflexitem">
				<div class="iconflex">
					<div class="iconflexitem">
						<h2><a href="https://instagram.com/cholaz_gallery?igshid=1wjtpd8n3ems6"><i class="fa fa-instagram" aria-hidden="true"></i></a></h2>
					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://www.facebook.com/282969172161780/"><i class="fa fa-facebook" aria-hidden="true"></i></a></h2>

					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://api.whatsapp.com/send?phone=90805 93400&text=I Just visited your website, I am interested to know more about your services!" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="https://www.youtube.com/channel/UCd_ALrvfAtTRtmFbYwXrq8w?guided_help_flow=3"><i class="fa fa-youtube-play" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
					<div class="iconflexitem">
						<h2><a href="tel:+91-9994709363"><i class="fa fa-phone" aria-hidden="true"></i></i></a></h2>


					</div>
					<!-----end of iconflexitem----->
				</div>
				<!----end of iconflex---->
							
																					
							
			
						
			</div>
			<!---end of socflexitem---->
		</div>
		<!---end of socflex-->


										
							</div>
			<!----end of col-md-5---->
			<div class="col-md-1"></div>
			<!----end of col-md-1---->
		</div>
<!----end of row------>
	</div>
</section>
<!---end of brateing section----->
<section id="social">
	<div class="container-fluid">

		
	</div>
</section>
<!----end of social section---->
<?php include"footer.php";?>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<!------java scripy style----->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>