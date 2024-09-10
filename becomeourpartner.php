<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padua Petroleum Nigeria Limited | Contact Us</title>
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
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4" style="background: url(assets/images/partners.jpeg) no-repeat center;">
      <div class="container"> <br>
        <h2 class="title">Become Our Partner</h2> <br>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>  Become Our Partner </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->
  <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
        <h6 class="sub-titlehny">Contact</h6>
        <!-- <h3 class="hny-title">Send us your partnership request</h3> -->
        <!-- <h3 style=" margin-top:20px;">Send us your partnership request</h3> -->
        <div style=" margin-top:20px;">
        <h3 >Send us your partnership request</h3>
       
        </div>
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
                      <form action="process_partner.php" method="post" class="signin-form">
                        <div class="form-input">
                            <h4>Let's Get To Know You</h4> <br> <br>
                          <!-- <label for="w3lName">Let's Get To Know You</label> -->
                          <?php if($error) echo '<div class="alert alert-danger">'.$error.'</div>';?>
                          <input type="text" name="fullname" width="100%" id="w3lName" placeholder="*Your Full Name*" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lSender">Phone (Required)*</label> -->
                          <input type="text" name="position" id="w3lSender" placeholder="*Your Position*" required="" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lSender">Email (Required)*</label> -->
                          <input type="email" name="email" id="w3lSender" placeholder="*Email Address*" required="" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lSender">Email (Required)*</label> -->
                          <input type="number" name="phone" id="w3lSender" placeholder="*Phone*" required="" />
                        </div>

                        <form action="#" method="post" class="signin-form">
                        <div class="form-input">
                            <h4>Company Details</h4> <br> <br>
                          <!-- <label for="w3lName">Let's Get To Know You</label> -->
                          <input type="text" name="company_name" id="w3lName" placeholder="*Company Name*" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lSender">Phone (Required)*</label> -->
                          <input type="text" name="country" id="w3lSender" placeholder="*Country*" required="" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lSender">Email (Required)*</label> -->
                          <input type="text" name="website" id="w3lSender" placeholder="*Website Address" required="" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lSender">Email (Required)*</label> -->
                          <input type="text" name="industry" id="w3lSender" placeholder="*Industry*" required="" />
                        </div>
                        <div class="form-input">
                          <!-- <label for="w3lMessage">Message (Required)*</label> -->
                          <textarea placeholder="Contact Address" name="address" id="w3lMessage" required=""></textarea>
                        </div>

                        <h4>Product/Partnership Details</h4> <br> <br>
                        <div class="form-input">
                          <!-- <label for="w3lMessage">Message (Required)*</label> -->
                          <textarea placeholder="List of Products" name="list_of_products" id="w3lMessage" required=""></textarea>
                        </div>
                          <div class="map">
                      <div class="contact-info mt-4" style="float-left;" >
                        <h4>Reach Out To Us</h4>
                        <p class="mb-3"><label>Address: </label> 2 Ahmeed Kazumu Street, Idado, By Igbo Efon, Lekki-Epe Expressway, Lekki, Lagos, Nigeria.</p>
                        <p class="mb-3"><label>Email : </label> <a href="mailto:admin@ppnl.com.ng" class="email">admin@ppnl.com.ng</a></p>
                        <p class="mb-3"><label>Phone : </label> <a href="tel:+234 80369 55555">+234 80369 55555</a></p>
                        <p class="mb-3"><label>Hours : </label> Mon-Fri: 8am – 5pm</p>
                      </div> <br><br>
                    
                        <div class="form-submit text-right" style="margin-top:30px;">
                            <button type="submit" name="btn_partner" class="btn btn-style btn-primary">Become Our Partner</button>
                          </div>
                          
                          
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