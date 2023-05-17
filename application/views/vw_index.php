
<?php $this->load->view("layout/header.php") ?> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

  .iframedoc {
  position: center;

  max-width: 100% !important;
    height: 50px;
    margin: 0 auto;
    background-color: #777;
    display:block;
}

  .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
  transition: 0.2s;
  margin: 30px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 16px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container2 {
  padding: 2px 16px;
  height: 50px;

}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

.img3:hover {cursor: pointer;}
.img3:not(:hover) { 
		/* width: 100px;
		height: 100px;  */
		/* border: 1px solid #333;  */
		-webkit-filter: grayscale(1);
          	filter: grayscale(1);
        	opacity: .85;
        	cursor: pointer;
        } 

	.container3 {width: 800px; margin: 30px auto;}
	.img2:hover {width: 100px; height: 100px; cursor: pointer;}
	.img2:not(:hover) { 
		/* width: 100px;
		height: 100px;  */
		/* border: 1px solid #333;  */
		-webkit-filter: grayscale(1);
          	filter: grayscale(1);
        	opacity: .75;
        	cursor: pointer;
        }

        .container4 {
  width: 1200px;
  height: 400px; 

  max-width: 100%;
  max-height: 100%;
  margin: 30px auto;

  
}
p {
  text-align: justify;
  /* font-family: 'Roboto', sans-serif; */
}

.column {
  float: left;
  width: 15.33%;
  padding: 2px;
}
.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.section {
  height: 100vh;
  width: 100%;
  position: relative;
  padding: 0;
  text-align: center;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}
.bg1 {
  background-color: #ccc;
}
.revealUp {
  opacity: 0;
  visibility: hidden;
}
.spacer {
  height: 50vh;
  background-color: #000;
}

</style>
<link href="<?php echo base_url();?>public/Owl/testing/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/Owl/testing/owl.theme.default.min.css" rel="stylesheet">

<!-- <link href="<?php echo base_url();?>public/Morphext/dist/morphext.css" rel="stylesheet"> -->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(public/spbemap.png);" >
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(public/wallkemenko2.jpg)" >
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                  <!-- <p class="intro-title-top">TEsting 01
                      <br> 001</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">002 </span> Test
                      <br> Animasi</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Coba</span></a> -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style=" background-image: url(public/wallmenko2.jpg) ">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-14">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h1 class="title-a">Apa Itu SPBE? </p></h1>
              <hr style="box-shadow: 2px 2px 2px #f5f5f5; width: 200px; border: 2px solid black; ">
              <p class="foo">
              Sistem Pemerintahan Berbasis Elektronik (SPBE) merupakan penyelenggaraan pemerintahan yang memanfaatkan
