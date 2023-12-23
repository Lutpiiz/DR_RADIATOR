<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>DR. RADIATOR - ADMIN</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
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
            <a href="temp.php" class="logo">
              <h1>Dr.Radiator</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
                <li><a href="index.php" class="active">Daftar Barang</a></li>
                <li><a href="tambah-barang.php">Tambah Barang</a></li>
              <li><a href="#"><i class="fa fa-user"></i>Admin <?php echo "". $_SESSION['username'] ."" ?></a></li>
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

    <div class="container">
        <center><h3>- DATA SPAREPART -</h3></center>
        <br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Sparepart</th>
                <th scope="col">Jenis</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Menu</th>
              </tr>
            </thead>
            <tbody>
              
                <?php 
                    include ('config.php');
                    //*********** Perintah menampilkan daftar buku ***********//
                    $sql=mysqli_query($conn, "select * from barang order by id ASC");
                    $no=1;
                        while ($row=mysqli_fetch_array($sql)){
                          $nama=$row['nama'];
                            echo "
                                  <tr>
                                    <td width='30'>".$no."</td>
                                    <td width='100'><image width='60px' src='img/".$row['gambar']."'></td>
                                    <td width='200'>".$row['nama']."</td>
                                    <td width='150'>".$row['jenis']."</td>
                                    <td width='100'>".$row['deskripsi']."</td>
                                    <td width='100'>".$row['harga']."</td>
                                    <td width='100'><a class='btn btn-info' href='edit-barang.php?id=".$row['id']."'>Edit</a> <a class='btn btn-danger' href='hapus-barang.php?id=".$row['id']."'>Hapus</a> </td>
                                  </tr>
                                            ";
                          $no++;
                        };
                ?>
                
            </tbody>
          </table>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>

</body>

</html>