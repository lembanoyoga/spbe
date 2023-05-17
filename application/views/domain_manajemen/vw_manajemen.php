
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
 
  
              <h2>Domain Manajemen SPBE</h2>
            </div>
          </div>
          <br>
          <button class="accordion">&nbsp Aspek 5 : Penerapan Manajemen SPBE</button>
<div class="panel">
<li><a href="manajemen/penerapan_manajemen_risiko_spbe">Indikator 21 : Penerapan Manajemen Risiko SPBE<a></li>
    <li><a href="manajemen/penerapan_manajemen_keamanan_informasi">Indikator 22 : Penerapan Manajemen Keamanan Informasi</a></li>
    <li><a href="manajemen/penerapan_manajemen_data">Indikator 23 : Penerapan Manajemen Data</a></li>
    <li><a href="manajemen/penerapan_manajemen_aset_tik">Indikator 24 : Penerapan Manajemen Aset TIK</a></li>
    <li><a href="manajemen/penerapan_kompetensi_sumber_daya_manusia">Indikator 25 : Penerapan Kompetensi Sumber Daya Manusia</a></li>
    <li><a href="manajemen/penerapan_manajemen_pengetahuan">Indikator 26 : Penerapan Manajemen Pengetahuan</a></li>
    <li><a href="manajemen/penerapan_manajemen_perubahan">Indikator 27 : Penerapan Manajemen Perubahan</a></li>
    <li><a href="manajemen/penerapan_manajemen_layanan_spbe">Indikator 28 : Penerapan Manajemen Layanan SPBE</a></li>
    
 
</div>
<button class="accordion">&nbsp Aspek 6 : Audit Teknologi dan Informasi</button>
<div class="panel">
<li><a href="manajemen/pelaksanaan_audit_infrastruktur_spbe">Indikator 29 : Pelaksanaan Audit Infrastruktur SPBE<a></li>
    <li><a href="manajemen/pelaksanaan_audit_aplikasi_spbe">Indikator 30 : Pelaksanaan Audit Aplikasi SPBE</a></li>
    <li><a href="manajemen/pelaksanaan_audit_keamanan_spbe">Indikator 31 : Pelaksanaan Audit Keamanan SPBE</a></li>
  
 
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