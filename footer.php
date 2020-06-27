 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Grocery Store</title>

    <!-- Google online fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
  </head>
  <body>
 
 
 
 
 
 <!-- footer -->
 <footer class="w3l-footer">
      <div class="footer-18 py-5">
        <div class="container pb-lg-3">
          <div class="row footer-top-29">
            <div class="col-md-4 footer-list-29 footer-1 mt-md-4 text-justify">
              <h6 class="footer-title-29">Contact Us</h6>
              <ul>
                <li>
                  <span class="fa fa-map-marker"></span>
                  <p> Workflow, 433 California St, Suite 300 San Francisco, <br>CA 94104, USA</p>
                </li>
                <li>
                  <span class="fa fa-phone"></span>
                  <a href="tel:+44 99 555 42"> +44 99 555 42</a></li>
                <li>
                  <span class="fa fa-envelope-open-o"></span>
                  <a href="mailto:mailid@mail.com" class="mail">
                    mailid@mail.com</a></li>
              </ul>
              <div class="main-social-footer-29">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
              </div>
            </div>

            <div class="col-md-4 footer-list-29 footer-4 mt-md-4 mt-5">
              <h6 class="footer-title-29">Subscribe</h6>
              <p>Always know what’s happening in the
                world of applications. Recieve all
                latest post in your inbox.</p>
              <form action="#" method="post" class="rightside-form mt-4">
                <input type="email" name="email" placeholder="Enter your email">
                <button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
              </form>
              </ul>
            </div>
            <div class="col-md-4 footer-list-29 footer-4 mt-md-4 mt-5">
            <h6 class="footer-title-29">Quick links</h6>
            <ul class="list-btm-29 col-lg-5 justify-content-center">
            
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">services</a></li>
              <li><a href="testimonial.php">testimonial</a></li>
              <li><a href="contact.php">Contact</a></li>
              
            </ul>
            </div>
            <div class="row mt-3 ml-3">
            <a href="#"><img src="https://mk0xucobucefof4dkp4y.kinstacdn.com/wp-content/themes/scandit/img/app-store.svg" alt="Download our demo app from the Apple App store" width="123" height="38" class="lazyloaded" data-ll-status="loaded"></a>&nbsp;
            <a href="#"><img src="https://mk0xucobucefof4dkp4y.kinstacdn.com/wp-content/themes/scandit/img/google-play.svg" alt="Download our demo app from the Google Play store" width="123" height="38" class="lazyloaded" data-ll-status="loaded"></a>
            </div>
          </div>
          <div class="row bottom-copies">
            <p class="copy-footer-29 col-lg-7 text-lg-left text-center">© 2020 . All rights reserved |  
            <a href="#">Grocery</a></p>
            <ul class="list-btm-29 col-lg-5 text-lg-right text-center">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">services</a></li>
              <li><a href="testimonial.php">testimonial</a></li>
              <li><a href="contact.php">Contact</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </footer>
    <!-- // footer -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <!-- disable body scroll which navbar is in active -->



    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for teams1-->
    <script>
      $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 0,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            667: {
              items: 2,
              nav: true,
              margin: 20
            },
            1000: {
              items: 4,
              nav: true,
              loop: true,
              margin: 25
            }
          }
        })
      })
    </script>
    <!-- //script for teams1-->

    <script>
      $(document).ready(function () {

        var $menuBtn = $('.menu-btn');
        var $nav = $('#nav');
        var $stylebox = $('#style-box');
        var $styleli = $stylebox.find('li');

        $menuBtn.on('click', function () {
          var $this = $(this);
          var styles = $stylebox.data('styles');
          $this.toggleClass("active");
          $this.next('#nav').toggleClass("open");
          $stylebox.toggleClass(styles);
        });

        $nav.addClass('topslide');

        $styleli.on('click', function () {
          var $this = $(this);
          $this.siblings().removeClass('now');
          $this.addClass('now');
          var styles = $this.data('styles');
          $nav.removeClass();
          $nav.addClass(styles);
          $nav.siblings('#style-box').removeClass();
          $nav.siblings('#style-box').data('styles', styles);
        });
      });
    </script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-slide-bottom'
        });
      });
    </script>


<script>
      $(document).ready(function () {

        var $menuBtn = $('.menu-btn');
        var $nav = $('#nav');
        var $stylebox = $('#style-box');
        var $styleli = $stylebox.find('li');

        $menuBtn.on('click', function () {         
          var $this = $(this);
          var styles = $stylebox.data('styles');        
          $this.toggleClass("active");         
          $(this).next().slideToggle();
          
          $this.next('#nav').toggleClass("open");
          $stylebox.toggleClass(styles);
        });

        $nav.addClass('topslide');

        $styleli.on('click', function () {
          var $this = $(this);
          $this.siblings().removeClass('now');
          $this.addClass('now');
          var styles = $this.data('styles');
          $nav.removeClass();
          $nav.addClass(styles);
          $nav.siblings('#style-box').removeClass();
          $nav.siblings('#style-box').data('styles', styles);
        });
      });
    </script>

    </body>

    </html>