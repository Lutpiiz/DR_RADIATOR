<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (!isset($_SESSION['email_admin'])) {
    header("Location: login.php");
    exit;
}
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>Admin <?php echo "" . $_SESSION['username_admin'] . "" ?></a></li>
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
            <h3>- Edit Barang -</h3>
        </center>
        <?php
        include('config.php');

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql_edit = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
            while ($data = mysqli_fetch_array($sql_edit)) {
                $nama_barang = $data['nama'];
                $jenis_barang = $data['jenis'];
                $deskripsi_barang = $data['deskripsi'];
                $harga_barang = $data['harga'];
                $gambar_barang = $data['gambar'];
            }

        ?>

            <form action="edit-barang.php" method="POST">

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly="readonly">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namabarang" name="nama" value="<?php echo $nama_barang ?>">
                    </div>
                </div>

                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis</legend>
                    <div class="col-sm-10">
                        <?php
                        if ($jenis_barang == 'rad') {
                            echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios1' value='rad' checked>
                                <label class='form-check-label' for='gridRadios1'>
                                Radiator
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios2' value='tank'>
                                <label class='form-check-label' for='gridRadios2'>
                                Tank
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios3' value='sel'>
                                <label class='form-check-label' for='gridRadios3'>
                                Selang
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios4' value='cool'>
                                <label class='form-check-label' for='gridRadios4'>
                                Coolant
                                </label>
                            </div>
                            ";
                        } elseif ($jenis_barang == 'tank') {
                            echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios1' value='rad'>
                                <label class='form-check-label' for='gridRadios1'>
                                Radiator
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios2' value='tank' checked>
                                <label class='form-check-label' for='gridRadios2'>
                                Tank
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios3' value='sel'>
                                <label class='form-check-label' for='gridRadios3'>
                                Selang
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios4' value='cool'>
                                <label class='form-check-label' for='gridRadios4'>
                                Coolant
                                </label>
                            </div>
                            ";
                        } elseif ($jenis_barang == 'sel') {
                            echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios1' value='rad'>
                                <label class='form-check-label' for='gridRadios1'>
                                Radiator
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios2' value='tank'>
                                <label class='form-check-label' for='gridRadios2'>
                                Tank
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios3' value='sel' checked>
                                <label class='form-check-label' for='gridRadios3'>
                                Selang
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios4' value='cool'>
                                <label class='form-check-label' for='gridRadios4'>
                                Coolant
                                </label>
                            </div>
                            ";
                        } elseif ($jenis_barang == 'cool') {
                            echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios1' value='rad'>
                                <label class='form-check-label' for='gridRadios1'>
                                Radiator
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios2' value='tank'>
                                <label class='form-check-label' for='gridRadios2'>
                                Tank
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios3' value='sel'>
                                <label class='form-check-label' for='gridRadios3'>
                                Selang
                                </label>
                            </div>
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='jenis' id='gridRadios4' value='cool' checked>
                                <label class='form-check-label' for='gridRadios4'>
                                Coolant
                                </label>
                            </div>
                            ";
                        }

                        ?>

                    </div>
                </fieldset>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi_barang ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga_barang ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="gambar">
                        <image src='<?php echo "img/" . $gambar_barang ?>'>
                            File terupload: <?php echo $gambar_barang ?>
                    </div>
                </div>



                <button type="submit" class="btn btn-dark" name="simpan" value="Simpan">Edit Barang</button>
            </form>

        <?php

        }

        /*Mengecek apabila tombol Tambahkan diklik*/
        if (isset($_POST['simpan'])) {

            /*Menerima dan Menampung data*/
            $id = $_POST['id'];
            $nama_barang = $_POST['nama'];
            $jenis_barang = $_POST['jenis'];
            $deskripsi_barang = $_POST['deskripsi'];
            $harga_barang = $_POST['harga'];

            /*Melakukan penyimpanan data ke tabel katalog*/
            $sql = mysqli_query($conn, "UPDATE barang SET nama='$nama_barang', jenis='$jenis_barang', deskripsi='$deskripsi_barang', harga='$harga_barang' WHERE id='$id'");

            echo "<br><h5>Data barang <b><i>" . $nama_barang . "</b></i> berhasil diubah.</h5>";
        }
        ?>
        <br>
        <a href="index.php" class="btn btn-warning">Kembali ke Beranda</a>
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