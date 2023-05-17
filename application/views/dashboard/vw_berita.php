<?php $this->load->view("layout_dashboard/navbar_dash.php") ?>

 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<style>
  td {
    height: 100px;
  text-align: center;
  vertical-align: middle;
}
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item ">Manajemen Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php 
  $data=$this->session->flashdata('sukses');
  if($data!=""){ ?>
  <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
  <?php } ?>
 
  <?php 
  $data2=$this->session->flashdata('error');
  if($data2!=""){ ?>
  <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
  <?php } ?>
    <!-- /.content-header -->
    <div class="card">
          <div class="card-body  bg-white ">
    <!-- Main content -->

    <section class="content">
    <a href="hal_berita" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Tambah</a>

      <div class="container-fluid">
     
      <!-- <div class="text-center"> -->

</div>
   <br>
      <div class="table-responsive">
     <table class="table table-hover data " id="data" >
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Berita</th>
      <th scope="col">Isi Berita</th>
      <th scope="col">Tanggal Terbit</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody class="table-light table-bordered">
  <?php
  $no = 1;
   foreach ($berita as $row): ?>
									<tr>
										<td width="150">
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $row->judul_berita ?>
										</td>
                    <?php
                                        $string = strip_tags($row->isi_berita);
if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 250);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '...';
}
// echo $string;
?>
										<td>
                    <?php echo $string ?>
										</td>
										<td class="small">
                    <?php echo format_indo(date($row->tanggal_terbit)); ?>
										<td width="250">
                    <center>
                                    <div class="tooltip-demo">
                                    <a href=<?php echo base_url('/dashboard/edit_berita/'.$row->id_berita) ?> class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a>

                                      <!-- <a data-toggle="modal" data-target="#modal-edit<?=$row->id_berita;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a> -->
                                                            <a onclick="deleteConfirm('<?php echo site_url('dashboard/hapus_berita/'.$row->id_berita) ?>')"
											 href="#!" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>   </a>

                                    </div>
                                  </center>
										</td>
									</tr>
									<?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
   

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
    </div>
    </div>
    </div>

            <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form action="<?php echo site_url('dashboard/save_data_users');?>" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
      </div>
      </div>
     
 


 
<!-- <?php $no=0; foreach($berita as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->id_berita;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('dashboard/edit_indeks'); ?>" method="post">
      <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title">Edit Data Berita</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
  
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_berita;?>" name="id_berita" class="form-control" >
 
          <div class="form-group">
            <label class='col-md-3'>Judul Berita</label>
            <div class='col-md-11'>
         
              <input  type="text" step="0.01" class="form-control"  value="<?=$row->judul_berita;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>
              <div class="form-group">
            <label class='col-md-3'>Judul Berita</label>
            <div class='col-md-11'>
         
              <input  type="text" step="0.01" class="form-control"  value="<?=$row->judul_berita;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>
              <div class="form-group">
            <label class='col-md-3'>Judul Berita</label>
            <div class='col-md-11'>
         
              <input  type="text" step="0.01" class="form-control"  value="<?=$row->judul_berita;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>
              <div class="form-group">
            <label class='col-md-3'>Judul Berita</label>
            <div class='col-md-11'>
         
              <input  type="text" step="0.01" class="form-control"  value="<?=$row->judul_berita;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>
            </div>
          <br>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
          </div>
        </form>
    </div>
  </div>

<?php endforeach; ?>
 -->


                <!-- /.direct-chat-pane -->
              </div>
</div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
            
            <!--/.direct-chat -->

         
              <!-- /.card-header -->
              <div class="card-body">
                
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  Copyright &copy; <?= date('Y');?> Kementrian Koordinator Bidang Perekonomian
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>