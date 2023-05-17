
<link href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">
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
              <h2>Materi SPBE</h2>
            </div>
            <div class="col-md-14">
           
          </div>
          <div class="card" style="width: 518rem;">
          <div class="card-body ">
          <br>
          <div class="table-responsive ">
                    <table class="table table-center"  id="tabeluser">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" style="min-width: 200px;">Nama Dokumen</th>
                                <th scope="col" class="text-center" style="width: 100px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $no=1; 
                        
                          foreach($materi as $rows): ?>
                                                            <tr>
                                    <td>
                          
                                        <div class="media">
                                            <i class="uil uil-document-info text-muted h5"></i>
                                            <div class="content ml-3">
                                                <a href="javascript:void(0)" class="forum-title text-primary font-weight-bold">	<?php echo $rows->judul_materi ?></a>
                                                <p class="text-muted small mb-0 mt-2">Dibuat pada: <a href="javascript:void(0)" class="text-dark font-weight-bold">	<?php echo format_indo(date($rows->tanggal_materi));?></a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center small">
                                        <a href="<?php echo  $rows->isi_materi ?>" target="_blank"    class="btn btn-pills btn-soft-dark">
                                        <button type="button" class="btn btn-primary"> Unduh </button> </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>           
                                                            <!-- <tr>
                                    <td>
                                        <div class="media">
                                            <i class="uil uil-document-info text-muted h5"></i>
                                            <div class="content ml-3">
                                                <a href="javascript:void(0)" class="forum-title text-primary font-weight-bold">Perda No.3 Tahun 2018 tentang Tata Kelola Pemerintahan Berbasis Sistem Elektronik</a>
                                                <p class="text-muted small mb-0 mt-2">Dibuat pada: <a href="javascript:void(0)" class="text-dark font-weight-bold">11 April, 2023</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center small">
                                        <a href="<?php echo base_url();?>uploads/materi/Bahan_Paparan_SPBE_2021_rev_6.1.pptx" class="btn btn-pills btn-soft-dark">
                                        <button type="button" class="btn btn-success">     Unduh  </button> </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="media">
                                            <i class="uil uil-document-info text-muted h5"></i>
                                            <div class="content ml-3">
                                                <a href="javascript:void(0)" class="forum-title text-primary font-weight-bold">Materi Sosialisasi SPBE Tahun 2021</a>
                                                <p class="text-muted small mb-0 mt-2">Dibuat pada: <a href="javascript:void(0)" class="text-dark font-weight-bold">11 April, 2023</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center small">
                                        <a href="<?php echo base_url();?>uploads/materi/Bahan_Paparan_SPBE_2021_rev_6.1.pptx" target="_blank" download="Manajemen Keamanan SPBE - Peraturan BSSN Nomor 4 Tahun 2021.pdf" class="btn btn-pills btn-soft-dark">
                                        <button type="button" class="btn btn-success">     Unduh  </button> </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="media">
                                            <i class="uil uil-document-info text-muted h5"></i>
                                            <div class="content ml-3">
                                                <a href="javascript:void(0)" class="forum-title text-primary font-weight-bold">Peraturan Menteri PANRB No. 5 Tahun 2018 Tentang Pedoman Evaluasi SPBE</a>
                                                <p class="text-muted small mb-0 mt-2">Dibuat pada: <a href="javascript:void(0)" class="text-dark font-weight-bold">11 April, 2023</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center small">
                                        <a href="<?php echo base_url();?>uploads/materi/Bahan_Paparan_SPBE_2021_rev_6.1.pptx" target="_blank" download="Manajemen Keamanan SPBE - Peraturan BSSN Nomor 4 Tahun 2021.pdf" class="btn btn-pills btn-soft-dark">
                                        <button type="button" class="btn btn-success">   Unduh </button> </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="media">
                                            <i class="uil uil-document-info text-muted h5"></i>
                                            <div class="content ml-3">
                                                <a href="javascript:void(0)" class="forum-title text-primary font-weight-bold">Peraturan Presiden No. 95 Tahun 2018 Tentang SPBE</a>
                                                <p class="text-muted small mb-0 mt-2">Dibuat pada: <a href="javascript:void(0)" class="text-dark font-weight-bold">11 April, 2023</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center small">
                                        <a href="<?php echo base_url();?>uploads/materi/Bahan_Paparan_SPBE_2021_rev_6.1.pptx" target="_blank" download="Manajemen Keamanan SPBE - Peraturan BSSN Nomor 4 Tahun 2021.pdf" class="btn btn-pills btn-soft-dark">
                                        <button type="button" class="btn btn-success">     Unduh </button> </a>
                                    </td>
                                </tr> -->
                                                    </tbody>
                    </table>
                </div>
                          </div>  
                          </div>  

      </div>
    </div>
  </div>
</div>
</section>
<!--/ Services End /-->

<script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("actives");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });

  
}

    </script>
    <script>
      
download(){
    var redirectWindow = window.open(this.pdfSrc, '_blank');
    redirectWindow.location;
 }
      </script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>
<?php $this->load->view("layout/footer.php") ?>