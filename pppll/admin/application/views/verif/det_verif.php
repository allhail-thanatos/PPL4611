<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12"> 

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #007bff;">
                <h3 class="card-title">Detail Data Verifikasi</h3>
              </div>
              <div class="card-body">
              <?php foreach ($detail->result_array() as $row) { ?>
              <div class="text-center" style="margin-bottom: 30px;">
                <?php if ($row['foto_user'] == NULL) { ?>
                    <img id="output1" src="<?php echo base_url('assets/admin/img/a.png') ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle" style="width: 150px;height: 150px;">
                <?php
                }else { ?> 
                    <img id="output1" src="<?php echo base_url('upload/foto_profile/'.$row['foto_user']) ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle" style="width: 150px;height: 150px;">
                <?php } ?>
              </div>
                <h3 class="profile-username text-center" ><b>Data User</b></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">ID User</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['id_user'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Nama</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['nama_user'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Jenis Kelamin</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['jk_user'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Alamat</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['alamat_user'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Nomor Telepon</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['telp_user'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">E-Mail</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['email_user'] ?></a>
                    </div>
                  </li>
                </ul>
                <br>
                
                <h3 class="profile-username text-center"><b>Data Pengajuan</b></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">ID Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['id_per'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Jenis Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['nama_jc'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Tanggal Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo date("d-m-Y H:i", strtotime($row['tgl_submit_per'])); ?> WIB</a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">File Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <?php if ($row['bukti_per'] != NULL) { ?>
                        
                        <a href="<?php echo base_url('./upload/bukti_chl/'.$row['bukti_per']) ?>" download>
                          <button type="button" class="btn btn-block btn-success" style="width:15%;">Download File</button>
                        </a>
                      <?php } else { ?>
                        <button type="button" class="btn btn-block btn-danger disabled" style="width:15%;">File Tidak Tersedia</button>
                      <?php } ?>
                    </div>
                  </li>
                </ul>
                <br>
                
                <center><a href="<?php echo base_url('admin/cverif'); ?>" class="btn btn-primary" style="width:25%;"><b>Kembali</b></a></center>
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