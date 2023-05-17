<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin SPBE</title>
  <link href="<?php echo base_url();?>public/garuda.png" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"  href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>public/t_dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet"   href="<?php echo base_url();?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css"
>
  <!-- JQVMap -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
>
  <!-- Daterange picker -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/plugins/daterangepicker/daterangepicker.css"
>
  <!-- summernote -->
  <link rel="stylesheet"   href="<?php echo base_url();?>public/t_dashboard/plugins/summernote/summernote-bs4.min.css"
>
<style>
 
  .active, .a:hover {
  background-color: #666;
  color: white;
}

  </style>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url();?>public/garuda.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <!-- Navbar Link Menus -->
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


    </ul>
  </nav> 
  <!-- /.navbar -->
  <?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: auth");
}
?>
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- <div class="sidebar"> -->
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->

    <!-- <div class="w3-card-4"> -->

        <!-- Foto User -->
        <!-- <img src="<?php echo base_url();?>public/ekon.png" width="242" alt="User Image"> -->
   
        <!-- <img src="<?php echo base_url();?>public/t_dashboard/dist/img/spbe2.jpg" height="95" width="242" alt="User Image"> -->
        <!-- </div> -->
    <!-- </div> -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- Foto User -->
        <img src="<?php echo base_url();?>public/t_dashboard/dist/img/user.png"
class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <!-- Nama User -->

        <?php
        echo " <a href='#' class='d-block'> Hello <b id='welcome'><i>" . $username . "</i> !</b>";
 ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->
          <!-- Closed -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


        <!-- <li class="nav-item menu-open"> -->
        <li class="nav-item">
          <!-- <a href="#" class="nav-link active"> -->
          <a href="<?php echo base_url();?>dashboard" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas "></i>
            </p>
          </a>
         
        </li>
        <!-- <li class="nav-item">
          <a href="<?php echo base_url();?>dashboard/manajemen_web" class="nav-link">
            <i class="nav-icon fas  fa-globe"></i>
            <p>
          Manajemen WEB
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url();?>dashboard/manajemen_users" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <!-- <i class="fa-sharp fa-solid fa-truck-field"></i> -->
            <p>
           Manajemen User
              <!-- <i class="fas fa-angle-left right"></i> -->
              <!-- <span class="badge badge-info right">6</span> -->
            </p>
          </a>
          <!-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation + Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Boxed</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar <small>+ Custom Area</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-topnav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Navbar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-footer.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Footer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collapsed Sidebar</p>
              </a>
            </li>
          </ul> -->
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url();?>dashboard/manajemen_indeks" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
         Manajemen Indeks
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
  
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url();?>dashboard/manajemen_berita" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
           Manajemen Berita
              <!-- <i class="fas fa-angle-left right"></i> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url();?>dashboard/manajemen_materi" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
           Manajemen Materi
              <!-- <i class="fas fa-angle-left right"></i> -->
            </p>
          </a>
        </li>
      
      <li class="nav-item">
        <a href="<?php echo base_url();?>auth/logout" class="nav-link">
       
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
      Logout
            <!-- <i class="fas fa-angle-left right"></i> -->
          </p>
        </a>
      </li>

    
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- jQuery -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>public/t_dashboard/ns/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>public/t_dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>public/t_dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>public/t_dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>public/t_dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>public/t_dashboard/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>public/t_dashboard/dist/js/pages/dashboard.js"></script>
<!-- <script>
$('ul.nav nav-link').click(function(){   
  $('ul.nav > nav-link').removeClass('active');
  $(this).addClass('active');
});
  </script> -->

 <script>
$(function($) {
  let url = window.location.href;
  $('li a').each(function() {
    if (this.href === url) {
      $(this).closest('li').addClass('active');
    }
  });
});
</script>
 
</body>
</html>

