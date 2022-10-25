<?php 
 include "submit/fileSend.php";
//  include "submit/mailPdf.php";

?>


<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <!-- <div class="status-msg <?php //echo $status; ?>"><?php //echo $statusMsg; ?></div> -->


    <?php if($status=="error"){ ?>

<div id="overlay">
    <div class="messagebox">
    <div class="popup-image">
            <img src="assets/images/popup-error.png" alt="">
        </div>

        <p class="popup-heading">Error!</p>
        <p class="popup-body">Oops! something went wrong</p>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:85%;text-align:center;margin-left: 40px;">
        <button id="accept" class="popup-btn-error" onclick="popUp()">Retry</button>
    </div>  
</div>

<?php } else if($status=="success") {?>
<div id="overlay">
    <div class="messagebox">
        <div class="popup-image">
            <img src="assets/images/popup-image.png" alt="">
        </div>

        <p class="popup-heading">Your request has been submitted</p>
        <p class="popup-body">Our team members will check and submit your report in your mail address. Please check your mail for confirmation.</p>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:85%;text-align:center;margin-left: 40px;">
        <button class="popup-btn" id="accept" onclick="popUp()">OK</button>
    </div>  
</div>
<?php } ?>



<?php } ?>



<section>
    <div class="amazon-expert">
        <div class="container">
            <div class="amazon-expert-header">
                <h1>Our Amazon specialists are well-versed in what it takes to maximize your revenue potential on Amazon</h1>
                <p>We have increased the sales of thousands of brands like yours by double, triple, or even quadruple</p>
            </div>
            <div class="owl-image">
                <div class="owl-slider">
                    <div id="carousel" class="owl-carousel">
                        <div class="item">
                            <img src="assets/img/client01.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client02.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client03.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client04.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client_07.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client_06.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client_05.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="assets/img/client_08.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- --------- become amazon -------- -->

<section>
    <div class="become-amazon">
        <div class="container">
            <div class="become-amazon-row">
                <div class="become-amazon-col-1">
                    <p class="free-downoad-p">Free download</p>
                    <h1>How To Become <span>Unstoppable</span> On Amazon</h1>
                    <p class="become-amazon-col-1-p">Download our step-by-step guide to build <br> an Amazon strategy to help you sell more on Amazon</p>
                    <form action="" method="POST">
                       <div class="name">
                            <input type="text" name="first_name" placeholder="First Name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                            <input type="text" name="last_name" placeholder="Last Name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                       </div>
                       <div class="mail">
                            <input type="email" name="email" placeholder="Your Email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                       </div>
                       <div class="captcha">
                          <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                       </div>
                        <div class="submit-contact">
                            <button type="submit" name="submit_pdf" class="btn footer-contact-btn">Free download</button>
                        </div>
                    </form>
                </div>
                <div class="become-amazon-col-2">
                    <img src="assets/images/laptop.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
        

<!-- ---------- customer review ----------- -->

