<?php 
    include 'dbh.php';
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
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
          <li class="active"><a href="./index.php">Home</a></li>
          <li class="drop-down"><a href="">Products</a>
            <ul>
              <li><a href="ProductEQ.php">EQUIPMENT</a></li>
              <li><a href="ProductAC.php">ACCESSORIES</a></li>
              <li><a href="Productsp.php">SUPPLIES</a></li>
              <li><a href="Productsparts.php">PARTS</a></li>
            </ul>
          </li>
          <li><a href="MedicioChama/about-us.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="MedicioChama/whats-new.php">What's New</a></li>
          

        </ul>
      </nav>
      <a href="src/purchase.html" class="appointment-btn scrollto"><span class="d-none d-md-inline">Purchase Items</a>
      <form action="search.php" method="POST">
    <input type="text" name="search" placeholder="search">
    <button type="submit" name="submit-search">Search</button>
 </form> 
    </div>
  </header><!-- End Header -->
<h1>Search page</h1>

<div class="supply-container">
<?php 
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM supply WHERE pname LIKE '%$search%' OR pbarand LIKE  '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult > 0){
        echo "There are ".$queryResult." results! ";
        }
        if($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                
                echo  "<a href='item.php?pbarand=".$row['pbarand']."&pname=".$row['pname']."'><div class='supply-box '>
                <div class='row'>
                <div class='col-2'>
                    <img src='{$row['pic']}' width='100px height='100px'>
                    </div>
                    <div class='col-10'>
                    <!--<h2>".$row['pname']."</h2>-->
                    <h3>".$row['pbarand']."</h3>
                    <p>".$row['pdes']."</p>
                    </div>
                    </div>
                </div>" ;
            }
        }
        else{
            echo "There are no results matching your search!";
        }
    }
?>
</div>

<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div >
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
</footer>

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