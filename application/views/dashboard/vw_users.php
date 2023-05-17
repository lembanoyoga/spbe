<?php $this->load->view("layout_dashboard/navbar_dash.php") ?>
 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<style>
  .field-icons {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

</style> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item ">Manajemen Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card" >
          <div class="card-body  bg-white ">
    <!-- Main content -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm"><i class="fa fa-plus-circle"></i> Tambah </button>

    <section class="content">
      <div class="container-fluid">
     
      <!-- <div class="text-center"> -->
  <!-- <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalRegisterForm">Tambah Data</a> -->
<br>
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
      <div class="table-responsive">
     <table class="table table-hover data ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Last Login</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php
  $no = 1;
   foreach ($users as $row): ?>
									<tr>
										<td width="150">
											<?php echo $no++ ?>
										</td>
										<td>
											<?php echo $row->username ?>
										</td>
										<td>
                    <?php echo $row->email ?>
										</td>
										<td class="small">
                    <?php echo $row->last_login ?>
	
                    <td>
                                  <center>
                                    <div class="tooltip-demo">
                                      <a data-toggle="modal" data-target="#modal-edit<?=$row->id_users;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                            <a onclick="deleteConfirm('<?php echo site_url('dashboard/hapus_users/'.$row->id_users) ?>')"
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
   
            <!-- Custom tabs (Charts with tabs)-->
   
            <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form action="<?php echo site_url('dashboard/save_data_users');?>" method="post">
      
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required placeholder="Email">
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" required placeholder="Username">
          </div>

          <div class="form-group">
            <label>Password</label>
            <!-- <input type="password" class="form-control" name="password" required placeholder="Password"> -->
            <input id="password-field" type="password" class="form-control" name="password"  placeholder="Masukan Password" >
                   <span toggle="#password-field" require class="fa fa-fw fa-eye field-icons toggle-password"></span>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
          </div>
        </form>

      </div>
     
      </div>
    </div>
  </div>

         
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

<?php $no=0;
  
    foreach($users as $row): 
      ?>
<div class="row">
  <div id="modal-edit<?=$row->id_users;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('dashboard/edit_users'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header ">
        <h4 class="modal-title">Edit Data User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
  
        </div>
       
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_users;?>" name="id_users" class="form-control" >
 
          <div class="form-group">
            <label class='col-md-3'>Email</label>
            <div class='col-md-11'>
         
              <input  type="email"  class="form-control"  value="<?=$row->email;?>" readonly required name="email"]>
              </div>
            </div>

          <div class="form-group">
            <label class='col-md-3'>Password</label>
            <div class='col-md-11'>
            <input id="password-field" type="password" class="form-control" name="password"  placeholder="Masukan Password" >
                   <span toggle="#password-field" require class="fa fa-eye field-icons toggle-password"></span>
              </div>
     
       
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
          </div>
        </form>
  
    </div>
  </div>
</div>


                <!-- /.direct-chat-pane -->
              </div>
              </div>
              <?php endforeach; ?>
              <!-- /.card-body -->

                <!-- /.direct-chat-pane -->
              </div>
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
  </div>
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
<script>
  $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
  </script>
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