<section>
    <div class="helped-brands">
        <div class="container">

            <div class="helped-brands-header">
                <h1>We've Helped Brands Like Yours Increase  Sales on Amazon</h1>
            </div>

            <div id="testim" class="testim">
            <!--         <div class="testim-cover"> -->
                        <div class="wrap">

                            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                            <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                            <ul id="testim-dots" class="dots">
                                <li class="dot active"></li><!--
                                --><li class="dot"></li><!--
                                --><li class="dot"></li><!--
                                --><li class="dot"></li><!--
                                --><li class="dot"></li>
                            </ul>
                            <div id="testim-content" class="cont">
                                
                                <div class="active">
                                    <div class="img"><img src="assets/images/client_1.png" alt=""></div>
                                    <p>Thanks to Velocity Sellers, we have quadrupled our sales in less than a year. Our Account Manager has given us the tools to consistently grow our sales each month and handles our day-to-day in Seller Central. We’ve also been able to use Velocity Sellers as a resource for new product research. Understanding the competitive landscape on Amazon has helped us make informed decisions on the types of new products we should bring to the platform.</p>                    
                                    <h2>Dan Weinstein</h2>
                                    <p>Boost on amazon</p>
                                </div>

                                <div>
                                    <div class="img"><img src="assets/images/client_1.png" alt=""></div>
                                    <p>Thanks to Velocity Sellers, we have quadrupled our sales in less than a year. Our Account Manager has given us the tools to consistently grow our sales each month and handles our day-to-day in Seller Central. We’ve also been able to use Velocity Sellers as a resource for new product research. Understanding the competitive landscape on Amazon has helped us make informed decisions on the types of new products we should bring to the platform.</p>                    
                                    <h2>Dan Weinstein</h2>
                                    <p>Boost on amazon</p>
                                </div>

                                <div>
                                    <div class="img"><img src="assets/images/client_1.png" alt=""></div>
                                    <p>Thanks to Velocity Sellers, we have quadrupled our sales in less than a year. Our Account Manager has given us the tools to consistently grow our sales each month and handles our day-to-day in Seller Central. We’ve also been able to use Velocity Sellers as a resource for new product research. Understanding the competitive landscape on Amazon has helped us make informed decisions on the types of new products we should bring to the platform.</p>                    
                                    <h2>Lorem Ipsum</h2>
                                    <p>Boost on amazon</p>
                                </div>

                                <div>
                                    <div class="img"><img src="assets/images/client_1.png" alt=""></div>
                                    <p>Thanks to Velocity Sellers, we have quadrupled our sales in less than a year. Our Account Manager has given us the tools to consistently grow our sales each month and handles our day-to-day in Seller Central. We’ve also been able to use Velocity Sellers as a resource for new product research. Understanding the competitive landscape on Amazon has helped us make informed decisions on the types of new products we should bring to the platform.</p>                    
                                    <h2>Lorem De Ipsum</h2>
                                    <p>Boost on amazon</p>
                                </div>

                                <div>
                                    <div class="img"><img src="assets/images/client_1.png" alt=""></div>
                                    <p>Thanks to Velocity Sellers, we have quadrupled our sales in less than a year. Our Account Manager has given us the tools to consistently grow our sales each month and handles our day-to-day in Seller Central. We’ve also been able to use Velocity Sellers as a resource for new product research. Understanding the competitive landscape on Amazon has helped us make informed decisions on the types of new products we should bring to the platform.</p>                    
                                    <h2>Ms. Lorem R. Ipsum</h2>
                                    <p>Boost on amazon</p>
                                </div>

                            </div>

                        </div>
            <!--         </div> -->
            </div>
        </div>
    </div>
</section>


<!-- ------------ contact info ----------- -->


<section>
    <div class="contact-info">
        <div class="container">
            <div class="contact-info-row">
                <div class="contact-info-header">
                    <div class="logo">
                        <img src="assets/images/logo_logo.svg" alt="">
                        <!-- <p>Boost on <br> <span>Amazon</span></p> -->
                    </div>
                    <div class="contact">
                        <h1>+1-415-800-4984</h1>
                    </div>
                </div>
                <hr/>
                <div class="contact-info-footer">
                    <div class="info-footer-col-1">
                        <p>Many brands are frustrated by the complexity of Amazon and cannot take full advantage of its sales potential. That's why we've created a full-service Amazon marketing agency that helps brands grow their sales. Our agency protects and positions your brand so that it will start ranking higher, customers will find you more easily, and sales will increase quickly.</p>
                        <div class="info-col-icon">
                        <i class="fa-brands fa-facebook"></i>  <p>Facebook</p>
                        <i class="fa-brands fa-square-twitter"></i>   <p>Twitter</p>
                        <i class="fa-brands fa-square-instagram"></i>  <p> Instagram</p>
                        </div>
                    </div>
                    <div class="info-footer-col-2">
                        <p>Contact Information</p>
                        <p>Address: 793/1 Middle, S MonipurRd, Dhaka - 1216, Bangladesh.</p>
                        <p>info@boostonamazon.com</p>
                        <p>Skype: Boostonamazon</p>
                    </div>
                    <div class="info-footer-col-3">
                        <p>Quick Links</p>
                        <ul>
                            <li><a href="aboutUs.php">About</a></li>
                            <li><a href="videos.php">Vlog</a></li>
                            <li><a href="blogs.php">Blog</a></li>
                            <li><a href="tips.php">Tips</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="info-footer-col-4">
                        <p>Services</p>
                        <ul>
                            <li><a href="dataManagement.php">Data Management</a></li>
                            <li><a href="sponsered.php">Sponsored ad</a></li>
                            <li><a href="graphics.php">Amazon graphics</a></li>
                            <li><a href="services.php">Other Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="copyright">
        <p>© 2022 boost on Amazon. All Rights Reserved. Owned and Operated by Isharify Limited</p>
    </div>
