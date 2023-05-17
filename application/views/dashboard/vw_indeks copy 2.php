<?php $this->load->view("layout_dashboard/navbar_dash.php") ?>
 <style>
form {
    max-height: 100%;
    height: auto;
    
    @media (max-width: $BP) {    
      height: auto; 
    }
  }
  </style>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Indeks</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item ">Manajemen Indeks</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
      <div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <!-- <h1 class="page-header">Data Indeks</h1> -->
      </div>
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
   
  <div class="card" >
          <div class="card-body  bg-white ">

  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
 
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
 
          <hr>

          <div class="panel panel-primary">
              <!-- <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Indeks
              </div> -->
              <!-- /.panel-heading -->
          
              <div class="panel-body">
                  <table width="100%" class="table  table-hover data" id="data">
                      <thead>
                          <tr>
                          <th scope="col">No</th>
      <th scope="col">Hasil Indeks </th>
      <th scope="col">Tahun Indeks</th>
      <th scope="col">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $no=1; 
                          foreach($indeks as $rows): ?>
                          <tr class="odd gradeX">
                          <td width="150">
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $rows->nilai_indeks ?>
										</td>
										<td>
                    <?php echo $rows->tahun_indeks ?>
										</td>
                              <td>
                                  <center>
                                    <div class="tooltip-demo">
                                      <a data-toggle="modal" data-target="#modal-edit<?=$rows->no_indeks;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                            <a onclick="deleteConfirm('<?php echo site_url('dashboard/hapus_indeks/'.$rows->no_indeks) ?>')"
											 href="#!" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>   </a>

                                    </div>
                                  </center>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  </div>
  </div>
  
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="width:1250px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Menghapus Data ?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- <div class="modal-body">Apakah Anda Ingin Menghapus Data ?</div> -->
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>
 
<div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('dashboard/save_data_indeks'); ?>" method="post">
      <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Indeks</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          
          <div class="form-group">
            <label class='col-md-3'>Hasil Indeks</label>
            <div class='col-md-11'>
            <input  type="number" step="0.01" class="form-control" name="nilai_indeks" placeholder="Hasil Indeks">
           </div>
           <label class='col-md-3'>Tahun Indeks</label>
            <div class='col-md-11'>
            <select name="tahun_indeks" class="form-control">
              <option selected="selected">Tahun Indeks</option>
              <?php
                for($i=date('Y'); $i>=date('Y')-10; $i-=1){
                echo"<option value='$i'> $i </option>";
                }
                ?>
              </select>
           </div>
          </div>
          <br>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          </div>
        </form>
    </div>
</div>    
</div>
<!-- /#page-wrapper -->
 
<?php $no=0; foreach($indeks as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->no_indeks;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('dashboard/edit_indeks'); ?>" method="post">
      <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title">Edit Data Indeks</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
  
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->no_indeks;?>" name="no_indeks" class="form-control" >
 
          <div class="form-group">
            <label class='col-md-3'>Nilai Indeks</label>
            <div class='col-md-11'>
              <!-- <input type="text" name="mod_name" autocomplete="off" value="<?=$row->nilai_indeks;?>" required placeholder="Masukkan Modal" class="form-control" > -->
         
              <input  type="number" step="0.01" class="form-control"  value="<?=$row->nilai_indeks;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>
              <label class='col-md-3'>Tahun Indeks</label>
            <div class='col-md-11'>
              <!-- <input type="text" name="mod_name" autocomplete="off" value="<?=$row->nilai_indeks;?>" required placeholder="Masukkan Modal" class="form-control" > -->
              <select name="tahun_indeks" class="form-control">
              <option selected="selected"><?php echo $row->tahun_indeks ?></option>
              <?php
                for($i=date('Y'); $i>=date('Y')-10; $i-=1){
                echo"<option value='$i'> $i </option>";
                }
                ?>
              </select>
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
</div>
<?php endforeach; ?>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
            
            <!--/.direct-chat -->

         
              <!-- /.card-header -->
          
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
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
<script>
function editConfirm(url){
	$('#submit').attr('href', url);
	$('#editModal').modal();
}
</script>

