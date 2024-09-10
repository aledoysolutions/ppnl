
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
    <div class="breadcrumb-bg breadcrumb-bg-Companypy-sm-5 py-4" style="background: url(assets/images/contact.png) no-repeat center;">
      <div class="container"> <br>
        <h2 class="title">Contact</h2> <br>
        <ul class="breadcrumbs-custom-path mt-2">
          <!-- <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //Companybreadcrumb -->
   <!--/contact-->
   <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
        <h6 class="sub-titlehny">Contact</h6>
        <h3 class="hny-title">Get in touch with us</h3>
    </div>
      <div class="form-41-mian section-gap mt-5" style="margin-bottom:40px;">
        <div class="container">
          <div class="d-grid align-form-map">
            <div class="form-inner-cont">
              <form action="process_contact.php" method="post" class="signin-form">
              <?php if($error) echo '<div class="alert alert-danger">'.$error.'</div>';?>
                <div class="form-input">
                  <label for="w3lName">Name</label>
                  <input type="text" value="<?php echo $fullname;?>" name="fullname" id="w3lName" placeholder="Name" />
                </div>
                <div class="form-input">
                  <label for="w3lSender">Phone </label>
                  <input type="text" value="<?php echo $phone;?>" name="phone" id="w3lSender" placeholder="Phone"  />
                </div>
                <div class="form-input">
                  <label for="w3lSender">Email </label>
                  <input type="email" value="<?php echo $email;?>" name="email" id="w3lSender" placeholder="Email"  />
                </div>
                <div class="form-input">
                  <label for="w3lMessage">Message </label>
                  <textarea placeholder="" name="message"  id="w3lMessage" >
                  <?php echo $message;?>
                    
                  </textarea>
                
                </div>
                <div class="form-submit text-right">
                    <button type="submit" name="btn_contact" class="btn btn-style btn-primary">Get In Touch</button>
                  </div>
              </form>
            </div>
            <div class="map">
              <div class="contact-info mt-4">
                <h4>Reach Out To Us</h4>
                <p class="mb-3"><label>Address: </label> 2 Ahmeed Kazumu Street, Idado, By Igbo Efon, Lekki-Epe Expressway, Lekki, Lagos, Nigeria.</p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:admin@ppnl.com.ng" class="email">admin@ppnl.com.ng</a></p>
                <p class="mb-3"><label>Phone : </label> <a href="tel:+234 80369 55555">+234 80369 55555</a></p>
                 <p class="mb-3"><label>Hours : </label> Mon-Fri: 8am – 5pm</p>
              </div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="contant11-top-bg mt-lg-5 mt-4">
        <div class="container">
          <div class="d-grid contact pt-lg-4">
            <div class="contact-info-left d-grid text-left">
              <div class="contact-info mt-4">
                <h4>London Office</h4>
                <p class="mb-3"><label>Address: </label> London, LY-90814 Hill Station 2nd Street</p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:Padua Petroleum Nigeria Limited@email.com" class="email">Padua Petroleum Nigeria Limited@email.com</a></p>
                <p class="mb-3"><label>Phone : </label> <a href="tel:+1-2345-678-11">+1-2345-678-11</a></p>
                 <p class="mb-3"><label>Hours : </label> Mon-Fri: 8am – 7pm</p>
              </div>


              <div class="contact-info mt-4">
                <h4>Reach Out To Us</h4>
                <p class="mb-3"><label>Address: </label> 2 Ahmeed Kazumu Street, Idado, By Igbo Efon, Lekki-Epe Expressway, Lekki, Lagos, Nigeria.</p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:admin@ppnl.com.ng" class="email">admin@ppnl.com.ng</a></p>
                <p class="mb-3"><label>Phone : </label> <a href="tel:+234 80369 55555">+234 80369 55555</a></p>
                 <p class="mb-3"><label>Hours : </label> Mon-Fri: 8am – 7pm</p>
              </div>


              <div class="contact-info mt-4">
                <h4>Berlin Office</h4>
                <p class="mb-3"><label>Address: </label> Berlin, BY-90814 Hill Station 4th Street</p>
                <p class="mb-3"><label>Email : </label> <a href="mailto:Padua Petroleum Nigeria Limited@email.com" class="email">Padua Petroleum Nigeria Limited@email.com</a></p>
                <p class="mb-3"><label>Phone : </label> <a href="tel:+1-2345-678-11">+1-2345-678-11</a></p>
                 <p class="mb-3"><label>Hours : </label> Mon-Fri: 8am – 7pm</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15858.55972730465!2d3.5211175!3d6.4402643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5f11f65c7c8213f!2sPadua%20Petroleum%20Nigeria%20Limited!5e0!3m2!1sen!2sng!4v1655391250538!5m2!1sen!2sng" frameborder="0" allowfullscreen="" style="height:500px;width:100%;"></iframe>
            </div>
  </section>
  <!--//contact-->
   <!--/w3l-footer-29-main-->
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