</section>




 <script src="assets/js/jquery-3.6.0.js"></script>
 <script src="assets/js/owl.carousel.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="https://use.fontawesome.com/1744f3f671.js"></script>
 <script src="assets/js/main.js"></script>


 <script>
  
var notification = document.getElementById("overlay");

window.addEventListener('load', (e) => {
  notification.style.visibility = "visible";
});
function popUp(){
    document.getElementById("overlay").style.visibility = "hidden";
};

// window.onload = function(){ 
// var notification = document.getElementById("overlay");
// notification.style.visibility = "visible";
// };

// function popUp(){
//     document.getElementById("overlay").style.visibility = "hidden";
// };




jQuery("#carouselBrand").owlCarousel({
  autoplay: false,
    loop: true,
    margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
    responsiveClass: true,
//   autoWidth: true,
    // autoHeight: true,
    // autoplayTimeout: 2000,
    // smartSpeed: 800,
    dots: false,
    nav: true,
    responsive: {
    0: {
      items: 1
    },

    600: {
      items: 2
    },

    1024: {
      items: 3
    },

    1366: {
      items: 5
    }
  }
});






jQuery("#carousel_caseStudy").owlCarousel({
    autoplay: false,
    loop: true,
    margin: 50,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
    responsiveClass: true,
//   autoWidth: true,
    // autoHeight: true,
    // autoplayTimeout: 2000,
    // smartSpeed: 800,
    dots: false,
    nav: true,
    responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 2
    },

    1366: {
      items: 5
    }
  }
});




jQuery("#carousel_services").owlCarousel({
    autoplay: true,
    loop: true,
    margin: 50,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
    responsiveClass: true,
//   autoWidth: true,
    // autoHeight: true,
    autoplayTimeout: 2000,
    smartSpeed: 800,
    dots: false,
    responsive: {
    0: {
      items: 1
    },

    600: {
      items: 2
    },

    1024: {
      items: 3
    },

    1366: {
      items: 5
    }
  }
});




    jQuery("#carousel").owlCarousel({
  autoplay: true,
    loop: true,
  margin: 50,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
//   autoWidth: true,
  autoplayTimeout: 2000,
  smartSpeed: 800,
  dots: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 2
    },

    1024: {
      items: 3
    },

    1366: {
      items: 5
    }
  }
});




   
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.first_name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.first_name.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.situation.value == "" ) {
            alert( "Please provide your situation!" );
            return false;
         }
         if( document.myForm.revenue_on_amazon.value == "" ) {
            alert( "Please provide your revenue_on_amazon!" );
            return false;
         }
         if( document.myForm.selling_on_amazon.value == "" ) {
            alert( "Please provide your selling_on_amazon!" );
            return false;
         }
         if( document.myForm.revenue_not_amazon.value == "" ) {
            alert( "Please provide your revenue_not_amazon!" );
            return false;
         }
         return( true );
      }
   



// -----------------------

var navMenu = document.getElementById('navMenu');
var hamburger = document.getElementsByClassName('hamburger');
var sideLayer = document.getElementById('sideLayer');

function openSideMenu(){

    if (navMenu.style.right === "-384px") {
        navMenu.style.right = "0px";
        hamburger[0].classList.add('active');
        // sideLayer.style.right = "0px";
  } else {
    navMenu.style.right = "-384px";
    hamburger[0].classList.remove('active');
    // sideLayer.style.right = "-480px";
  }


    // hamburger.classList.add('active');
}




// -------------------------

$(document).ready(function(){
  $(".button").click(function() {
    $(".dropdown-mobile a").removeClass("clicked");
    $(".arrow").toggleClass("open");
    $(".dropdown-mobile").toggleClass("open");
  });
  
  $(".dropdown-mobile a").click(function() {
    $(".dropdown-mobile a").removeClass("clicked");
    $(this).toggleClass("clicked"); 
  });
});

    //  -------------------------------

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



