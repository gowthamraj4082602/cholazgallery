<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thanjavur art plates and shield | Cholazgallery.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!-- Link Swiper's CSS -->
<link rel = "icon" href ="image/logo/logo3.png"type = "image/x-icon">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="css/art.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!------link google font----->
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
</head>
<body>
  <?php include"header.php";?>
  <section id="sgallery" class="artb">
  <div class="container-fluid sgalbg ">
    <div class="shead">
      <h1>Welcome To Thanjavur art plates and shield</h1>
      <a href="quotes.html"><button class="sbut">Get Quotes</button></a>
      
    </div>
  </div>
</section>
<!-----end of sgallery section------>

  
	
	<section id="mainimg">
  <div class="container-fluid mainbg">
    <div class="mainhead">
      <h1>Thanjavur art plates and shield</h1>
      <p>Thanjavur is a city blessed with rich culture and heritage.</p>
      <div class="mainline"></div>
    </div>
      <div class="swiper-container">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide"><a href="#">
        <img src="image/Arts Gallery/Thanjavur art plates and shield/7-inch-kalasam-art-plate.png">
        <div class="topbx">
          <h1>Necklace</h1>
          <p>variety of unique.</p>
        </div>
        </a>
      </div>
        <!------end of swiper slide----->

     

      <div class="swiper-slide"><a href="#">
        <img src="image/Arts Gallery/Thanjavur art plates and shield/10-inches-ganesh-art-plate.png">
        <div class="topbx">
          <h1>Necklace</h1>
          <p>variety of unique.</p>
        </div>
        </a>
      </div>
        <!------end of swiper slide----->
      <div class="swiper-slide"><a href="#">
        <img src="image/Arts Gallery/Thanjavur art plates and shield/12_Inches_-_Ganesh_art_Plate.png">
        <div class="topbx">
          <h1>Necklace</h1>
          <p>variety of unique.</p>
        </div>
        </a>
      </div>
        <!------end of swiper slide----->
      
          </div>
    <!-- Add Pagination -->
  </div>

  </div>
</section>
<section id="lightbx">
  <div class="container lgbg">
    <div class="lhead">
      <h1>Thanjavur art plates and shield</h1>
      <p>THE 'CRADLE OF THANJAVUR IS CALLED ARTS' IN TAMIL NADU.</p>
      <div class="lline"></div>
    </div>
    
<div class="galflex">
  <div class="galflexitem">
    <img src="image/Arts Gallery/Thanjavur art plates and shield/14-inches-model-art-plate.png"  onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <!----end of light---->
  
  <div class="galflexitem">
    <img src="image/Arts Gallery/Thanjavur art plates and shield/32_Inches_-_Natrajar_art_plate.png"  onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <!----end of light---->
  <div class="galflexitem">
    <img src="image/Arts Gallery/Thanjavur art plates and shield/Tanjore-Art-Plate-Ashtalakshmi-10in-1.png"  onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <!----end of light---->
  
  </div>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
      <img src="image/Arts Gallery/Thanjavur art plates and shield/14-inches-model-art-plate.png" >
      <h1>model-art</h1>
      </div>

    <div class="mySlides">
      <div class="numbertext">2 / 3</div>
      <img src="image/Arts Gallery/Thanjavur art plates and shield/32_Inches_-_Natrajar_art_plate.png" >
      <h1>Natrajar</h1>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="image/Arts Gallery/Thanjavur art plates and shield/Tanjore-Art-Plate-Ashtalakshmi-10in-1.png" >
      <h1>Ashtalakshmi</h1>
    </div>
    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

  </div>
</div>

  </div>
</section>

<?php include"footer.php";?>
<!-- Swiper JS -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
    
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      autoplay: {
      	delay: 5000,
      	disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
  <!--------script for gallery------>
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>