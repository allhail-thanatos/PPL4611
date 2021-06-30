<!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #17a2b8;">
                <h3 class="card-title">Update Data User Pelanggan</h3>
              </div>
              <div class="card-body">
              <?php foreach ($edit->result_array() as $rows) {?>
                <form action="<?php echo base_url('admin/index.php/cpelanggan/updatep/'.$rows['id_user']) ?>" method="post" enctype="multipart/form-data">
              <?php } ?>
              <?php foreach ($edit->result_array() as $row) {?>
                <div class="text-center">
                  <?php if ($row['foto_user'] == NULL) { ?>
                      <img src="<?php echo base_url('assets/admin/img/a.png') ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle">
                  <?php
                  }else { ?> 
                      <img src="<?php echo base_url('upload/foto_profile/'.$row->foto_user) ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle">
                  <?php } ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $row['nama_user'] ?></h3>

                <p class="text-muted text-center">Game Master</p>

                <ul class="list-group list-group-unbordered mb-3">

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID User</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="id_user" placeholder="<?php echo $row['id_user'] ?>" disabled="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'nama_user', $row['nama_user'], 'class="form-control" id="nama_user" placeholder="Masukkan Nama Lengkap" '). "<div style='color: red;'>".form_error( 'nama_user'). "</div>"; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                      <?php
                        $jk_user = array(
                        'Laki-Laki'  => 'Laki-Laki',
                        'Perempuan'    => 'Perempuan'
                        );
                        echo form_dropdown('jk_user', $jk_user, $row['jk_user'],'class="form-control" required');  
                      ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                      <?php
                      $text = array(
                        'name'        => 'alamat_user',
                        'id'          => 'alamat_user',
                        'value'       => $row['alamat_user'],
                        'rows'        => '3',
                        'class'        => 'form-control',
                      ); ?>

                      <?php echo form_textarea($text); ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'telp_user', $row['telp_user'], 'class="form-control" id="telp_user" placeholder="Masukkan Nomor Telepon" '). "<div style='color: red;'>".form_error( 'telp_user'). "</div>"; ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6">
                      <?php echo form_input( 'email_user', $row['email_user'], 'class="form-control" id="email_user" placeholder="Masukkan Email" '). "<div style='color: red;'>".form_error( 'email_user'). "</div>"; ?>
                    </div>
                  </div>
                  
                  
                </ul>

                <center>
                  <a href="<?php echo base_url('admin/index.php/cpelanggan'); ?>" class="btn btn-danger" style="width:20%;"><b>Kembali</b></a> &nbsp;
                  <button type="Submit" class="btn btn-primary" style="width:20%;" value="Submit">Submit</button>
                </center>
              <?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->