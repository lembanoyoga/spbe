
<link href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">
<?php $this->load->view("layout/header.php") ?>
<style>
   .responsive {
    width: 100%;
  max-width: 400px;
  height: auto;

}
img {
    display: block;
    margin: 0 auto;
}
.parent {
    /* position: absolute; */
    /* left: 100%; */
    display: block;
    margin: 0 auto;
}

    </style>

<!--/ Services Star /-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

<!--/ Services End /-->
<?php 
                          $no=1; 
                        
                          foreach($berita_id as $rows): ?>
                          <br>
                          
 <section class="section-services section-t8">

    <div class="container pr-md-5 pl-md-5 p-2">
    <div class="card" >
          <div class="card-body ">
    <div class="bg-white  white-box" id="print">
            
            <div class="row border-bottom m-0">
                <span>

                                    <a href="<?php echo base_url();?>informasi" class="f-black">Artikel</a>
                                    <i class=" fa fa-chevron-right"></i>

                <a href="#" style="color: blue;"><?php echo $rows->judul_berita ?></a>
                </span>
            </div>
            <br> 
            <div class="row">
                   
            <div class="parent">  <img src="<?php echo base_url($rows->gambar_berita)  ?>" class="responsive center" alt="Gambar"></div>
                          

                      
                                                    <div class="col-12 text-center">
                    <span class="m-2">Sumber ekon.go.id</span>
                </div>
            </div>
            <div class="row m-2">
            <h4 class="f-blue" style="width: 100%;   color: blue;"><?php echo $rows->judul_berita ?></h4>
            <span class="mb-3"><?php echo format_indo(date($rows->tanggal_terbit));?></span>
               <div class="col-12 mt-3 p-0" style="text-align: justify;">
                    <p style="text-align:justify"><?php echo $rows->isi_berita ?></p>


               </div>
            </div>
         
            </div>
        </div>
    </div>
    <?php endforeach; ?>   
</section>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>
<?php $this->load->view("layout/footer.php") ?>