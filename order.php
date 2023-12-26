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
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i><?php echo "".$_SESSION['username']."" ?></a></li>
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
        <center>
            <h3 class="mt-4 mb-3">- DETAIL PESANAN -</h3>
        </center>

        <?php
        include('config.php');

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql_edit = mysqli_query($config, "SELECT * FROM barang WHERE id='$id'");
            while ($data = mysqli_fetch_array($sql_edit)) {
                $nama_barang = $data['nama'];
                $jenis_barang = $data['jenis'];
                $deskripsi_barang = $data['deskripsi'];
                $harga_barang = $data['harga'];
                $gambar_barang = $data['gambar'];
            }
        }
        ?>

        <br>
        <form action="order.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputBuku" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namabarang" name="nama" value="<?php echo "" . $_SESSION['username'] . "" ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPenulis" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo "" . $_SESSION['telepon'] . "" ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPenulis" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo "" . $_SESSION['email'] . "" ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPenulis" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPenulis" class="col-sm-2 col-form-label">Pembelian</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="beli" name="beli" value="<?php echo $nama_barang ?>" readonly>
                    <div class="gambar">
                        <img src="admin/img/<?php echo $gambar_barang ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPenulis" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga_barang ?>" readonly>
                </div>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Pembayaran</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_bayar" id="gridRadios1" value="transfer bank">
                        <label class="form-check-label" for="gridRadios1">
                            Transfer Bank
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_bayar" id="gridRadios2" value="mobile banking">
                        <label class="form-check-label" for="gridRadios2">
                            Mobile Banking
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_bayar" id="gridRadios3" value="e-wallet">
                        <label class="form-check-label" for="gridRadios3">
                            E-Wallet
                        </label>
                    </div>
                </div>
            </fieldset>

            <center>
                <button type="submit" class="btn btn-dark" name="simpan" value="Simpan">Pesan Sekarang</button>
                <a href="sparepart.php" class="btn btn-warning ms-3">Batal</a>
            </center>

        </form>

        <?php
        if (isset($_POST['simpan'])) {
            include('config.php');

            $nama_pembeli = $_POST['nama'];
            $no_telepon = $_POST['telepon'];
            $email = $_POST['email'];
            $pembelian = $_POST['beli'];
            $alamat = $_POST['alamat'];
            $jenis_bayar = $_POST['jenis_bayar'];

            $sql = mysqli_query($config, "INSERT INTO pesanan VALUES (NULL,'$nama_pembeli','$no_telepon','$email','$pembelian','$alamat','$jenis_bayar')");

            echo "<script>
            alert('Pesanan sukses')
            window.location.href = 'sparepart.php'
            </script>";
            
        }
        ?>
        <br>

    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2023 dr.Radiator Co., Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>