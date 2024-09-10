<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padua Petroleum Nigeria Limited | </title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <!-- Template CSS -->
  <!-- page icon -->
  <link rel="icon" type="icon.png" href="assets/images/logo.jpeg">
</head>

<body>

  <?php
      include('inc/header.php');
  ?>

  <!-- Companybreadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4" style="background: url(assets/images/psc.jpeg) no-repeat center;">
      <div class="container py-2"> <br>
        <h2 class="title">PSC</h2> <br>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Plant Services & Construction</li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->

  <!-- home page video popup section -->
  <section class="w3l-index5" id="about">
    <div class="new-block py-5">
      <div class="container py-lg-5">
        <div class="middle-section text-center">
          <div class="section-width mb-3">
            <!-- <h6 class="sub-title text-center">Video</h6> -->
            <h3 class="hny-title">Plant Services and Construction</h3>
            <p class="mt-3" style="text-align: left;">Padua Petroleum and its partners maintain a high-performing team dedicated to delivering high-quality and cost-effective services to the oil & gas industry, petrochemical, FMCG and other process industries. <br><br>
              <img src="assets/images/s-psc.png" class="img-fluid radius-image" alt=""> <br><br>

                We specialize in turnkey support, capital projects, operations & maintenance, and preventative maintenance. By operating at low overhead and high productivity, we maximize cost savings without compromising quality. Our capabilities include:
                
                <ul class="mt-2" style="list-style-type: circle; text-align: left;">
                    <li>•	Insulation</li>
                    <li>•	Painting</li>
                    <li>•	Post Weld Heat Treatment (PWHT)</li>
                    <li>•	Fire Proofing</li>
                    <li>•	Fire Proofing</li>
                </ul>
            </p>
          </div>
          <div class="history-info mt-5">
            <div class="position-relative">

              <!-- <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                <span class="video-play-icon">
                  <span class="fa fa-play"></span>
                </span>
              </a> -->

              <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
              <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                <iframe src="https://player.vimeo.com/video/23512331?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <iframe src="https://player.vimeo.com/video/23512331?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page video popup section -->

  <?php
    include('inc/footer.php');
  ?>
  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 2,
            nav: false
          },
          1000: {
            items:2,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- video popup -->
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
  <!-- //video popup -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>