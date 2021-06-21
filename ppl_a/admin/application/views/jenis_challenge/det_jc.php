<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            
            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #007bff;">
                <h3 class="card-title">Detail Data Jenis Challenge</h3>
              </div>
              <div class="card-body">
                <?php foreach ($detail->result_array() as $row) { ?>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Nama Jenis Challenge</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['nama_jc'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Deskripsi Jenis Challenge</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['desc_jc'] ?></a>
                    </div>
                  </li>
                  <?php } ?>


                </ul>

                <center><a href="<?php echo base_url('admin/index.php/cjenischallenge'); ?>" class="btn btn-primary" style="width:25%;"><b>Kembali</b></a></center>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->