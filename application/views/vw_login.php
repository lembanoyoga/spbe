<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="<?php echo base_url();?>public/garuda.png" rel="icon">


<link rel="stylesheet" href="<?php echo base_url();?>public/template/fonts/icomoon/style.css" type="text/css"/>

<link rel="stylesheet" href="<?php echo base_url();?>public/template/css/owl.carousel.min.css" type="text/css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>public/template/css/bootstrap.min.css" type="text/css">

<!-- Style -->
<link rel="stylesheet" href="<?php echo base_url();?>public/template/css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><title>SPBE - Login</title>
<style>
  .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

</style> 
</head>
  <body>
  
  
  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg"alt="Image"  class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4" align="center"> 
                 <img  src="<?php echo base_url();?>public/garuda.png"  height ="100" alt="Image" >

                  <h2> <strong>Sistem Pemerintahan <br> Berbasis Elektronik </strong></h2>
                  <p class="mb-4">Sign in to start your session</p>
                
                </div>
                <form id  action="<?= base_url("auth/aksi_login") ?>" method="post">
         
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"  required   >
                    
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <!-- <input type="password" class="form-control" id="password" name="password" required> -->
                 
                    <input id="password-field" type="password" class="form-control" name="password"  >
                   <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
              <br>
           
              <?php if(!empty($this->session->flashdata('message_login_error'))){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?= $this->session->flashdata('message_login_error');?>
                    </div>
                    <?php }?>

                  <input type="submit"  class="btn btn-pill text-white btn-block btn-primary">

                 
          </form>
        
              </div>
            </div>
          </div>
          </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

</script>
    <script src="<?php echo base_url();?>public/template/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>public/template/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>public/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/template/js/main.js"></script>
<script>
  $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
  </script>
  </body>
</html>