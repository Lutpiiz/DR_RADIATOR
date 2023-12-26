<!DOCTYPE html>
<html lang="en">

<?php
session_start();

// Cek apakah session 'email' telah terdaftar
if (!isset($_SESSION['email'])) {
  // Jika belum login, arahkan kembali ke halaman login
  header("Location: login.php");
  exit;
}
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>DR. RADIATOR</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> dr.radiator@gmail.com</li>
            <li><i class="fa fa-map"></i>Kulon Progo, Yogyakarta</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h1>Dr.Radiator</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="sparepart.php">Sparepart</a></li>
              <li><a href="jasa.php" class="active">Layanan</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="logout.php">Logout</a></li>
              <li><a href="/FP_PWL/admin/login.php"><i class="fa fa-user"></i><?php echo "" . $_SESSION['username'] . "" ?></a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Layanan</span>
          <h3>Layanan</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <div class="row properties-box">

        <?php
        include('config.php');
        $sql = mysqli_query($config, "SELECT * FROM jasa ORDER BY id ASC");
        while ($row = mysqli_fetch_array($sql)) {
          $nama = $row['nama'];
          echo "
          <div class='col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6'>
            <div class='item'>
              <img src='assets/images/" . $row['gambar'] . "' alt=''>
              <span class='category'>" . $row['waktu'] . "</span>
              <h6>Rp. " . number_format($row['harga'], 0, ',', '.') . "</h6>
              <h4>" . $row['nama'] . "</h4>
              <ul>
                <li>" . $row['deskripsi'] . "</li>
              </ul>
              <div class='main-button'>
                <a href='order-jasa.php?id=" . $row['id'] . "'>Pesan Sekarang</a>
              </div>
            </div>
          </div>
        ";
        }
        ?>

        <!-- <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6">
          <div class="item">
            <img src="assets/images/ganti radiator.jpg" alt="">
            <span class="category">1 Jam</span>
            <h6>Rp. 3.500.000</h6>
            <h4><a href="property-details.html">Ganti Radiator</a></h4>
            <ul>
              <li>Ganti radiator lama anda dengan radiator baru milik kami. Kualitas terjamin.</li>
            </ul>
            <div class="main-button">
              <a href="order-jasa.php">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/korok radiator.jpg" alt=""></a>
            <span class="category">2 Jam</span>
            <h6>Rp. 500.000</h6>
            <h4><a href="order-jasa.php">Korok Radiator</a></h4>
            <ul>
              <li>Ganti radiator lama anda dengan radiator baru milik kami. Kualitas terjamin.</li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/tambal radiator.jpg" alt=""></a>
            <span class="category">1 Jam</span>
            <h6>Rp. 300.000</h6>
            <h4><a href="property-details.html">Tambal Bocor Radiator</a></h4>
            <ul>
              <li>Ganti radiator lama anda dengan radiator baru milik kami. Kualitas terjamin.</li>
            </ul>
            <div class="main-button">
              <a href="order-jasa.php">Pesan Sekarang</a>
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 dr.Radiator Co., Ltd. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>