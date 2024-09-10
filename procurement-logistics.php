<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padua Petroleum Nigeria Limited | Procurement and Logistics</title>
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
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4" style="background: url(assets/images/procurement.jpeg) no-repeat center;opacity:1.9;">
      <div class="container py-2"> <br>
        <h2 class="title">Procurement & Logistics</h2> <br>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Procurement & Logistics</li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->

  <!-- procurement-logistics -->
  <section class="w3l-index5" id="about">
    <div class="new-block py-5">
      <div class="container py-lg-5">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <!-- <h6 class="sub-title text-center">Video</h6> -->
            <h3 class="hny-title">SERVICES</h3>
            <p class="mt-3" style="text-align: left;">Padua Petroleum is managed by personnel with over a hundred years combined experience. It is a name built on trust with skills developed at the highest level to ensure that customers can enjoy complete faith in the reliability, safety and integrity of all our work.</p>
          </div>
          <img src="assets/images/s-pl.png" class="img-fluid radius-image video-popup-image" alt="video-popup"> <br><br>
          <div class="section-width">
            <!-- <h6 class="sub-title text-center">Video</h6> -->
            <h3 class="hny-title">Procurement & Logistics </h3>
            <p class="mt-3" style="text-align: left;">Padua Petroleum anticipates our customers’ procurement and logistics needs and we utilize continuous intelligence in key supply market. We have formed strong business partnerships with Original Equipment Manufacturers (OEMs), Accredited Distributors (AD) and Stockiest globally and has been working in close coordination with them over the past years in the following areas:
                <ul class="mt-2" style="list-style-type: circle; text-align: left;">
                    <li>•   Project Equipment, Tools and Materials for Greenfield and Brownfield</li>
                    <li>•	Maintenance, Repairs and Operations (MRO) Equipment, Tools and Materials</li>
                    <li>•	Expediting</li>
                    <li>•	Packaging and Warehousing</li>
                    <li>•	Logistics</li>
                </ul>
            </p>
            <p class="mt-3" style="text-align: left;">We use innovative sourcing and procurement methods to help companies to achieve cost savings and better supplier relationships. Padua Petroleum is committed to fostering efficiency, responsiveness, and flexibility and delivering impactful and sustainable results.</p>
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
  <!-- procurement-logistics -->

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