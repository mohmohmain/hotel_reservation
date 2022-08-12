<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin - Hotel Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../hotel.png" />
  <link href="../css/bootstrap5.0.1.min.css" rel="stylesheet">

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


  <!------------------------------ISI BODY----------------------------- -->

  <!------------------AWAL BAGIAN HEADER----------------- -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
    <div class="container-fluid">
    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>ADMIN</h1>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <h5><a class="nav-link" href="../index.php">Logout</a></h5>
          </li>
          <li class="nav-item">
             <h5><a class="nav-link" href="#" id="tombol_kamar">Kamar</a></h5> 
          </li>
          <li class="nav-item">
              <h5><a class="nav-link" href="#" id="tombol_fasilitas">Fasilitas Kamar</a></h5> 
          </li>
          <li class="nav-item">
              <h5><a class="nav-link" href="#" id="tombol_fasilitas_umum">Fasilitas Umum</a></h5>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-------- PANGGIL DATA KAMAR, FASILITAS DAN FASILITAS UMUM ------>
<div id="data"> 
   
</div>

<!-- SCRIPT FOOTER -->
<div class="mt-5 p-2 bg-dark text-white text-center">
  <p>Mas Pian</p>
</div>

<!-- SCRIPT JAVASCRIPT -->
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
<script type="text/javascript">
$(document).ready(function(){

 if (window.location.href.indexOf('index.php?id=fasilitas_kamar') > -1) {
   load_fasilitas_kamar();
 } else
 if (window.location.href.indexOf('index.php?id=fasilitas_umum') > -1) {
   load_fasilitas_umum();
 } else
 if ( (window.location.href.indexOf('index.php?id=kamar') > -1) ||
     (window.location.href.indexOf('/') > -1) ) {
 load_kamar();
 }

  /*tombol tambah(+) fasilitas*/
    $("#add_fasilitas").click(function() {
    $("#modal_tambah_fasilitas").modal('show');
  });

  /*tombol tambah(+) fasilitas umum*/
    $("#add_fasilitas_umum").click(function() {
    $("#modal_tambah_fasilitas_umum").modal('show');
  });
  
  /*Saat klik tombol Menu Kamar*/
    $("#tombol_kamar").click(function() {
    load_kamar();
  });

  /*Saat klik tombol Menu Fasilitas kamar*/
  $("#tombol_fasilitas").click(function() {
    load_fasilitas_kamar();
  });

  /*Saat klik tombol Menu Fasilitas Umum*/
  $("#tombol_fasilitas_umum").click(function() {
    load_fasilitas_umum();
  });
    
   $("#show_kamar").click(function() {
   $("#lihat_data_kamar").modal("show");
   });

   $("#show_fasilitas").click(function() {
   $("#lihat_data_fasilitas").modal("show");
   });

   $("#show_fasilitas_umum").click(function() {
   $("#lihat_data_fasilitas_umum").modal("show");
   });


function load_kamar() 
{
 var id=0;
 $.ajax({
    url: "proses/load_kamar.php",
    method: "POST",
    data:{ids:id},
         success: function(data)
         {
           //alert(data);return;
           $("#data").html(data).refresh;
         }
       });
 }

function load_fasilitas_kamar() 
{
 var id=0;
 $.ajax({
    url: "proses/load_fasilitas.php",
    method: "POST",
    data:{ids:id},
         success: function(data)
         {
           //alert(data);return;
           $("#data").html(data).refresh;
         }
       });
 }

function load_fasilitas_umum() 
{
 var id=0;
 $.ajax({
    url: "proses/load_fasilitas_umum.php",
    method: "POST",
    data:{ids:id},
         success: function(data)
         {
           //alert(data);return;
           $("#data").html(data).refresh;
         }
       });
 }

});
</script>

<!-- END BODY -->

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
</body>
</html>
