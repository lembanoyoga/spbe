
<?php $this->load->view("layout/header.php") ?>

<style>
h2 {text-align: center;}


/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 0 0;
}

</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--/ Services Star /-->



<section class="section-services section-t8">
<div class="container">
<div class="row-fluid ">
<?php 
                          $no=1; 
                        
                          foreach($berita as $rows): ?>
  <!-- <div class="container">
    <div class="row"> -->
      <div class="col-md-14">
        <div class="title-wrap d-flex justify-content-between">
      
    <!-- <div class="row"> -->
            
            <!--berita akan ditampilkan disini menggunakan card bootstrap-->
          
            <div class="card-columns-fluid">
                          
                <div class="card-box-c foo">
                <div class="col-md-14">
                  
                <br>
              
                    <div class="card">
                 
                        <img src="<?php echo $rows->gambar_berita?>" height="200px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $rows->judul_berita ?></h6>
                            <p class="card-text"><?php echo $rows->isi_berita ?></p>
                            <a href="asfasf" class="btn btn-primary">Lihat Detail</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Dibuat pada: <?php echo $rows->tanggal_terbit ?></small>
                        </div>
                 
                      </div>
                 
                    </div>
             
      
                    </div>
                  
            </div>
      
          <!-- penempatan kebawah -->
     
        </div>
     
      </div>
 
          
       
            <?php endforeach; ?> 
                          </div>
                          </div>
  
  </div>
</section>



<!--/ Services End /-->


<?php $this->load->view("layout/footer.php") ?>

