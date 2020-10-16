<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Northpasific X-ray inc.</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  
</head>

<body>
<?php 
    include 'dbh.php';
     
?>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="./Mediciotharaka/index.php">Home</a></li>
          <li class="drop-down"><a href="">Products</a>
            <ul>
              <li><a href="ProductEQ.php">EQUIPMENT</a></li>
              <li><a href="ProductAC.php">ACCESSORIES</a></li>
              <li><a href="Productsp.php">SUPPLIES</a></li>
              <li><a href="Productsparts.php">PARTS</a></li>
            </ul>
          </li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="whats-new.php">What's New</a></li>
          

        </ul>
      </nav>
      <a href="src/purchase.html" class="appointment-btn scrollto"><span class="d-none d-md-inline">Purchase Items</a>
      <form action="search.php" method="POST">
    <input type="text" name="search" placeholder="search">
    <button  type="submit" name="submit-search" >Search</button>
 </form> 
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <!-- <div class="container">
            <h2>X-Ray and Radiology?</h2>
            <p>You are at the source! Here you will find hundreds of pages of X-Ray related accessories, parts, supplies, and equipment.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div> -->
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <!-- <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div> -->
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <!-- <div class="container">
            <h2>Sequi ea ut et est quaerat</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div> -->
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

     <!-- ======= Cta Section ======= -->
    <div id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3 class="x-ray-title">X-Ray and Radiology?</h3>
          <p class="x-ray-para">You are at the source! Here you will find hundreds of pages of X-Ray related <br> accessories, parts, supplies, and equipment.</p>
          <a class="cta-btn scrollto" href="Radiology.php">About Radiology</a>
        </div>

      </div>
    </div><!-- End Cta Section -->


    
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product Categories</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4 class="title"><a href="ProductEQ.php">EQUIPMENTS</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4 class="title"><a href="ProductAC.php">ACCESSORIES</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0 spacing">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              
              <div class="icon"><i class="icofont-thermometer-alt"></i></div>
              <h4 class="title"><a href="Productsp.php">SUPPLIES</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0 spacing">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              
              <div class="icon"><i class="icofont-dna-alt-1"></i></div>
              <h4 class="title"><a href="Productsparts.php">PARTS</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    

    

   

    

    

    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CLIENT REVIEWS</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
          <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.jpg" alt=""></a>
          <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.jpg" alt=""></a>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    
    
    

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Contact Details</h3>
              <p>
                Pasific Northwest X-Ray Inc.<br>
                P.O. Box625*Gresham, or 97030*USA <br>
                <br>
                <h5> Phone Numbers</h5>
                <strong>Phone:</strong> 1 503 667 3000<br>
                <strong>Fax:</strong> 1-503-666-8855<br>
              </p>
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="title"><a href="">EQUIPMENT</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="title"><a href="">ACCESSORIES</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="title"><a href="">SUPPLIES</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="title"><a href="">PARTS</a></h4>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">

          </div>
          <div class="col-lg-4 col-md-6">
            <div class="social-links mt-3 socila-align">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">

          </div>
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
         <strong><span>1997-2020 Pasific Northwest X-Ray Inc.</span></strong>. All Rights Reserved
      </div>
    </div> 
  </div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>