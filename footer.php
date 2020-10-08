
<section id="footer">
        <div class="container-fluid fbgcol">
          <div class="row">
            <div class="col-md-3 footbor">
              <div class="footer1">
                <img src="image/logo/logow.png">
                <p>Chola’z Gallery - With our years of experience and expertise, we are engaged in manufacturing, supplying exporting and trading a quality range of Statue, Sculpture & Temple Construction <span class="moref"> <a href="about.php">Read More</span></a></p>
              </div>
              <div class="footflex">
                <div class="fflexitems ffbor"><a class="link" target="_blank" href="https://api.whatsapp.com/send?phone=90805 93400&text=I Just visited your website, I am interested to know more about your services!">
                  <img class="fimg" src="image/whatsapp.png">
                  
                  <h1>Whatsapp</h1></a>
                </div>
                <!----end of fflexitems----->
                <div class="fflexitems ffbor">
                  <a class="link" target="_blank" href="tel:+91-9994709363" >
                  <img class="fimg" src="image/phone.png">
                  <h1>Phone</h1>
                </a>
                </div>
                <!----end of fflexitems----->
                <div class="fflexitems">
                  <a class="link" target="_blank" href=" https://www.google.co.in/maps/place/SUN+GOLD+WORKS/@10.7915542,79.1316556,17z/data=!3m1!4b1!4m5!3m4!1s0x3baac74b5a09662f:0x469b6676ec63e0e6!8m2!3d10.7915489!4d79.1338443">
                  <img class="fimg" src="image/map.png">
                  <h1>Map</h1></a>
                </div>
                <!----end of fflexitems----->
              </div>
            </div>

            <!----end of col-md-3---->
            <div class="col-md-3 foot2 footbor">
              <div class="footer2">
                <h1 class="foothead">OUR SERVICES</h1>
                <div class="footline"></div>
                        <p>We are not the intermediate seller, we design more things and we make almost everything!!!
                            Let your ideas get a shape!</p>
                        <div class="footlink">
                          <a href="index.php">
                        <div class="licon">
                          <img class="navlogo" src="image/nav/home.png">
                        </div>
                        <div class="licon"><h1>Home</h1></div>
                    </a>
                  <br>
                      <a href="art.php">
                        <div class="licon">
                          <img class="navlogo" src="image/fart.png">
                        </div>
                        <div class="licon"><h1>Art Gallery</h1></div>
                    </a>
                  <br>
                      <a href="idol.php">
                        <div class="licon">
                          <img class="navlogo" src="image/fidol.png">
                        </div>
                        <div class="licon"><h1>Idol Gallery</h1></div>
                    </a>
                  <br>
                      <a href="jewel.php">
                        <div class="licon">
                          <img class="navlogo" src="image/fjewel.png">
                        </div>
                        <div class="licon"><h1>Jewel Gallery</h1></div>
                    </a>
                  <br>
                  <a href="temple.php">
                        <div class="licon">
                          <img class="navlogo" src="image/ftemple.png">
                        </div>
                        <div class="licon"><h1>Temple Work</h1></div>
                    </a>
                  <br>
                  <a href="#">
                        <div class="licon">
                          <img class="navlogo" src="image/nav/app.png">
                        </div>
                        <div class="licon"><h1>App</h1></div>
                    </a>
                  <br>



                                           </div>
               </div>
            </div>
            <!----end of col-md-3---->
            <div class="col-md-3 qfoot footbor">
              <div class="footer3">
                <h1>QUICK CONNECT</h1>
                <div class="footline"></div>
              </div>
              <div class="footform">
                  