teknologi informasi dan komunikasi untuk memberikan layanan kepada Pengguna SPBE. Untuk memastikan
pelaksanaan SPBE di Instansi Pusat dan Pemerintah Daerah selaras dengan prinsip terintegrasi dan terpadu, maka
Instansi Pusat dan Pemerintah Daerah diharapkan menerapkan unsur-unsur SPBE sesuai dengan kerangka kerja
Tata Kelola SPBE dan Manajemen SPBE agar penerapan SPBE dapat berjalan efektif, efisien, dan
berkesinambungan, serta dapat menghasilkan layanan SPBE yang berkualitas dan optimal. Untuk mengukur
perkembangan penerapan SPBE di Indonesia, Kementerian Pendayagunaan Aparatur Negara dan Reformasi
Birokrasi bersama Tim Koordinasi SPBE Nasional melaksanakan Pemantauan dan Evaluasi SPBE. Pada tahun 2022,
telah dilaksanakan Pemantauan SPBE dengan menggunakan instrumen sebagaimana telah diatur dalam
Peraturan Menteri PANRB Nomor 59 Tahun 2020 tentang Pemantauan dan Evaluasi SPBE.
Hasil pelaksanaan Pemantauan SPBE yang dilakukan pada tahun 2022 sebagaimana terlampir dalam Laporan
Hasil Pemantauan ini diharapkan dapat digunakan dalam menentukan tindak lanjut yang harus dilakukan dalam
mendorong peningkatan penerapan SPBE secara menyeluruh pada Instansi Pusat dan Pemerintah Daerah di masa
mendatang dalam rangka meningkatkan kualitas layanan pemerintah kepada masyarakat dan terwujudnya
digitalisasi pemerintah dalam kerangka reformasi birokrasi nasional.</p>
            </div>
            
          </div>
          

        
      </div>

      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-14">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h1 class="title-a">Sistem Pemerintahan <p> Berbasis Elektronik </p></h1>
              <hr style="box-shadow: 2px 2px 2px #f5f5f5; width: 350px; border: 2px solid black; ">

              <p>
              Dasar penyusunan SPBE dengan memperhatikan komparasi peraturan PermenPanRB Nomor 5 Tahun 2018 dengan PermenPanRB Nomor 59 Tahun 2020
            </div>
            
          </div>
          

        
      </div>
      <div class="row">
    
      <div class="col-md-14 ">
      
      <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box ">

              <a href="<?php echo base_url();?>kebijakan">
              <div class="card">
              <div class="card-title-c align-self-center ">
        
             <img  src="public/icokebijakan.png"   class="rounded mx-auto d-block img2"  height ="110"  >
             <div class="container2 ">
             <b> Kebijakan SPBE</b>
              </div>
            </div>
            


            
              </a>
          
          </div>
          
        </div>
        </div>
        </div>
          
          </div>
            
      <div class="col-md-14">
      <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box ">
        
              <a  href="<?php echo base_url();?>tatakelola">
              <div class="card">
          
              <div class="card-title-c align-self-center">
             <img class="rounded mx-auto d-block  img2" src="public/icotatakelola.png"  height ="110" >
             <div class="container2">
             <b>Tata Kelola SPBE</b>
              </div>
            </div>
            </a>
            </div>
        </div>
        </div>
          </div>
        </div>
        <!-- <div class="col-md-4"> -->
        <div class="col-md-14">
        <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box ">
              
              <a href="<?php echo base_url();?>manajemen">
              <div class="card">
              <div class="card-title-c align-self-center">
              <img class="rounded mx-auto d-block  img2" src="public/icomanaj.png"  height ="110" >
              <div class="container2">
              <b>Manajemen SPBE</b>
              </div>
          </div>
         
      
          
         
              </a>
            </div>
            </div>
        </div>
          </div>
        </div>
      
    
   <br>
        <div class="col-md-14">
        <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box ">
              
        <a href="<?php echo base_url();?>layanan">
        <div class="card">
        <div class="card-title-c align-self-center">
              <img class="rounded mx-auto d-block  img2" src="public/icolayanan.png"  height ="110" >  
              <div class="container2">  
              <b>Layanan SPBE</b>
              </div>
            </div>
</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->


  <!--/ Property Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Indeks SPBE</h2>
              <hr style="box-shadow: 2px 2px 2px #f5f5f5; width: 200px; border: 2px solid black; ">

            </div>
            <!-- <div class="title-link">
              <a href="blog-grid.html">All Indeks SPBE
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> -->
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b  news-box">
            <div class="img-box-b">
              <img src="public/indeks_2019.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <!-- <a href="<?php echo base_url();?>indeks/indeks_2019" class="category-b">Indeks SPBE 2019</a> -->
                  <!-- <a data-toggle="modal" data-target="#myModal" href="#">Indeks SPBE 2019</a> -->
                  <button type="button" class="btn btn-primary category-b" data-toggle="modal" data-target="#indeks2019">
                  Indeks SPBE 2019
</button>
                 
                
                  
                </div>
       
                <!-- <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
              <img src="public/indeks_2021.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                <!-- <a href="<?php echo base_url();?>indeks/indeks_2020" class="category-b">Indeks SPBE 2020</a> -->
                
                <button type="button" class="btn btn-primary category-b" data-toggle="modal" data-target="#indeks2021">
                  Indeks SPBE 2021
</button>
                 
              </div>

                
                <!-- <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
              <img src="public/indeks_2022.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                <!-- <a href="<?php echo base_url();?>indeks/indeks_2021" class="category-b">Indeks SPBE 2021</a> -->
                <button type="button" class="btn btn-primary category-b" data-toggle="modal" data-target="#indeks2022">
                  Indeks SPBE 2022
