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
                <li><a href="index.php">Daftar Barang</a></li>
                <li><a href="tambah-barang.php" class="active">Tambah Barang</a></li>
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
    <center><h3>- TAMBAH BARANG -</h3></center>
    <br>
    <form action="tambah-barang.php" method="POST" enctype="multipart/form-data">
      <div class="row mb-3">
        <label for="inputBuku" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="namabarang" name="nama">
        </div>
      </div>

      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Jenis</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="gridRadios1" value="rad">
            <label class="form-check-label" for="gridRadios1">
              Radiator
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="gridRadios2" value="tank">
            <label class="form-check-label" for="gridRadios2">
              Tank
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="gridRadios3" value="sel">
            <label class="form-check-label" for="gridRadios2">
              Selang
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="gridRadios4" value="cool">
            <label class="form-check-label" for="gridRadios2">
              Coolant
            </label>
          </div>
        </div>
      </fieldset>

      <div class="row mb-3">
        <label for="inputPenulis" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputPenulis" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="harga" name="harga">
        </div>
      </div>
      
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar Barang</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
      </div>
      <button type="submit" class="btn btn-dark" name="simpan" value="Simpan">Tambahkan</button>
    </form>

    <?php
    /*Mengecek apabila tombol Tambahkan diklik*/
    if (isset ($_POST['simpan'])) {
        include ('config.php');
        /*Menerima dan Menampung data*/
        $nama_barang = $_POST['nama'];
        $jenis_barang = $_POST['jenis'];
        $deskripsi_barang = $_POST['deskripsi'];
        $harga_barang = $_POST['harga'];
        $gambar_barang = basename($_FILES["gambar"]["name"]);

        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Maaf, hanya file berekstensi JPG, JPEG, PNG & GIF yang diperbolehkan untuk diupload. ";
          $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Maaf, file Anda gagal diupload.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "<script>
                    alert('Data berhasil diupload.')
                  </script>";
          } else {
            echo "Maaf, ada error ketika mengupload file Anda.";
          }
        }

        if ($uploadOk == 1) {
          /*Melakukan penyimpanan data*/
          $sql=mysqli_query ($conn, "INSERT INTO barang VALUES (NULL,'$nama_barang','$jenis_barang','$deskripsi_barang','$harga_barang','$gambar_barang')");
        }

        }
    ?>
    <br>
    <a href="index.php"  class="btn btn-warning">Kembali ke Beranda</a>
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