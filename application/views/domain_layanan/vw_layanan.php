
<link type="text/css" href="<?php echo base_url();?>public/t_home/css/style.css" rel="stylesheet">

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
 
  
              <h2>Domain Layanan SPBE</h2>
            </div>
          </div>
          <br>
          <button class="accordion" id="test">&nbsp Aspek 7 : Layanan Administrasi Pemerintahan Berbasis Elektronik </button>
<div class="panel">
<li><a href="layanan/layanan_perencanaan" target="_blank">Indikator 32 : Layanan Perencanaan</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_penganggaran" >Indikator 33 : Layanan Penganggaran</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_keuangan">Indikator 34 : Layanan Keuangan</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_pengadaan_barang_dan_jasa">Indikator 35 : Layanan Pengadaan Barang dan Jasa</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_kepegawaian">Indikator 36 : Layanan Kepegawaian</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_kearsipan_dinamis">Indikator 37 : Layanan Kearsipan Dinamis</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_pengelolaan_barang_milik_negara_daerah">Indikator 38 : Layanan Pengelolaan Barang Milik Negara/Daerah</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_pengawasan_internal_pemerintah">Indikator 39 : Layanan Pengawasan Internal Pemerintah</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_akuntabilitas_kinerja_organisasi">Indikator 40 :Layanan Akuntabilitas Kinerja Organisasi</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_kinerja_pegawai">Indikator 41 : Layanan Kinerja Pegawai</a></li>
    
</div>
<button class="accordion">&nbsp Aspek 8 : Layanan Publik Berbasis Elektronik </button>
<div class="panel">
<li><a href="<?php echo base_url();?>layanan/layanan_pengaduan_pelayanan_publik">Indikator 42 : Layanan Pengaduan Pelayanan Publik</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_data_terbuka">Indikator 43 : Layanan Data Terbuka</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_jaringan_dokumentasi_dan_informasi_hukum">Indikator 44 : Layanan Jaringan Dokumentasi dan Informasi Hukum (JDIH)</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_publik_sektor_1">Indikator 45 : Layanan Publik Sektor 1</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_publik_sektor_2">Indikator 46 : Layanan Publik Sektor 2</a></li>
    <li><a href="<?php echo base_url();?>layanan/layanan_publik_sektor_3">Indikator 47 : Layanan Publik Sektor 3</a></li>
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