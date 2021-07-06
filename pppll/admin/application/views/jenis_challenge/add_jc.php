<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #17a2b8;">
                <h3 class="card-title">Tambah Data Jenis Challenge</h3>
              </div>
              <div class="card-body">
                <form action="<?php echo base_url('admin/cjenischallenge/addjc') ?>" method="post" enctype="multipart/form-data">
                <ul class="list-group list-group-unbordered mb-3">
                  <br>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Jenis Challenge</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'nama_jc', set_value( 'nama_jc'), 'class="form-control" id="nama_jc" placeholder="Masukkan Nama Jenis Challenge" '). "<div style='color: red;'>".form_error( 'nama_jc'). "</div>"; ?>
                    </div> 
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Deskripsi Challenge</label>
                    <div class="col-sm-6">
                      <?php echo form_textarea( 'desc_jc', set_value( 'desc_jc'), 'class="form-control" id="desc_jc" placeholder="Masukkan Nama Deskripsi Challenge" '). "<div style='color: red;'>".form_error( 'desc_jc'). "</div>"; ?>
                    </div> 
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Point Challenge</label>
                    <div class="col-sm-6">
                    <?php
                      $text = array(
                        'name'        => 'score_jc',
                        'id'          => 'score_jc',
                        'type'        => 'number',
                        'placeholder' => 'Masukkan Point Challenge',
                        'class'       => 'form-control',
                        'required'    => 'required'
                      ); ?>

                      <?php echo form_input($text); ?>
                    </div> 
                  </div>
                                    
                </ul>

                <center>
                  <a href="<?php echo base_url('admin/cjenischallenge'); ?>" class="btn btn-danger" style="width:20%;"><b>Kembali</b></a> &nbsp;
                  <button type="Submit" class="btn btn-primary" style="width:20%;" value="Submit">Submit</button>
                </center>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->