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





  <div class="container mt-4 col-sm-8" id="panel_pemesanan">
    <div class="card d-flex justify-content-center">
      <div class="card-body bg-primary">
        <div class="row bg-primary text-dark">
          <h4>Form Pemesanan</h4>
          <p>Silahkan memasukan data pada form ini untuk memulai pemesanan!</p>
        </div>
        <div class="row bg-dark">
          <form id="form_pesan">
          <div class="row">
          <div class="col-sm form-floating mb-3 mt-3">
            <input type="date" class="form-control" id="masuk" name="masuk">
            <label for="masuk">Check In</label>
          </div>
          <div class="col-sm form-floating mb-3 mt-3">
            <input type="date" class="form-control" id="keluar" name="keluar">
            <label for="keluar"> Check Out</label>
          </div>
          <div class="col-sm form-floating mb-3 mt-3">
            <input type="number" class="form-control" id="jkamar" name="jkamar">
            <label for="jkamar">Jumlah Kamar</label>
          </div>
        </div>
            <div class="form-floating mb-2 mt-3">
              <input type="text" class="form-control" id="nama" name="nama">
              <label for="nama">Nama Pemesanan</label>
            </div>
            <div class="form-floating mt-2 mb-2">
              <input type="email" class="form-control" id="email" name="email">
              <label for="pwd">Email</label>
            </div>
            <div class="form-floating mt-2 mb-2">
              <input type="text" class="form-control" id="hp" name="hp">
              <label for="hp">No. Telepon</label>
            </div>
            <div class="form-floating mt-2 mb-2">
              <input type="text" class="form-control" id="tamu" name="tamu">
              <label for="tamu">Nama Tamu</label>
            </div>
            <div class="form-floating mt-2 mb-2">
              <select class="form-select mt-3" id="idkamar" name="idkamar">
                        </div>
                    </div>
                </div>
 
                <?php
                $sql = "SELECT * FROM tb_kamar";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  //membaca data pada baris tabel
                  while ($row = $result->fetch_assoc()) {
                ?>
                    <option value="<?php echo $row["id_kamar"]; ?>"> <?php echo $row["nama_kamar"]; ?> </option>
                <?php
                  }
                }
                ?>
              </select>
              <label for="idkamar">Tipe Kamar</label>
            </div>
            <div class="mt-3 mb-3">
              <button type="button" id="konfirmasi" class="btn btn-outline-success">Konfirmasi Pemesanan</button>
              <button type="button" id="tombol_batal" class="btn btn-outline-danger">Batal</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <br>


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