<?php $this->load->view("layout_dashboard/navbar_dash.php") ?>
<script type="text/javascript" src="<?= base_url() ?>public/tiny_mce/tiny_mce.js"></script>
    <script  type="text/javascript">
        tinyMCE.init({
            theme : "advanced",
            mode : "textareas",
            external_image_list_url : "ext_image_list.php"
        });
    </script>
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Materi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
      <div class="page-section">
        
       <?php echo form_open_multipart('dashboard/save_data_berita');?>
                            <!-- <form action="<?php echo site_url('dashboard/save_data_berita');?>" method="post" enctype="multipart/form-data"> -->
 
                                <div class="row card-group-row">
 
                                    <?php if (isset($validation)) { ?>
                                        <div class="col-md-12">
                                            <?php foreach ($validation->getErrors() as $error) : ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <i class="mdi mdi-alert-outline me-2"></i>
                                                    <?= esc($error) ?>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    <?php } ?>
                                    <?php echo $error;?>
 
                                    <div class="col-md-12">
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item p-3">
                                                <div class="row align-items-start">
                                                    <div class="col-md-4 mb-8pt mb-md-0">
                                                        <div class="media align-items-left">
                                                            <div class="d-flex flex-column media-body media-middle">
                                                                <span
                                                                    class="card-title">Judul Berita</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-8pt mb-md-0">
                                                        <input name="judul_berita"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Judul Berita" />
                                                    </div>
                                                </div>
                                            </div>
 
                                            <div class="list-group-item p-3">
                                                <div class="row align-items-start">
                                                    <div class="col-md-4 mb-8pt mb-md-0">
                                                        <div class="media align-items-left">
                                                            <div class="d-flex flex-column media-body media-middle">
                                                                <span
                                                                    class="card-title">Tanggal Terbit</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-8pt mb-md-0">
                                                        <input name="tanggal_terbit" type="datetime-local" class="form-control publish_date" placeholder="Tanggal Terbit" value="<?php echo set_value ('tanggal_terbit'); ?>" />
                                                    </div>
                                                </div>
                                            </div>
 
                                            <div class="list-group-item p-3">
                                                <div class="row align-items-start">
                                                    <div class="col-md-4 mb-8pt mb-md-0">
                                                        <div class="media align-items-left">
                                                            <div class="d-flex flex-column media-body media-middle">
                                                                <span
                                                                    class="card-title">Gambar</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-8pt mb-md-0">
                                                        <input type="file" id="gambar_berita" name="gambar_berita" class="form-control image_file" accept=".jpg,.png,.jpeg,.gif" />
                                                    </div>
                                                </div>
                                            </div>
 
                                            <div class="list-group-item p-3">
                                                <div class="row align-items-start">
                                                    <div class="col-md-4 mb-8pt mb-md-0">
                                                        <div class="media align-items-left">
                                                            <div class="d-flex flex-column media-body media-middle">
                                                                <span
                                                                    class="card-title">Isi Berita</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-8pt mb-md-0">
                                                        <textarea name="isi_berita" style="width:100%; height: 300px">
                                                 
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
 
                                        </div>
                                    </div>
                                </div>
 
                                <div class="row">
                                    <div class="col align-items-right">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                                 
                            </form>
                        </div>
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