</button>
              </div>
       
                <!-- <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
              <img src="public/spbe2022.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay ">
              <div class="card-header-b">
                <div class="card-category-b ">
                <a href="<?php echo base_url();?>indeks/indeks_2022" class="category-b">Indeks SPBE 2022</a>
                </div>
       
            </div>
          </div>
        </div>
        </div>
        </div> -->
      
  </section>


  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-14 ">
        <div class="title-wrap  flex justify-content-between float: right;" >
        <div class="title-box">
                <h2 class="title-a">History Indeks SPBE <p> Kemenko Perekonomian</p></h2>
                <hr style="box-shadow: 2px 2px 2px #f5f5f5; width: 400px; border: 2px solid black; ">

      </div>
      <div class="float: right;" >
      <div id="legend"> <canvas id="myChart" class="container4"   height= "300px"> </canvas></div>
       
      </div>
      </div>
        </div>
          </div>
        </div>
      

  </section>
  <!--/ Services End /-->

  
  <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          <!-- <canvas id="myChart"> </canvas> -->
         
         </div>
         </section>

  <!--/ Property Star /-->
  <section class="section-propertys section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Aplikasi</h2>
              <hr style="box-shadow: 2px 2px 2px #f5f5f5; width: 140px; border: 2px solid black; ">

            <!-- <div class="title-link">
              <a href="indeks">All Progres
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="column">
      <a href="https://jdih.ekon.go.id/" target="_blank">

      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/jdih.png"  class="rounded mx-auto d-block img-b img-fluid center2 img3"  height ="100px" width="100  px">
         
          </div>
          </div> 
          </div>
        </div>
        
        <div class="column">
        <a href="https://cmskppip.ekon.go.id/" target="_blank">

        <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/kppip.png"  class="img-b img-fluid rounded mx-auto d-block img3"  height ="110px" width="110px  ">
            </div>
            </div>
            </div>
</a>
            
        </div>

        <div class="column">
        <a href="https://sdm.ekon.go.id/" target="_blank">

      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/sdm-ekon.png"  class="rounded mx-auto d-block img-b img-fluid img3"  height ="110px" >
         
          </div>
          </div> 
          </div>
</a>
        </div>
        
        <div class="column">
        <a href="https://siap-bantu.ekon.go.id/" target="_blank">
      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/siap-bantu.png"  class="rounded mx-auto d-block img-b img-fluid img3"  height ="150px" width="120  px">
         
          </div>
          </div> 
          </div>
</a>
        </div>
        
        <div class="column">
        <a href="https://pelyta.ekon.go.id/" target="_blank">
      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/pelyta.png"  class="rounded mx-auto d-block img-b img-fluid img3"  height ="100px" width="100  px">
         
          </div>
          </div> 
          </div>
</a>
        </div>
        
        <div class="column">
        <a href="https://satupeta.go.id/" target="_blank">
      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/satupeta.jpg"  class="rounded mx-auto d-block img-b img-fluid img3"  height ="150px" width="400px">
         
          </div>
          </div> 
          </div>
</a>
        </div>

        <div class="column">
        <a href="https://www.prakerja.go.id/" target="_blank">
      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/prakerja.jpg"  class="rounded mx-auto d-block img-b img-fluid img3"  height ="200px" width="150px">
         
          </div>
          </div> 
          </div>
</a>
        </div>

        <div class="column">
        <a href="https://pemberdayaan-ppke.ekon.go.id/" target="_blank">
      <div class="carousel-item-c">
        <div class="card-box-b  news-box">
            <div class="img-box-b">
            <img src="public/p3ke.png"  class="rounded mx-auto d-block img-b img-fluid img3"  height ="100px" width="100px">
         
          </div>
          </div> 
          </div>
</a>
        </div>
    <!-- 2019 -->
        <div class="modal fade" id="indeks2019" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  style="max-width: 80%;"  role="document">
    <div class="modal-content">
      <div class="modal-header  d-block">
        <h5 class="modal-title " id="exampleModalLabel">Hasil Evaluasi SPBE 2019</h5>
        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="public/indeks_spbe2019.png"  class="rounded mx-auto d-block img-b img-fluid"  >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
 <!-- 2019 -->

  <!-- 2021 -->
