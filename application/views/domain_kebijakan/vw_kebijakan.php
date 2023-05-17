
<link href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">


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
 
  
              <h2>Domain Kebijakan SPBE </h2>
            </div>
          </div>
          <br>
          <button class="accordion">&nbsp Aspek 1 : Kebijakan Internal terkait Tata Kelola SPBE </button>
<div class="panel">
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_arsitektur_spbe_pemerintah_daerah">Indikator 1 : Kebijakan Internal Arsitektur SPBE Pemerintah Daerah<a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_peta_rencana_spbe_pemerintah_daerah">Indikator 2 : Kebijakan Internal Peta Rencana SPBE Pemerintah Daerah</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_manajemen_data">Indikator 3 : Kebijakan Internal Manajemen Data</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_pembangunan_aplikasi_spbe">Indikator 4 : Kebijakan Internal Pembangunan Aplikasi SPBE</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_layanan_pusat_data">Indikator 5 : Kebijakan Internal Layanan Pusat Data</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_layanan_jaringan_intra_pemerintah_daerah">Indikator 6 : Kebijakan Internal Layanan Jaringan Intra Pemerintah Daerah</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_penggunaan_sistem_penghubung_layanan_pemerintah_daerah"> Indikator 7 : Kebijakan Internal Penggunaan Sistem Penghubung Layanan Pemerintah Daerah</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_manajemen_keamanan_informasi"> Indikator 8 : Kebijakan Internal Manajemen Keamanan Informasi</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_audit_tik">Indikator 9 : Kebijakan Internal Audit TIK</a></li>
    <li><a href="<?php echo base_url();?>kebijakan/kebijakan_internal_tim_koordinasi_spbe_pemerintah_daerah">Indikator 10 : Kebijakan Internal Tim Koordinasi SPBE Pemerintah Daerah</a></li>
 
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