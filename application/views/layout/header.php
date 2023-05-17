<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SPBE - Kemenko</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->

  <link href="<?php echo base_url();?>public/garuda.png" rel="icon">
  <link href="<?php echo base_url();?>public/t_home/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>public/t_home/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>public/t_home/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>public/t_home/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/t_home/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/t_home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">


  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<style>
 .nav-link.active {
  color: #000000;
}
  </style>
<body>

  <!--/ Form Search Star /-->
  <div class="click-closed"></div>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="true" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      
        
      </button>
      <img class="navbar-brand text-brand" src="<?php echo base_url();?>/public/ekon.png"  height ="90"alt="" >
     
      <!-- <a class="navbar-brand text-brand" href="<?php echo base_url();?>home" >          
SPBE <br> Kementerian Koordinator <br> Bidang Perekonomian<span class="color-b"> </span></a> -->

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>home">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Domain SPBE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url('kebijakan'); ?>">Kebijakan SPBE</a>
              <a class="dropdown-item" href="<?= base_url('tatakelola'); ?>">Tata Kelola SPBE</a>
              <a class="dropdown-item" href="<?= base_url('manajemen'); ?>">Manajemen SPBE</a>
              <a class="dropdown-item" href="<?php echo base_url();?>layanan">Layanan SPBE</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>informasi">Artikel SPBE</a>
          </li>
       
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
            Tentang SPBE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url();?>dokumen">Materi SPBE</a>
              <!-- <a class="dropdown-item" href="<?php echo base_url();?>spbe">Apa Itu SPBE?</a> -->
              <a class="dropdown-item" href="<?php echo base_url();?>visi">Visi dan Misi</a>
              <a class="dropdown-item" href="<?php echo base_url();?>tujuan">Tujuan dan Sasaran</a>
             
              <a class="dropdown-item" href="<?php echo base_url();?>regulasi">Regulasi</a>
              <!-- <a class="dropdown-item" href="agents-grid.html">SOP</a> -->
              <!-- <a class="dropdown-item" href="agent-single.html">Agenda</a> -->
     
       
            </div>
          </li>
        
        </ul>
   
     
    </div>

    </div>
  </nav>
  <!--/ Nav End /-->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>public/t_home/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>public/t_home/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url();?>public/t_home/lib/popper/popper.min.js"></script>
  <script src="<?php echo base_url();?>public/t_home/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>public/t_home/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>public/t_home/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>public/t_home/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>public/t_home/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url();?>public/t_home/js/main.js"></script>
  <script>
    // var location = window.location.href;
    $(function($) {
  let url = window.location.href;
  $('li a').each(function() {
    if (this.href === url) {
      $(this).closest('li').addClass('active');
      $(this).closest('.dropdown-item').addClass('active');
    }
  });
});
 </script>
</body>
</html>