<div class="modal fade" id="indeks2021" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  style="max-width: 80%;"  role="document">
    <div class="modal-content">
      <div class="modal-header  d-block">
        <h5 class="modal-title " id="exampleModalLabel">Hasil Evaluasi SPBE 2021</h5>
        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS7HK9cPcMBsYSYaCsZG-1kouCv5akNd_X1uSz0O3k3jT12eo6fMINITAOdhcJPzWleN4LIiAmHBUxZ/pubhtml?gid=1261243004&single=true" style="display: block; height: 100vh; width: 100%; text-align: center;" class="iframedoc"></iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Download</button> -->
      </div>
    </div>
  </div>
</div>
  <!-- 2021 -->

   <!-- 2022 -->
<div class="modal fade" id="indeks2022" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  style="max-width: 80%;"  role="document">
    <div class="modal-content">
      <div class="modal-header  d-block">
        <h5 class="modal-title " id="exampleModalLabel">Hasil Evaluasi SPBE 2022</h5>
        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQbRVhajD8x7UCIeWhAbrdCQuPX1H4uz3neX33dx7ThIUYdwFICaZBskE9dBL67WxHcnJtFJxd844Z-/pubhtml?gid=496008810&single=true" style="display: block; height: 100vh; width: 100%; text-align: center;" class="iframedoc"></iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Download</button> -->
      </div>
    </div>
  </div>
</div>
</div>


  <!-- 2022 -->
  </section>
  
  <!--/ Property End /-->

  <!--/ Agents End /-->

  <!--/ News Star /-->
  
  <!--/ News End /-->
	<?php $this->load->view("layout/footer.php") ?>
 
  <!-- <script>
		var ctx = document.getElementById("myChar1t").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [<?php
            if (count($indeks)>0) {
              foreach ($indeks as $data) {
                echo "'" .$data->tahun_indeks ."',";
              }
            }
          ?>],
				datasets: [{
					label: 'Nilai Indeks  ',
					data: [ <?php
                if (count($indeks)>0) {
                   foreach ($indeks as $data) {
                    echo $data->nilai_indeks . ", ";
                  }
                }
              ?>],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
			  y: {
        min: 0,
        max: 5,
      }
      
			}
		});
	</script> -->
  <script>
    var ctx = document.getElementById('myChart');
var config = {
    type: 'bar',
  options: {
    legendCallback: function(chart) {
      var text = [];
      text.push('<ul class="' + chart.id + '-legend">');
      var data = chart.data;
      var datasets = data.datasets;
      if (datasets.length) {
        for (var i = 0; i < datasets.length; ++i) {
            text.push('<li>');
            if (datasets[i].type=='line') {
            text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
          } else {
            text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
          }
          text.push(datasets[i].label);
          text.push('</li>');
        }
      }
      text.push('</ul>');
      return text.join('');
    },
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        type: "category",
        id: "axis-bar",
      }, {
        type: "time",
        id: "axis-time",
        display: false,
      }, ],
    },
  },
  data: {
    labels: [<?php
            if (count($indeks)>0) {
              foreach ($indeks as $data) {
                echo "'" .$data->tahun_indeks ."',";
              }
            }
          ?>],
    datasets: [{
      label: "Dataset1",
      type: "line",
      backgroundColor: "#0000FF",
      borderColor: "#0000FF",
      borderWidth: 1,
      fill: false,
      xAxisID: "axis-time",
      data: [ <?php
                if (count($indeks)>0) {
                   foreach ($indeks as $data) {
                    echo $data->nilai_indeks . ", ";
                  }
                }
              ?>]
    },{
      label: "Dataset2",
      type: "bar",
      backgroundColor: "#ffea00",
      borderColor: "#ffea00",
      borderWidth: 1,
      fill: true,
      xAxisID: "axis-bar",
      data: [ <?php
                if (count($indeks)>0) {
                   foreach ($indeks as $data) {
                    echo $data->nilai_indeks . ", ";
                  }
                }
              ?>]
    }]
  },
  options: {
			  y: {
        min: 0,
        max: 5,
      }
      
			}

};

var myChart = new Chart(ctx, config);
var legend = myChart.generateLegend();
document.getElementById("legend").innerHTML = legend;
    </script>


    <script>
      // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
      </script>