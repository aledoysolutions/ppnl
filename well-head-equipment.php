<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padua Petroleum Nigeria Limited | Our Products</title>
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

  <!-- main-slider -->
  <!-- Companybreadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4" style="background: url(assets/images/pexe.jpg) no-repeat center;">
      <div class="container py-2"> <br><br>
        <h2 class="title">Well Head Equipment</h2> <br><br>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Products</li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->


      <!--/grids-->
      <section class="w3l-grids-3 py-5" id="about">
        <div class="container py-md-5">
          <div class="row bottom-ab-grids align-items-center">
            <div class="col-lg-6 bottom-ab-left mt-lg-0 mt-5">
                <img src="assets/images/pexe.jpg" class="img-fluid" alt="">
              </div>
            <div class="col-lg-6 bottom-ab-right pr-lg-5">
              <!-- <h6 class="sub-title">About Us</h6> -->
              <h3 class="hny-title">
                Well Head Equipment</h3>

                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td>Well Heads</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row"></th>
                    <td>Casing Spools</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row"></th>
                    <td>Casing Head Housings</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row"></th>
                    <td>Tubing Heads</td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row"></th>
                    <td>Well Head Christmas Trees</td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
                </table>

              <!-- <a href="about.php" class="btn btn-style btn-secondary mt-4">Read More</a> -->
            </div>
            
    
          </div>
        </div>
      </section>
      <!--//grids-->

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