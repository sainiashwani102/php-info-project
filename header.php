<!--

-->
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
  <!--top nav-->
  <nav class="navbar navbar-expand-md navbar-dark " style="background-color:#090000;">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-4 " id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">abcd@gmail.com<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">+922828818338</a>
            </li>
          
          </ul>
          <form class="form-inline  mt-md-2 mr-4">
            
           
          <div class="main-social-footer-29 ">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook mr-2"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter mr-2"></span></a>
                <a href="#instagram" class="instagram"><span class="fa fa-instagram mr-2"></span></a>
                <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus mr-2"></span></a>
                <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin mr-2"></span></a>
              </div>
            
          </form>
        </div>
      </nav>
  <!--top nav ends-->



<section class="w3l-header">
  <nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class=""></span>Work<label class="logo-view">smart</label></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <div class="header-right d-flex align-items-center">
        <a href="index.php" class="btn btn-outline-dark d-none d-md-block btn-outline-style mr-4">Home</a>
        <a href="about.php" class="btn btn-outline-dark d-none d-md-block btn-outline-style mr-4">About</a>
        
        <a href="services.php" class="btn btn-outline-dark d-none d-md-block btn-outline-style mr-4">Services</a>
        <a href="testimonial.php" class="btn btn-outline-dark d-none d-md-block btn-outline-style mr-4">Testimoials</a>
        <a href="contact.php" class="btn btn-outline-dark d-none d-md-block btn-outline-style mr-4">Contact Us</a>
        <section class="w3l-menu">
          <div class="menu-btn">
            <span class="top"></span>
            <span class="mid"></span>
            <span class="bot"></span>
          </div>
          <div id="nav">
            <ul class="nav-inner">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="about.php">About</a>
              </li>
             
              <li>
                <a href="contact.php">Services</a>
              </li>
              <li>
                <a href="Testimonial.php">Testimonials</a>
              </li>
              <li>
                <a href="contact.php">Contact</a>
              </li>
              
            </ul>
          </div>
        </section>
      </div>
    </div>
  </nav>
</section>
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

    </body>

    </html>