

<link href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">
<style>
    .actives:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
    </style>
<!--/ Services Star /-->
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
 
  
              <h2>Domain Tata Kelola SPBE </h2>
            </div>
          </div>
          <br>
          <button class="accordion">&nbsp Aspek 2 : Perencanaan Strategis SPBE </button>
<div class="panel">
<li><a href="tatakelola/arsitektur_spbe_pemerintah_daerah">Indikator 11 : Arsitektur SPBE Pemerintah Daerah<a></li>
    <li><a href="tatakelola/peta_rencana_spbe_pemerintah_daerah">Indikator 12 : Peta Rencana SPBE Pemerintah Daerah</a></li>
    <li><a href="tatakelola/rencana_dan_anggaran_spbe"> Indikator 13 : Rencana dan Anggaran SPBE</a></li>
    <li><a href="tatakelola/inovasi_proses_bisnis_spbe">Indikator 14 : Inovasi Proses Bisnis SPBE</a></li>
   
</div>
<button class="accordion">&nbsp Aspek 3 : Teknologi Informasi dan Komunikasi </button>
<div class="panel">
<li><a href="tatakelola/pembangunan_aplikasi_spbe">Indikator 15 : Pembangunan Aplikasi SPBE</a></li>
    <li><a href="tatakelola/layanan_pusat_data">Indikator 16 : Layanan Pusat Data</a></li>
    <li><a href="tatakelola/layanan_jaringan_intra_pemerintah_daerah">Indikator 17 : Layanan Jaringan Intra Pemerintah Daerah</a></li>
    <li><a href="tatakelola/penggunaan_sistem_penghubung_layanan_pemerintah_daerah">Indikator 18 : Penggunaan Sistem Penghubung Layanan Pemerintah Daerah</a></li>
   
</div>
<button class="accordion">&nbsp Aspek 4 : Penyelenggara SPBE</button>
<div class="panel">
<li><a href="tatakelola/tim_Koordinasi_spbe_pemerintah_daerah">Indikator 19 : Tim Koordinasi SPBE Pemerintah Daerah</a></li>
    <li><a href="tatakelola/kolaborasi_penerapan_spbe">Indikator 20 : Kolaborasi Penerapan SPBEh</a></li>
   
</div>
<!-- <iframe src="public/testk.pdf" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe> -->
<!-- Sistem Pemerintahan Berbasis Elektronik (SPBE) atau yang biasa disebut dengan e-government adalah penyelenggaraan pemerintahan yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada instansi pemerintah, aparatur sipil negara, pelaku bisnis, masyarakat, dan pihak-pihak lainnya. -->

      
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
<?php $this->load->view("layout/footer.php") ?>