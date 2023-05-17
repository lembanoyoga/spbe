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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Aplikasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
      <!-- <div class="text-center"> -->
  <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalRegisterForm">Tambah Data</a>
</div>
   
      <div class="table-responsive">
     <table class="table  table-bordered ">
  <thead>
    <tr class = "table-success">
      <th scope="col">No</th>
      <th scope="col">Aplikasi </th>
      <th scope="col">Link</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody class="table-light table-bordered">
  <?php
  $no = 1;
   foreach ($web as $row): ?>
									<tr>
										<td width="150">
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $row->nama_web ?>
										</td>
										<td>
                    <?php echo $row->link ?>
										</td>
										<td class="small">
                    <?php echo $row->status ?>
										<td width="250">
											<!-- <a href="<?php echo site_url('addashboard/rows/edit/'.$row->row_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> -->
                       <a href="<?php echo site_url('dashboard/hapus_user/') ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

											<!-- <a onclick="deleteConfirm('<?php echo site_url('admin/rows/delete/'.$row->row_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a> -->
                       <a onclick="deleteConfirm('<?php echo site_url('dashboard/hapus_web/'.$row->id_web) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>
  </tbody>
</table>
</div>
        <!-- Main row -->
        <!-- <div class="row"> -->
          <!-- Left col -->
          <!-- <section class="col-lg-7 connectedSortable"> -->
            <!-- Custom tabs (Charts with tabs)-->
   
            <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Aplikasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
      <form action="<?php echo site_url('dashboard/save_data_web');?>" method="post">
          <div class="form-group">
            <label>Nama Aplikasi</label>
            <input type="text" class="form-control" name="nama_web" placeholder="Nama Aplikasi">
          </div>
          <div class="form-gAroup">
            <label>Link</label>
            <input type="text" class="form-control" name="link" placeholder="Link">
          </div>
          <div class="form-group">
          <label>Status :</label>

          <select name="status" id="status" class="form-control" >
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
          </select>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
      </div>
    </div>
    
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="width:1250px;" role="document">
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
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>