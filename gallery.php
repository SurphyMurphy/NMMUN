<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NMMUN</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- (A) CSS & JS -->
  <link href="../gallery-dir/gallery.css" rel="stylesheet">
  <script src="../gallery-dir/gallery.js"></script>

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="../index.html#intro" class="scrollto"><img src="../img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../~nmmun851/index.html#intro">Home</a></li>
          <!--<li><a href="../index.html#councils">Councils</a></li>
          <li><a href="../index.html#schedule">Schedule</a></li>-->
          <li><a href="../~nmmun851/index.html#venue">Venue</a></li>
          <!--<li><a href="../index.html#theteam">The Team</a></li>-->
          <li><a href="../~nmmun851/gallery.php">Gallery</a></li>
          <!--<li><a href="../index.html#supporters">Sponsors</a></li>-->
          <li><a href="../~nmmun851/index.html#faq">F.A.Q</a></li>
          <li><a href="../~nmmun851/index.html#contact">Contact</a></li>
          <li class="buy-tickets"><a href="../~nmmun851/index.html#register">Register</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

        <div class="container">
          <div class="section-header">
            <h2>Gallery</h2>
            <p>Check our gallery from past MUNs</p>
          </div>
        </div>

        <div class="gallery"><?php
        // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
        $dir = __DIR__ . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
        $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    
        // (C) OUTPUT IMAGES
        foreach ($images as $i) {
            printf("<img src='../img/gallery/%s'/>", basename($i));
        }
        ?>
        </div>
      </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="../img/logo.png" alt="TheEvenet">
            <p style="text-align:left">NMMUN has been highly committed to academic and administrative excellence, offering qualitative debates and a rich MUN culture to our leaders of tomorrow. Through this conference, we provide a unique opportunity to engage students in a professional, friendly and collaborative environment to develop their research, communication and leadership skills. 
            </p>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              New Millennium School<br>
              Building 399, Road 3009, Block 330<br>
              Bu-Ghazal, Zinj<br>
              Bahrain<br>
              <strong>Email:</strong> nmmun2022@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.instagram.com/nmmun_22/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.nms.edu.bh/ProgramFiles/Login/Homepage.aspx" class="google"><i class="fa fa-google"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

   
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/venobox/venobox.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>
</body>

</html>
