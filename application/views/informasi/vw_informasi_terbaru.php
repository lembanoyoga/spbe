
<link href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">
<?php $this->load->view("layout/header.php") ?>
<style>
    p {
  text-align: justify;
  /* font-family: 'Roboto', sans-serif; */
}
    </style>
<!-- <style>
    .actives:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
    </style> -->

<!--/ Services Star /-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">

        </div>
      </div>
    </div>
    <div class="row">
            <div class="col-md-14">
              <!-- <h2>Informasi Berita</h2> -->
            </div>
            <div class="col-md-14">
            <section class="section" id="articles" style="padding-top: 10px !important;">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title mb-4">Artikel SPBE</h4>
                <p class="text-muted para-desc mx-auto mb-0">Artikel yang memuat informasi seputar perkembangan <span class="text-primary font-weight-bold">Sistem Pemerintahan Berbasis Elektronik</span> di Kementerian Koordinator Bidang Perekonomian.</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->
<!--     
    <form class="rounded mt-4 bg-white">
        <div class="row text-left">
            <div class="col-lg-7 col-md-8">
                <div class="form-group mb-0">
                    <input type="text" wire:model="search" class="form-control" required="" placeholder="Cari artikel...">
                </div>
            </div>end col-->

            <div class="col-lg-5 col-md-4">
                <div class="row align-items-center">
                    <div class="col-md-8 mt-4 mt-sm-0">
                       
                    </div><!--end col-->

                  
                </div><!--end row-->
            </div> <!---end col-->
        </div><!--end row-->
    </form>
    <div class="row">

        <div class="col-12">
        <div class="card" >
          <div class="card-body ">
            <div class="table-responsive    mt-4">
                <table class="table mb-0 table-center"  id="tabeluser">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" style="min-width: 300px;">Judul Artikel</th>
                            <th scope="col" style="max-width: 150px;">Kategori</th>
                            <!-- <th scope="col" class="text-center" style="width: 100px;">Dibaca</th> -->
                            <th scope="col" class="text-center" style="width: 150px;">Dibuat pada</th>
                        </tr>
                    </thead>
                 
                    <tbody>
                    <?php 
                          $no=1; 
                        
                          foreach($berita as $rows): ?>
                                                <tr>
                            <td>
                                <div class="media">
                                    <i class="uil uil-book-open text-muted h5"></i>
                                    <div class="content ml-3">
                                    <!-- <a onclick="deleteConfirm('<?php echo site_url('home/informasi/'.$rows->id_berita) ?>')"> </a> -->

                                        <a href=<?php echo base_url('/informasi/detail/'.$rows->id_berita) ?> class="forum-title text-primary font-weight-bold">
                                        <?php echo $rows->judul_berita ?></a>
                                      <?php
                                        $string = strip_tags($rows->isi_berita);
if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 500);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href= informasi/detail/'.$rows->id_berita.'>Read More</a>';
}
// echo $string;
?>
                                        <p class="text-muted small mb-0 mt-2"></p><p><?php echo  $string; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="small h6">Berita</td>
                            <!-- <td class="text-center small">67<small class="text-muted">x</small> </td> -->
                            <td class="text-center small">	<?php echo format_indo(date($rows->tanggal_terbit));?></td>
                        </tr>
                        <?php endforeach; ?>   
                                            </tbody>
                                            
                </table>
        </div>
        </div>  
      
        

    </div><!--end row-->
</div><!--end container-->


<!-- Livewire Component wire-end:LT5Lrip4Qi4oNSTt8vPb --></div></section> 
          </div>
        
      
      </div>
    </div>
  </div>
</div>
</section>
<!--/ Services End /-->


      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>
<?php $this->load->view("layout/footer.php") ?>