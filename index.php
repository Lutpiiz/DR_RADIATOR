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
              <li><a href="index.php" class="active">Home</a></li>
              <li><a href="sparepart.php">Sparepart</a></li>
              <li><a href="jasa.php">Layanan</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="logout.php"></i>Logout</a></li>
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

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Perawatan, <em>Yang Bermutu</em></span>

        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Perbaikan Secara, <em>Detail</em></span>

        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Penggatian, <em>Radiator</em></span>

        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/featured.jpg" alt="">
            <a href="jasa.php"><i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #ffffff;"></i></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Featured</h6>
            <h2>Jasa Terbaik</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Bagaimana Kami Bekerja?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami di <b>DR. RADIATOR</b> memulai setiap pekerjaan dengan pendekatan terstruktur yang berfokus pada keakuratan dan ketelitian. Tim terlatih kami memulai dengan analisis menyeluruh terhadap sistem radiator mobil Anda. Kami mengutamakan tahap pemeriksaan yang cermat untuk mengidentifikasi dengan tepat setiap masalah yang mungkin terjadi. Setelah diagnosis, kami mengambil langkah-langkah yang tepat untuk melakukan perbaikan, pembersihan, atau penggantian dengan menggunakan teknologi terkini dan prosedur terbaik dalam industri ini.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apa alat yang kami gunakan?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dalam setiap langkah perbaikan, kami mengandalkan alat-alat khusus yang dirancang untuk menangani sistem radiator. Dari alat pengukur tekanan hingga peralatan pembersih khusus, kami memiliki koleksi alat yang lengkap dan canggih untuk menjamin bahwa setiap tindakan yang kami lakukan memberikan hasil yang presisi dan optimal. Penggunaan teknologi terdepan dalam peralatan kami memastikan bahwa proses perbaikan, pembersihan, dan penggantian dilakukan dengan efisiensi dan tingkat akurasi yang tinggi.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Bagaimana pengalaman kami?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dengan pengalaman yang luas dalam industri ini, kami telah menghadapi dan menangani berbagai macam radiator dan masalah yang mungkin timbul. Kami telah memberikan layanan berkualitas tinggi kepada pelanggan selama bertahun-tahun, membangun reputasi atas kehandalan, kecepatan, dan keahlian dalam menangani beragam situasi terkait radiator mobil. Pengalaman kami yang mendalam menjadi landasan yang kokoh untuk memberikan solusi yang terbaik dan pelayanan yang memuaskan kepada setiap pelanggan kami.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.svg" alt="" style="max-width: 40px;">
                <h4>20++<br><span>Merek Ternama</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.svg" alt="" style="max-width: 40px;">
                <h4>Contract<br><span>Berbagai Perusahaan</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.svg" alt="" style="max-width: 40px;">
                <h4>Professional<br><span>Teknisi Terbaik</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.svg" alt="" style="max-width: 40px;">
                <h4>Shop<br><span>Online / Offline</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Bagaimana Kami Bekerja</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/service-radiator.jpg" alt="">
            <a href="https://www.youtube.com/watch?v=MH1HfzGTXWo" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="100" data-speed="1000"></h2>
                  <p class="count-text ">Cars<br>Repaired</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Years<br>Experience</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="8" data-speed="1000"></h2>
                  <p class="count-text ">Awwards<br>Won 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| MOST BEST OF US</h6>
            <h2>Temukan Harga Terbaik Sekarang</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Sparepart</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Layanan</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Mekanik</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Merek <span>Koyorad</span></li>
                          <li>Aplikasi <span>Semua Mobil</span></li>
                          <li>Ukuran <span>40x50 cm</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/KOYORAD1radiator.jpg" alt="" width="300px" height="350px">
                    </div>
                    <div class="col-lg-3">
                      <h4>Deskripsi tambahan</h4>
                      <p>Produk yang memiliki brand KOYORAD ini sudah tidak diragukan lagi akan
                        kualitasnya, karena menggunakan alumunium kelas tertinggi untuk memberikan fungsi yang optimal untuk mobil.
                        <br><br>Brand yang berasal dari negeri sakura ini tidak perlu di ragukan lagi karena sudah teruji di berbagai ajang balap internasional.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Nama <span>Korok Radiator</span></li>
                          <li>Aplikasi <span>Semua mobil</span></li>
                          <li>Pengerjaan <span>1 Hari</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/korok radiator.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Deskripsi tambahan</h4>
                      <p>Korok radiator yang ada di bengkel kami di lakukan oleh mekanik yang andalan dan tidak perlu
                        di ragukan lagi karena sudah berpengalaman mengerjakan ratusan radiator.<br><br>Harga memang sebanding dengan kualitas, namun
                        di bengkel kami dengan harga yang cukup murah ada juga jaminan satu hari jadi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Nama <span>Dalijo nikolas</span></li>
                          <li>Usia <span>34th</span></li>
                          <li>Pengalaman <span>10 Tahun</span></li>
                          <li>Spesialis <span>Korok radiator</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="assets/images/mekanikdlj.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Deskripsi tambahan</h4>
                      <p>Mekanik DR.RADIATOR yang berdarah jawa kental ini sudah menjadi andalan
                        bengkel kami sejak pertamakali bengkel kami buka tahun 2012. <br><br>Berbagai masalah sudah mekanik alami
                        sehingga tidak perlu diragukan lagi akan kepiawaiannya dalam mengerjakan korok radiator.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h6>| Sparepart</h6>
            <h2>Kita Selalu Menyediakan Sparepart Yang Berkualitas Dan Original</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/PEAK coolant.png" alt=""></a>
            <span class="category">Air Coolant</span>
            <h6>Rp.240.000</h6>
            <h4>PEAK</h4>
            <ul>
              <li>Isi <span>5 liter</span></li>
              <li>Aplikasi <span>All</span></li>
              <li>Warna <span>Biru</span></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/MOBIL coolant.png" alt="" width="300px" height="350px"></a>
            <span class="category">Air coolant</span>
            <h6>Rp.180.000</h6></a>
            <h4>Mobil</h4>
            <ul>
              <li>Isi <span>5 liter</span></li>
              <li>Aplikasi <span>All</span></li>
              <li>Warna <span>Merah</span></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/SAMCO selang.jpg" alt="" width="300px" height="350px"></a>
            <span class="category">Selang</span>
            <h6>Rp.100.000</h6>
            <h4>SAMCO</h4>
            <ul>
              <li>Barang <span>Full Set</span></li>
              <li>Aplikasi <span>All</span></li>
              <li>Warna <span>Biru</span></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/tank01.jpg" alt="" height="350px"></a>
            <span class="category">Upper Tank</span>
            <h6>Rp.584.500</h6>
            <h4><a href="property-details.html">For Avanza Xenia</a></h4>
            <ul>
              <li>Aplikasi <span>Avanza Xenia</span></li>
              <li>Warna <span>Hitam</span></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/TERMOSTAT.jpg" alt="" height="350px"></a>
            <span class="category">Termostat</span>
            <h6>Rp.125.600</h6>
            <h4><a href="property-details.html">No Brand</a></h4>
            <ul>
              <li>Aplikasi <span>All</span></li>
            </ul>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/tank02.jpg" alt="" height="350px"></a>
            <span class="category">Lower Tank</span>
            <h6>RP.450.000</h6>
            <h4><a href="property-details.html">Toyota</a></h4>
            <ul>
              <li>Aplikasi <span>Avanza & Xenia</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Contact Us</h6>
            <h2>Bersama Kami Radiatormu Teratasi!</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.710717395191!2d110.2249097745528!3d-7.714156976423388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af397575799bd%3A0x146e32cec6af039a!2sBengkel%20radiator%20MJP%20%7C%20PUTRA%20GD!5e0!3m2!1sid!2sid!4v1702563004571!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>+6285358552436<br><span>Whatsapp</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>dr.radiator@gmail.com<br><span>Email Bisnis</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="#" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="button" id="form-submit" class="orange-button" onclick="sendMessage()">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>

        <script>
          function sendMessage() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;

            // Replace <your_phone_number> with your actual WhatsApp number
            var phoneNumber = '+6285802705913';
            var whatsappMessage = 'Name: ' + name + '\nEmail: ' + email + '\nSubject: ' + subject + '\nMessage: ' + message;

            // Generate the WhatsApp link
            var whatsappLink = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(whatsappMessage);

            // Open the link in a new tab
            window.open(whatsappLink, '_blank');

            // Reset the form after sending the message
            document.getElementById('contact-form').reset();
          }
        </script>

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