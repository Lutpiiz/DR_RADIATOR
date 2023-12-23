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
            <li><i class="fa fa-map"></i> Kulon Progo, Yogyakarta</li>
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
              <li><a href="sparepart.php" class="active">Sparepart</a></li>
              <li><a href="jasa.php">Layanan</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="/FP_PWL/admin/login.php"><i class="fa fa-user"></i>Login</a></li>
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
          <span class="breadcrumb"><a href="#">Home</a> / Sparepart</span>
          <h3>Sparepart</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".rad">Radiator</a>
        </li>
        <li>
          <a href="#!" data-filter=".tank">Tank</a>
        </li>
        <li>
          <a href="#!" data-filter=".sel">Selang</a>
        </li>
        <li>
          <a href="#!" data-filter=".cool">Coolant</a>
        </li>
      </ul>
      <div class="row properties-box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rad">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/Radiator-01.jpg" alt=""></a>
            <span class="category">ALTECH</span>
            <h6>Rp.4.264.000</h6>
            <h4><a href="property-details.html">ALTECH</a></h4>
            <ul>
              <li>Radiator Altech adalah radiator aluminium yang anti overheat. Radiator Altech dapat digunakan untuk berbagai mobil</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rad">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/Radiator-02.jpg" alt=""></a>
            <span class="category">KOYORAD</span>
            <h6>Rp.2.180.000</h6>
            <h4><a href="property-details.html">KOYORAD</a></h4>
            <ul>
              <li>Radiator Koyorad adalah radiator yang diproduksi untuk memenuhi standar kualitas dan performa yang ketat. Radiator Koyorad terbuat dari aluminium dan dirancang untuk performa dan daya tahan yang tinggi. 
</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rad">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/Radiator-06.jpg" alt=""></a>
            <span class="category">MISHIMOTO</span>
            <h6>Rp.20.460.000</h6>
            <h4><a href="#">MISHIMOTO</a></h4>
            <ul>
              <li>Mishimoto adalah radiator aluminium yang dirancang untuk meningkatkan kemampuan pendinginan. Radiator Mishimoto dirancang untuk transmisi manual atau otomatis, dan beberapa dirancang untuk keduanya. 
</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rad">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/Radiator-04.jpg" alt=""></a>
            <span class="category">DENSO</span>
            <h6>Rp.3.000.000</h6>
            <h4><a href="property-details.html">DENSO</a></h4>
            <ul>
              <li>Radiator DENSO adalah radiator standar pabrikan mobil yang ada di indonesia, radiator ini sangat baik kualitasnya dikarena radiator ini merupakan barang OEM pabrikan </li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac rad">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/Radiator-05.jpg" alt=""></a>
            <span class="category">KOYORAD</span>
            <h6>RP.1.925.600</h6>
            <h4><a href="property-details.html">KOYORAD</a></h4>
            <ul>
              <li>Selain Radiator Full aluminium Koyorad juga mengeluarkan besutan radiator standar OEM yang kualitasnya cukup bagus untuk mobil di asia</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac rad">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/Radiator-03.jpg" alt=""></a>
            <span class="category">TRIVINDO</span>
            <h6>RP.1.000.000</h6>
            <h4><a href="property-details.html">TRIVINDO</a></h4>
            <ul>
              <li>Radiator TRIVINDO merupakan radiator aftermarket yang kualitasnya baik dan harganya cukup ramah dikantong</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac tank">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/tank01.jpg" alt="" height="355px"></a>
            <span class="category">Lower Tank</span>
            <h6>Rp.500.000</h6>
            <h4><a href="property-details.html">Segala Merk</a></h4>
            <ul>
              <li>Kami menyediakan berbagai macam merk Lower Tank dari aluminium hingga kuningan, kualitas yang kami ambil sangat baik untuk mobil anda</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac tank">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/tank02.jpg" alt="" height="355px"></a>
            <span class="category">Upper Tank</span>
            <h6>Rp.600.000</h6>
            <h4><a href="property-details.html">Segala Merk</a></h4>
            <ul>
              <li>Kami juga menyediakan Upper Tank dengan standar OEM pabrikan yang kualitasnya tidak diragukan lagi dan ada 2 untuk radiator aluminium maupun kuningan</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac tank">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/tank03.jpg" alt="" height="355px"></a>
            <span class="category">Full Set Tank</span>
            <h6>Rp.1.000.000</h6>
            <h4><a href="property-details.html">Segala Merk</a></h4>
            <ul>
              <li>Disini juga menyediakan full set tank dari berbagai macam merk aftermarket hingga OEM pabrikan dengan harga yang cukup bersahabat bagi pelanggan</li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Pemesanan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac sel">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/selang1.jpeg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.520.000</h6>
            <h4><a href="property-details.html">26 Old Street Miami, OR 12870</a></h4>
            <ul>
              <li>Bedrooms: <span>12</span></li>
              <li>Bathrooms: <span>15</span></li>
              <li>Area: <span>380m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>14 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac sel">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/selang02.jpeg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$3.145.000</h6>
            <h4><a href="property-details.html">34 New Street Miami, OR 24650</a></h4>
            <ul>
              <li>Bedrooms: <span>10</span></li>
              <li>Bathrooms: <span>12</span></li>
              <li>Area: <span>860m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac sel">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/selang03.jpg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$3.145.000</h6>
            <h4><a href="property-details.html">34 New Street Miami, OR 24650</a></h4>
            <ul>
              <li>Bedrooms: <span>10</span></li>
              <li>Bathrooms: <span>12</span></li>
              <li>Area: <span>860m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac cool">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/coolant1.jpeg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$980.000</h6>
            <h4><a href="property-details.html">14 Mid Street Miami, OR 36450</a></h4>
            <ul>
              <li>Bedrooms: <span>8</span></li>
              <li>Bathrooms: <span>8</span></li>
              <li>Area: <span>550m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>12 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac cool">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/coolant2.jpeg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.520.000</h6>
            <h4><a href="property-details.html">26 Old Street Miami, OR 12870</a></h4>
            <ul>
              <li>Bedrooms: <span>12</span></li>
              <li>Bathrooms: <span>15</span></li>
              <li>Area: <span>380m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>14 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac cool">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/coolant3.jpeg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$3.145.000</h6>
            <h4><a href="property-details.html">34 New Street Miami, OR 24650</a></h4>
            <ul>
              <li>Bedrooms: <span>10</span></li>
              <li>Bathrooms: <span>12</span></li>
              <li>Area: <span>860m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="https://api.whatsapp.com/send?phone=6285158878446">Schedule a visit</a>
            </div>
          </div>
        </div>
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