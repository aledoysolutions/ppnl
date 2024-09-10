
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padua Petroleum Nigeria Limited | About Us</title>
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
about
  <!-- Companybreadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4" style="background: url(assets/images/about.jpeg) no-repeat center;">
      <div class="container py-2"> <br>
        <h2 class="title">About Us</h2> <br>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Us</li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->

  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-left pr-lg-5">
          <!-- <h6 class="sub-title">About Us</h6> -->
          <p class="my-3 pr-lg-4">Padua Petroleum Nigeria Limited is an indigenous company established to provide a unique range of services to the Nigerian Oil and Gas industry. <br> <br>
						We venture into the industry with the objective of building on existing limited in-country capacity. In view of the enormous opportunities which abound in the Oil and Gas industry in Nigeria and the new findings in other African countries, there is need for more indigenous players to fill the yawning gap by providing competitiveness and quality service delivery to the industry. <br><br>
						Padua Petroleum Nigeria Limited aims to be a model and a reference point in our areas of operation and to bring to bear the wealth of experience of our knowledge and dedicated staff garnered over the years. Our success is supported by an extensive knowledge of local business environment within the Oil and Gas sector of the Nigerian economy. Our team has the practical, industrial and management experience essential for operating within and outside Nigeria with a record of on time and on budget service delivery. <br><br>
						At Padua Petroleum Nigeria Limited, our service approach is guided by commitment to safety, compliance with international standards and regulations as well as guaranteed customer satisfaction. Padua Petroleum Nigeria Limited is ISO 9001: 2015. </p>
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
          <img src="assets/images/ab1.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>
  <!-- /about-6-->


  <!--/w3l-footer-29-main-->
  <?php
    include('inc/footer.php');
  ?>
  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
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