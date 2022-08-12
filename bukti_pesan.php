<?php
  include "includes/koneksi.php";
  include "includes/timezone.php";
  $id      = $_GET['id'];
  $jkamar  = $_GET['jk'];
  $nama    = $_GET['nama']; 
  $email   = $_GET['email'];
  $checkin= $_GET['tm'];
  $checkout= $_GET['tk'];

  $sql = "SELECT nama_kamar FROM tb_kamar WHERE id_kamar=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $nama_kamar= $row["nama_kamar"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo "Hotel Mas Pian - ".$nama; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="hotel.png" />
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet">
  <link href="css/style_bukti_pesan.css" rel="stylesheet">

  
  <link href="img/favicon.ico" rel="icon">
  <!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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

    <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
    <div class="container-fluid">
    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-warning me-2"></i>HOTEL MAS PIAN</h1>
    <div class="text-right">
            <a href="index.php?" class="btn btn-primary"><i class="fa fa-print"></i>Kembali</a>
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Print as PDF</button>
        </div>
      </div>
    </div>
  </nav>

<div id="invoice">
    <div class="invoice overflow-auto bg-dark">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="" href="">
                        <p class="bi bi-building text-warning" alt="" width="100" height="100"></p>
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="">
                            Hotel Mas Pian
                            </a>
                        </h2>
                        <div>jln Wibu, Solo, Jawa Tengah</div>
                        <div>+62 88 888 888</div>
                        <div>hotelmaspian@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <h2 class="to"> <?php echo $nama; ?> </h2>
                        <div class="address">jln Wibu, Solo, Jawa Tengah</div>
                        <div class="email"><a href="mailto:<?php echo $email ?> "><?php echo $email ?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id text-primary">Pemesanan</h1>
                        <div class="date">Date: <?php echo date("F j, Y, g:i a"); ?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left"> KAMAR</th>
                            <th class="text-center">CHECK IN</th>
                            <th class="text-center">CHECK OUT</th>
                            <th class="text-center">JUMLAH KAMAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h2>
                                <?php echo $nama_kamar; ?>
                                </a>
                                </h2>
                               
                                   Sangat nyaman
                               </a> 
                               untuk istirahat beberapa hari kedepan serta membuat anda dapat berpikir </br>untuk rencana kedepan.
                            </td>
                            <td class="unit text-center"><?php echo $checkin ?></td>
                            <td class="qty text-center"><?php echo $checkout ?></td>
                            <td class="total text-center"> <?php echo $jkamar;?> </td>
                        </tr>                    
                    </tfoot>
                </table>
                <div class="mt-4 mb-2">Terima Kasih!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">Pastikan berada di hotel kami 30 menit sebelum check in.</div>
                </div>
            </main>
            <footer>
                Bukti pemesanan kamar Hotel Mas Pian  jln Wibu - Solo - Jawa Tengah
            </footer>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  </nav>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

<!-- PANGGIL FILE JAVASCRIPT DARI FOLDER js -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap5.0.1.bundle.min.js"></script>

<script>
$(document).ready(function(){
  $('#printInvoice').click(function(){
    window.print();
        }); 
    });   
</script>

</body>
</html>