// --------------------------


var sidemenu = document.getElementById('sidemenu');

function openmenu(){
  sidemenu.style.left = "0";
  sidemenu.style.overflowY = "auto";
}

function closemenu(){
  sidemenu.style.left = "-570px";
  sidemenu.style.overflowY = "hidden";

}



    var specialist_col_1_sub_1 = document.getElementById('specialist-col-1-sub-1');
    var specialist_col_1_sub_2 = document.getElementById('specialist-col-1-sub-2');
    var specialist_col_1_sub_3 = document.getElementById('specialist-col-1-sub-3');
    var specialist_col_1_sub_4 = document.getElementById('specialist-col-1-sub-4');
    var specialist_col_2_sub_1 = document.getElementById('specialist-col-2-sub-1');
    var specialist_col_2_sub_3 = document.getElementById('specialist-col-2-sub-3');
    var specialist_col_3_sub_1 = document.getElementById('specialist-col-3-sub-1');
    var specialist_col_3_sub_2 = document.getElementById('specialist-col-3-sub-2');
    var specialist_col_3_sub_3 = document.getElementById('specialist-col-3-sub-3');
    var specialist_col_3_sub_4 = document.getElementById('specialist-col-3-sub-4');

    var layer = document.getElementById('layer');



window.addEventListener('load', (e) => {

        specialist_col_1_sub_1.style.animation = "col-1-sub-1 2s";
        specialist_col_1_sub_2.style.animation = "col-1-sub-2 2s";
        specialist_col_1_sub_3.style.animation = "col-1-sub-3 2s";
        specialist_col_1_sub_4.style.animation = "col-1-sub-4 2s";
        specialist_col_2_sub_1.style.animation = "col-2-sub-1 2s";
        specialist_col_2_sub_3.style.animation = "col-2-sub-3 2s";
        specialist_col_3_sub_1.style.animation = "col-3-sub-1 2s";
        specialist_col_3_sub_2.style.animation = "col-3-sub-2 2s";
        specialist_col_3_sub_3.style.animation = "col-3-sub-3 2s";
        specialist_col_3_sub_4.style.animation = "col-3-sub-4 2s";

        layer.style.animation = "childe1 2s";


});


window.addEventListener('scroll',(event) => {
    
    // const scrollable = document.documentElement.scrollHeight -window.innerHeight;
    const scrolled = window.scrollY;

//    console.log(scrolled);

    if(scrolled <=300)
    {
        specialist_col_1_sub_1.style.animation = "";
        specialist_col_1_sub_2.style.animation = "";
        specialist_col_1_sub_3.style.animation = "";
        specialist_col_1_sub_4.style.animation = "";
        specialist_col_2_sub_1.style.animation = "";
        specialist_col_2_sub_3.style.animation = "";
        specialist_col_3_sub_1.style.animation = "";
        specialist_col_3_sub_2.style.animation = "";
        specialist_col_3_sub_3.style.animation = "";
        specialist_col_3_sub_4.style.animation = "";

        layer.style.animation = "";
    }

    if( scrolled >= 300){
        
        specialist_col_1_sub_1.style.animation = "col-1-sub-1 2s";
        specialist_col_1_sub_2.style.animation = "col-1-sub-2 2s";
        specialist_col_1_sub_3.style.animation = "col-1-sub-3 2s";
        specialist_col_1_sub_4.style.animation = "col-1-sub-4 2s";
        specialist_col_2_sub_1.style.animation = "col-2-sub-1 2s";
        specialist_col_2_sub_3.style.animation = "col-2-sub-3 2s";
        specialist_col_3_sub_1.style.animation = "col-3-sub-1 2s";
        specialist_col_3_sub_2.style.animation = "col-3-sub-2 2s";
        specialist_col_3_sub_3.style.animation = "col-3-sub-3 2s";
        specialist_col_3_sub_4.style.animation = "col-3-sub-4 2s";

        layer.style.animation = "childe1 2s";


    }

    


});




 </script>

</body>
</html>