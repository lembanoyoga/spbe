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
            <h1 class="m-0">Data Materi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item ">Manajemen Materi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
      <div class="card" >
          <div class="card-body ">
  <div class="row">
      <div class="col-lg-12">
          <!-- <h1 class="page-header">Data Indeks</h1> -->
 
 
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
  
 
  
          <!-- /.row -->

 
          <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>
 
          <hr>
      
       
              <!-- <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Indeks
              </div> -->
              <!-- /.panel-heading -->
          
              <div class="panel panel-primary">
              <!-- <div class="panel-heading">
                  <i class="fa fa-table"></i> Data Indeks
              </div> -->
              <!-- /.panel-heading -->
          
              <div class="panel-body">
              <!-- <div class="table-responsive"> -->
                  <table width="100%" class="table table-hover data" id="data" >
                      <thead>
                          <tr>
                          <th scope="col">No</th>
      <th scope="col">Judul Materi </th>
      <th scope="col">Tanggal Upload</th>
      <!-- <th scope="col">Link File</th> -->
      <th scope="col" >Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $no=1; 
                          foreach($materi as $rows): ?>
                          <tr class="odd gradeX">
                          <td >
											<?php echo $no++ ?>
										</td>
										<td >
											<?php echo $rows->judul_materi ?>
										</td>
										<td>
                    <?php echo format_indo(date($rows->tanggal_materi));?>
                    <!-- <?php echo $rows->tanggal_materi ?> -->
										</td>
                    <!-- <td  >
											<?php echo $rows->isi_materi ?>
										</td> -->
                    <td width="20%" >
                                  <center>
                                    <div class="tooltip-demo">
                                      <a data-toggle="modal" data-target="#modal-edit<?=$rows->id_materi;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                            <a onclick="deleteConfirm('<?php echo site_url('dashboard/hapus_materi/'.$rows->id_materi) ?>')"
											 href="#!" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>   </a>
                       <a href="<?php echo  base_url($rows->isi_materi) ?>" target="_blank" class="btn btn-primary btn-circle"><i class="fas fa-file"></i>   </a>

                                    </div>
                                  </center>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
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
 
 <!-- MODULE TAMBAH DATA -->
<div id="modal-tambah" class="modal fade">
    <div class="modal-dialog">
      <!-- <form action="<?php echo site_url('dashboard/save_data_indeks'); ?>" method="post"> -->
      <?php echo form_open_multipart('dashboard/save_data_materi');?>

      <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Materi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                          </div>
        <div class="modal-body">
        
    
          <div class="form-group">
            <label class='col-md-3'>Judul Materi</label>
            <div class='col-md-12'>
            <input  type="text"  class="form-control" name="judul_materi" placeholder="Hasil Indeks">
           </div>
           
           <label class='col-md-3'>Tanggal</label>
            <div class='col-md-12'>
            <input  type="date"  class="form-control" name="tanggal_materi" placeholder="Hasil Indeks">
           </div>

           <label class='col-md-3'>Upload File</label>
           <div class='col-md-12'>
            <input type="file" id="isi_materi" name="isi_materi" class="form-control image_file" accept=".jpg,.png,.jpeg,.pdf,.pptx" />
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
   
  




 
<?php $no=0; foreach($materi as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->id_materi;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('dashboard/update_materi'); ?>" method="post">
      <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title">Edit Data Materi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
  
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_materi;?>" name="id_materi" class="form-control" >
 
          <div class="form-group">
            <label class='col-md-3'>Judul Materi</label>
            <div class='col-md-11'>
         
              <input  type="text" class="form-control"  value="<?=$row->judul_materi;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>

              <div class="form-group">
            <label class='col-md-10'>Tanggal Materi</label>
            <div class='col-md-11'>
         
              <input  type="date" class="form-control"  value="<?=$row->tanggal_materi;?>" required name="nilai_indeks" placeholder="Hasil Indeks">
              </div>

              <div class="form-group">
              <label class='col-md-3'>Upload File</label>
           <div class='col-md-12'>
            <input type="file" id="isi_materi" name="isi_materi" class="form-control image_file" accept=".jpg,.png,.jpeg,.pdf,.pptx" />
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

  <!-- /.content-wrapper -->
  <footer class="main-footer">
  Copyright &copy; <?= date('Y');?> Kementrian Koordinator Bidang Perekonomian
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>


</div>
<!-- ./wrapper -->

<!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
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