<?php
include "includes/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>WELCOME - HOTEL MAS PIAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="hotel.png" />
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet">



  <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Hotel Mas Pian</h6>
                        <span>jln Wibu, Solo, Jawa Tengah</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>hotelmaspian@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Call Us</h6>
                        <span>+62 88 888 888</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!------------------------------ISI BODY----------------------------- -->

  <!------------------AWAL BAGIAN HEADER----------------- -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
    <div class="container-fluid">
    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>HOTEL MAS PIAN</h1>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <h5><a class="nav-link" href="">Home</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="#" id="tombol_kamar">Kamar</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="#" id="tombol_fasilitas">Fasilitas</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="login.php" id="tombol_login">Login</a></h5>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/hotel-home-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Make Better Night With Us</h1>
                            <a href="reservasi.php" id="tombol_pesan" class="btn btn-primary py-md-3 px-md-5 mt-2">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2" id="panel_fasilitas_kami">
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Fasilitas</h1>
        </div>

    <!-- Mulai Script Panggil SlideShow Dari Tabel Fasilitas Umum menggunakan PHP -->
    <div class="row">
    <?php
    $aktif = "active";
    $sql = "SELECT * FROM tb_fasilitas_umum ORDER BY id DESC LIMIT 9";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      //membaca data pada baris tabel
      while ($row = $result->fetch_assoc()) {
        $nf = $row["nama_fasilitas"];
        $gambar = $row["gambar"];
        $ket = $row["keterangan"];
    ?>


            <div class="col-lg-4 col-md-6 center">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                <img class="img-fluid" max-width: 100%; height: auto; src="<?php echo $gambar; ?>" alt="Gambar">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                    <h5><?php echo $nf; ?></h5>
                    <h5 class="text-primary"><?php echo $ket; ?></h5>            
                  </div>
        </div>
    </div>


    <?php
      }
    }
    ?>
  </div>
    </div>
    </div>


  <div class="container mt-2 col-sm-7" id="panel_kamar">
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Kamar</h1>
        </div>

    <!-- SCRIPT KAMAR -->
        <div class="row">
      <!-- Mulai Script Panggil SlideShow Dari Tabel Fasilitas Umum menggunakan PHP -->
      <?php
      $sql = "SELECT * FROM tb_fasilitas_kamar ORDER BY id DESC LIMIT 15";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        //membaca data pada baris tabel
        while ($row = $result->fetch_assoc()) {
          $idk = $row["id_kamar"];
          $gambar = $row["gambar"];
          $fas = $row["fasilitas"];

          $sql2    = "SELECT nama_kamar FROM tb_kamar WHERE id_kamar= '$idk'";
          $result2 = $conn->query($sql2);
          $row2    = $result2->fetch_assoc();
      ?>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                <img class="img-fluid" src="<?php echo $gambar; ?>" alt="Card image">                    
                <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                    <h5 class="card-title"><?php echo $row2["nama_kamar"]; ?> :</h5>
                    <li><?php echo $fas; ?></li>
                    </div>
                </div>
            </div>
    
      <?php
        }
      }
      ?>
      </div>
    </div>
  </div>
    </div>




    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>HOTEL MAS PIAN</h1>
                </a>
                <p><i class="fa fa-map-marker-alt me-2"></i>jln Wibu, Solo, jawa Tengah</p>
                <p><i class="fa fa-phone-alt me-2"></i>+62 88 888 888</p>
                <p><i class="fa fa-envelope me-2"></i>hotelmaspian@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Fasilitas</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Kamar</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 20px 30px;" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Hotel Mas Pian</a></p>
            </div>
        </div>
    </div>


    

  <!------------------AKHIR BAGIAN HEADER----------------- -->

  <!------------------------------AWAL BAGIAN NAVBAR(MENU)----------------------------- -->
  


      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- PANGGIL FILE JAVASCRIPT DARI FOLDER js -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap5.0.1.bundle.min.js"></script>
  <script src="crud_js/pesan.js"></script>

  <!------------------------------ AWAL KONDISI CODING JAVASCRIPT-------------------------------- -->
  <script>
    $(document).ready(function() {

      /KONDISI SAAT WEBSITE DIJALANKAN PERTAMA KALI/
      $('#panel_fasilitas_kami').hide();
      $('#panel_kamar').hide();


      /KONDISI TOMBOL FASILITAS SAAT DI KLIK/
      $("#tombol_fasilitas").click(function() {
        $('#panel_fasilitas_kami').show();
        $('#panel_kamar').hide();

      });
      /KONDISI TOMBOL KAMAR SAAT DI KLIK/
      $("#tombol_kamar").click(function() {
        $('#panel_kamar').show();
        $('#panel_fasilitas_kami').hide();
      });

    });
  </script>
  <!------------------------------ AWAL KONDISI CODING JAVASCRIPT-------------------------------- -->

</body>
<!-- END BODY -->

</html>