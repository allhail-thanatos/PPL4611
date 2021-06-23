<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #17a2b8;">
                <h3 class="card-title">Tambah Data User Game Master</h3>
              </div>
              <div class="card-body">
                <form action="<?php echo base_url('admin/index.php/cgamemaster/addgm') ?>" method="post" enctype="multipart/form-data">
                <ul class="list-group list-group-unbordered mb-3">
                  <br>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'nama_user', set_value( 'nama_user'), 'class="form-control" id="nama_user" placeholder="Masukkan Nama Lengkap" '). "<div style='color: red;'>".form_error( 'nama_user'). "</div>"; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                      <select  name="jk_user" class="form-control" required="">
                          <option value="" disabled diselected>-- Pilih Jenis Kelamin --</option> 
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                      <?php
                      $text = array(
                        'name'        => 'alamat_user',
                        'id'          => 'alamat_user',
                        'rows'        => '3',
                        'class'        => 'form-control',
                      ); ?>

                      <?php echo form_textarea($text); ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'telp_user', set_value( 'telp_user'), 'class="form-control" id="telp_user" placeholder="Masukkan Nomor Telepon" '). "<div style='color: red;'>".form_error( 'telp_user'). "</div>"; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'email_user', set_value( 'email_user'), 'class="form-control" id="email_user" placeholder="Masukkan Email" '). "<div style='color: red;'>".form_error( 'email_user'). "</div>"; ?>
                    </div>
                  </div>
                                    
                </ul>

                <center>
                  <a href="<?php echo base_url('admin/index.php/cgamemaster'); ?>" class="btn btn-danger" style="width:20%;"><b>Kembali</b></a> &nbsp;
                  <button type="Submit" class="btn btn-primary" value="Submit" style="width:20%;">Submit</button>
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