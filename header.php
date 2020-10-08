 <section id="navbar">
  

    <div class="navi">
      <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php"><img class="plogo" src="image/navlogo.png"></a>
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
      <li class="nav-item ">
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