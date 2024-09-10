<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padua Petroleum Nigeria Limited | Thank You</title>
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
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4">
      <div class="container">
        <h2 class="title">Thank You</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Thank You </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->
  <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
        
      </div>
      <div class="form-41-mian section-gap mt-5" style="margin-bottom:40px;">
        <div class="container">

        </div>
      </div>
    </div>

    <div class="form-41-mian section-gap mt-5" style="margin-bottom:40px;">
      <div class="container">
        <!-- <div class="d-grid align-form-map"> -->
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-9">
            <div class="form-inner-cont">
              <form action="#" method="post" class="signin-form">
                <div class="form-input">
                  <h4>Thank You</h4> <br> <br>
                  <!-- <label for="w3lName">Let's Get To Know You</label> -->
                  <?php if($success) echo '<div class="alert alert-success">'.$success.'</div>';?>

                </div>
                
                  <div class="map">
                    <div class="contact-info mt-4" >
                      <h4>Reach Out To Us</h4>
                      <p class="mb-3"><label>Address: </label> 2 Ahmeed Kazumu Street, Idado, By Igbo Efon, Lekki-Epe
                        Expressway, Lekki, Lagos, Nigeria.</p>
                      <p class="mb-3"><label>Email : </label> <a href="mailto:admin@ppnl.com.ng"
                          class="email">admin@ppnl.com.ng</a></p>
                      <p class="mb-3"><label>Phone : </label> <a href="tel:+234 80369 55555">+234 80369 55555</a></p>
                      <p class="mb-3"><label>Hours : </label> Mon-Fri: 8am – 5pm</p>
                    </div> <br><br>

                   

                </form> <br><br><br>
                <!-- </div> -->
            </div>
          </div>
        </div>

      </div>
    </div>


    <?php
    include('inc/footer.php');
  ?>
    <!--//w3l-footer-29-main-->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
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