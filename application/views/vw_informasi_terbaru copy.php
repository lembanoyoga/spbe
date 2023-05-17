
<?php $this->load->view("layout/header.php") ?>

<style>
h2 {text-align: center;}

</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--/ Services Star /-->
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          
        </div>
      </div>
    </div>


    <canvas id="myChart"> </canvas>
         
</div>
</section>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'radar',
    data: {
      labels: [  
      'Kebijakan Internal Terkait Tata Kelola SPBE ',
    'Drinking',
    'Sleeping',
    'Designing',
    'Audit TIK',
    'Layanan AdPem Berbasis Elektronik',
    'Layanan Publik Berbasis Elektronik '],
      datasets: [{
        label: 'My First Dataset',
    data: [2, 3, 3, 3, 2, 2, 4  ],
    fill: true,
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgb(255, 99, 132)',
    pointBackgroundColor: 'rgb(255, 99, 132)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(255, 99, 132)'
      }, {
    label: 'My Second Dataset',
    data: [2, 4, 5, 3, 2, 2, 3  ],
    fill: true,
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'
  }]
    },
    options: {
      scales: {
      // yAxes: [{
      //        ticks: {
      //            beginAtZero: true,
      //            userCallback: function(label, index, labels) {
      //                // when the floored value is the same as the value we have a whole number
      //                if (Math.floor(label) === label) {
      //                    return label;
      //                }

      //            },
      //        }
      //    }],
        r: {
            angleLines: {
                display: true
            },
            suggestedMin: 0,
            suggestedMax: 5 
        }
      }

    }
  });
</script>


              <!--/ News Star /-->
  <!-- <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest News</h2>
            </div>
            <div class="title-link">
              <a href="blog-grid.html">All News
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="public/garuda.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Judul</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Isi
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="public/garuda.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Judul</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Isi
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="public/garuda.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Judul</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Isi
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="public/garuda.png" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Judul</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Isi
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
     
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ News End /-->

            </div>
          </div>

<!-- <iframe src="public/testk.pdf" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe> -->

        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Services End /-->


<?php $this->load->view("layout/footer.php") ?>

