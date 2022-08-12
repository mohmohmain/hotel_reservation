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

 <!-- Template CSS -->
 <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">

</head>

 
<body background="img/hotel-home-1.png">

<div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 text-white">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold text-white">Hotel Mas Pian</h6>
                        <span>jln Wibu, Solo, Jawa Tengah</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold text-white">Email Us</h6>
                        <span>hotelmaspian@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold text-white">Call Us</h6>
                        <span>+62 88 888 888</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!------------------------------ISI BODY----------------------------- -->

  <!------------------AWAL BAGIAN HEADER----------------- -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
    <div class="container-fluid">
    <h1 class="m-0 display-4 text-uppercase text-warning"><i class="bi bi-building text-primary me-2"></i>HOTEL MAS PIAN</h1>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <h5><a class="nav-link text-warning" href="index.php">Home</a></h5>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="panel_login">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary bg-secondary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body text-dark">
                <form  action="" method="post">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>

                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="login">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
  <br>
  <br>
  
      <?php
      if (isset($_POST["login"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // menyeleksi data user dengan username dan password yang sesuai
        $login = mysqli_query($conn, "SELECT * FROM tb_user where username='$username' and password='$password'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($login);

        // cek apakah username dan password di temukan pada database
        if ($cek > 0) {

          $data = mysqli_fetch_assoc($login);

          // cek jika user login sebagai admin
          if ($data['tipe'] == "admin") {

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['tipe'] = "admin";
            // alihkan ke halaman dashboard admin
            echo "<script>window.location.href = 'admin';</script>";

            // cek jika user login sebagai pegawai
          } else if ($data['tipe'] == "resepsionis") {
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['tipe'] = "resepsionis";
            // alihkan ke halaman dashboard pegawai
            echo "<script>window.location.href = 'resepsionis';</script>";

            // cek jika user login sebagai pengurus
          } else {
            // alihkan ke halaman login kembali
            echo "<script>window.location.href = '';</script>";
          }
        } else {
          echo "<script>window.location.href = '';</script>";
        }
      }
      ?>
    </form>
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
  <!------------------------------AKHIR BAGIAN NAVBAR(MENU)----------------------------- -->


  <!------------------------------AWAL BAGIAN CAROUSEL(SLIDESHOW)----------------------------- -->
  <!------------------------------AKHIR BAGIAN CAROUSEL(SLIDESHOW)----------------------------- -->

  <!-- SCRIPT TOMBOL PESAN SEKARANG -->


  <!-- SCRIPT CHECK IN, CHECK OUT, JUMLAH KAMAR -->


  <!-- SCRIPT FASILITAS -->
  <!-- SCRIPT LOGIN -->
  <!-- SCRIPT KAMAR -->
  <!-- SCRIPT TEANTANG KAMI -->
  <!-- SCRIPT FOOTER -->
  <!-- PANGGIL FILE JAVASCRIPT DARI FOLDER js -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap5.0.1.bundle.min.js"></script>
  <script src="crud_js/pesan.js"></script>

  <!------------------------------ AWAL KONDISI CODING JAVASCRIPT-------------------------------- -->

  <!------------------------------ AWAL KONDISI CODING JAVASCRIPT-------------------------------- -->

</body>
<!-- END BODY -->

</html>