<?php 
if(isset($_POST['qsubmit'])){
    
    
echo '<script>alert("Thank you for submitting the documents. We will be back to you soon")</script>'; 
    $to = "cholagallery@gmail.com"; // this is your Email address
    $from = "info@cholazgallery.com";
    $qname = $_POST['qname'];
    $qphone = $_POST['qphone'];
    $subject = "Quick Chat | Cholaz Gallery";
    

 $email_body="User Name:$qname.\n".
              
              "User Mobile: $qphone.\n";



    $headers = "From:" . $from;
   
    
mail($to,$subject,$email_body,$headers);

    echo "Mail Sent. Thank you " . $qname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<div class="contact-form">
<form action="" method="post">
    <label>Name * </label>
 <input type="text" name="qname" required="required"  placeholder="Enter Name"><br>
 <label>Phone * </label>
 <input type="tel" name="qphone" required="required"  placeholder="Enter Mobile"  pattern="[0-9]{10}"><br>
           <button type="submit" class="btn" name="qsubmit" class="qbutton" >SUBMIT</button>    


</form>
</div>
              </div>
            </div>
            <!----end of col-md-3---->
            <div class="col-md-3 ohead">
              <h1>VISIT GALLERY</h1>
              <div class="footline"></div>
              <div class="footer4flex">
                <a href="art1.php"><div class="footflexitems fooart">
                  <img src="image/Arts Gallery/Thanjavur art plates and shield/10-inches-ganesh-art-plate.png">
                </div></a>
                <!-----end of footflexitems---->
                <a href="art2.php"><div class="footflexitems fooart">
                  <img src="image/Arts Gallery/Thanjavur dolls and Crafts/tanjore 1.png">
                </div></a>
                <!-----end of footflexitems---->
               <a href="art3.php"> <div class="footflexitems fooart">
                  <img src="image/Arts Gallery/Thanjavur paintings/2-kali-tanjore-paintings.preview.jpg">
                </div></a>
                <!-----end of footflexitems---->
                <a href="idol1.php"><div class="footflexitems fooidol">
                  <img src="image/Idols Gallery/Brass Articrafts/Brass_-_Super_-_Ganesha.png">
                </div></a>
                <!-----end of footflexitems---->
                <a href="idol4.php"><div class="footflexitems fooidol">
                  <img src="image/Idols Gallery/Home Decors/Mahabaratha_Krishnar_-_Brass.png">
                </div></a>
                <!-----end of footflexitems---->
                <a href="idol7.php"><div class="footflexitems fooidol">
                  <img src="image/Idols Gallery/Puja Artwares/Exotic_Brass_Camphor_lamp_002.png">
                </div></a>
                <!-----end of footflexitems---->
                <a href="jewel.php"><div class="footflexitems foojw">
                  <img src="image/Jewel Gallery/Bangles - 001.jpg">
                </div></a>
                <!-----end of footflexitems---->
                <a href="jewel.php"><div class="footflexitems foojw">
                  <img src="image/Jewel Gallery/Gem - Stone - Works.jpg">
                </div></a>
                <!-----end of footflexitems---->
                <a href="jewel.php"><div class="footflexitems foojw">
                  <img src="image/Jewel Gallery/Rings.jpg">
                </div></a>
                <!-----end of footflexitems---->
                <a href="temple.php"><div class="footflexitems footm">
                  <img src="image/Temple Works/Temple_-_Brass_Kavasam.png">
                </div></a>
                <!-----end of footflexitems---->
                <a href="temple.php"><div class="footflexitems footm">
                  <img src="image/Temple Works/Thiruvaachi-God.png">
                </div></a>
                <!-----end of footflexitems---->
                <a href="temple.php"><div class="footflexitems footm">
                  <img src="image/Temple Works/Thiruvatchi_-_Raman-Seetha-Lakshaman.png">
                </div></a>
                <!-----end of footflexitems---->
               
              </div>
            </div>
            <!----end of col-md-3---->
            
          </div>
        </div>
      </section>
<section id="copyright">
    <div class="footbar">
      <div class="footflex">
        <div class="footflexitem">
          <h1>Cholazgallery and Proud Partners</h1>
        </div>
        <!-----end of footflexitem--->
        <a href="https://www.salesqueen.in/" target="_blank"><div class="footflexitem">
          <h1>Site By <span>Salesqueen.in</span></h1></a>
        </div>
        <!-----end of footflexitem--->
      </div>  
      <!-----end of footflex---->

    </div>

</section>	


 <a href="https://wa.link/ex1d9y"><div class="fixwhatsapp">
  <img src="image/whatsapp.png">
</div></a>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f5f775d4704467e89eecfe7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->