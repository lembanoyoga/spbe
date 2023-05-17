<?php $this->load->view("layout_dashboard/navbar_dash.php") ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  .cards {
  margin: 0 auto;
  text-align: center;
	display: -webkit-flex;
	display: flex;
  border-radius: 10px;
	-webkit-justify-content: center; 
  justify-content: center;
  -webkit-flex-wrap: wrap; 
	flex-wrap: wrap;
	margin-top: 15px;
	padding: 1.5%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; */
  box-sizing: border-box; */
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  cursor: pointer;
}

.cards:hover {
  box-shadow: 0 4px 10px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.23);
}
.divs {
  box-shadow: 10px 10px lightblue;
}
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard SPBE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php      
              $user =  $this->db->query("SELECT * FROM users ");
              $materi =  $this->db->query("SELECT * FROM materi ");
              $berita =  $this->db->query("SELECT * FROM berita ");
                // print_r($query->result());
          
              
      ?>
    <!-- /.content-header -->
    <div class="card " >
       <div class="card-body" > 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
       
          <div class="col-lg-3 col-6">
            <!-- small box -->

            <a href="dashboard/manajemen_users" >
            <div class="small-box bg-info cards">
              <div class="inner">
         

              <h4>             <i class="nav-icon fas fa-users"></i>
<?php echo $user->num_rows();?></h4>

                <p><h5>  Total Users</h5>  </p>
                        <!-- <a href="dashboard/manajemen_users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->

              </div>
             
              <div class="icon">
        <!-- <a href="dashboard/manajemen_users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->

                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          </a>


          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <a href="dashboard/manajemen_materi" >

            <!-- small box -->
            <div class="small-box bg-success cards">
              <div class="inner">
                <h4>            <i class="nav-icon fas fa-file"></i>
<?php echo $materi->num_rows();?><sup style="font-size: 20px"></sup></h4>

                <p><h5>  Total File Materi </h5>  </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="dashboard/manajemen_materi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          </a>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
          <a href="dashboard/manajemen_berita" >
            <!-- small box -->
            <div class="small-box bg-danger cards">
              <div class="inner">
              <h4>      
            <i class="nav-icon fas fa-newspaper"></i>
<?php echo $berita->num_rows();?></h4>

                <p> <h5>  Total Berita  </h5></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="dashboard/manajemen_berita" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
</a>  
        </div>
        <!-- /.row -->

        <!-- /.row -->
        <br>  
        <!-- Main row -->
    
       <b> <p>History Indeks</p> </b>
          <!-- Left col -->
         <div class="col-lg-7   ">
          <canvas id="myChart"> </canvas>
         
         </div>
         </div>
         </div>
       
         <!-- <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("layout_dashboard/footer_dash.php") ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
