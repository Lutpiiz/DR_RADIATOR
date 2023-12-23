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
        <h3>- Edit Buku -</h3>
        <?php 
          include ('config.php');

          if (isset($_GET['id'])){ 
            $id=$_GET['id']; 
            $sql_edit=mysqli_query($conn,"SELECT * FROM barang WHERE id='$id'");
            while ($data=mysqli_fetch_array($sql_edit)){
                $judul_buku=$data['buku_judul'];
                $penulis_buku=$data['buku_penulis'];
                $jenis_buku=$data['buku_jenis'];
                $cover_buku=$data['buku_cover'];
            }
            
        ?>

        <form action="edit-buku.php" method="POST" >

          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ID Buku</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="idbuku" name="idBuku" value="<?php echo $id ?>" readonly="readonly">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Cover Buku</label>
            <div class="col-sm-10">
              <image width='60px' src='<?php echo "img/".$cover_buku ?>'>
              File terupload: <?php echo $cover_buku ?>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judulbuku" name="judulBuku" value="<?php echo $judul_buku ?>">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $penulis_buku ?>">
            </div>
          </div>
          
          <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Buku</legend>
            <div class="col-sm-10">
              <?php 
                if ($jenis_buku=='Fiksi'){
                  echo "
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='jenisBuku' id='gridRadios1' value='Fiksi' checked>
                    <label class='form-check-label' for='gridRadios1'>
                      Fiksi
                    </label>
                  </div>
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='jenisBuku' id='gridRadios2' value='Nonfiksi'>
                    <label class='form-check-label' for='gridRadios2'>
                      Nonfiksi
                    </label>
                  </div>
                  ";
                }
                else
                {
                  echo "
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='jenisBuku' id='gridRadios1' value='Fiksi'>
                    <label class='form-check-label' for='gridRadios1'>
                      Fiksi
                    </label>
                  </div>
                  <div class='form-check'>
                    <input class='form-check-input' type='radio' name='jenisBuku' id='gridRadios2' value='Nonfiksi' checked>
                    <label class='form-check-label' for='gridRadios2'>
                      Nonfiksi
                    </label>
                  </div>
                  ";
                }

              ?>
              
            </div>
          </fieldset>
          
          <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Edit Buku</button>
        </form>

      <?php

        }
        
        /*Mengecek apabila tombol Tambahkan diklik*/
        if (isset ($_POST['simpan'])) {
           
            /*Menerima dan Menampung data*/
            $id_buku = $_POST['idBuku'];
            $judul_buku = $_POST['judulBuku'];
            $penulis_buku = $_POST['penulis'];
            $jenis_buku = $_POST['jenisBuku'];

            /*Melakukan penyimpanan data ke tabel katalog*/
            $sql=mysqli_query ($koneksi, "UPDATE tb_katalog SET buku_judul='$judul_buku', buku_penulis='$penulis_buku', buku_jenis='$jenis_buku' WHERE buku_id='$id_buku'");

            echo "<br><h5>Data buku berjudul <b><i>".$judul_buku."</b></i> berhasil diubah.</h5>";

            }
        ?>
        <br>
        <a href="index.php"  class="btn btn-primary">Kembali ke Beranda</a>
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