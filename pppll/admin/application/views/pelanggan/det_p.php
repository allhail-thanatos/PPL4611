<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            
            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #007bff;">
                <h3 class="card-title">Detail Data User Pelanggan</h3>
              </div>
              <div class="card-body">
                <?php foreach ($detail->result_array() as $row) { ?>
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url('assets/img/user4-128x128.jpg')?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row['nama_user'] ?></h3>

                <p class="text-muted text-center">Game Master</p>

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
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Username</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['uname_user'] ?></a>
                    </div>
                  </li>
                  <?php } ?>
                  <li class="list-group-item">
                    <div class="col-md-12" style="align-content: center;">
                      <center><h4><b style="width:100%;"class="float-left">Data Challenge</b></h4></center>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="card"> 
                        <!-- <div class="card-header">
                          <h3 class="card-title">Data User Pelangggan</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th style="text-align: center;">Jenis Challenge </th>
                              <th style="text-align: center;">Tanggal Pengajuan</th>
                              <th style="text-align: center;">Status Verifikasi</th>
                              <th style="text-align: center;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td style="text-align: center;">Jenis A01</td>
                              <td style="text-align: center;">01/01/2021</td>
                              <td style="text-align: center;">Diverifikasi</td>
                              <td style="text-align: center;">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cpelanggan/detp'); ?>">
                                  <i class="fas fa-folder"></i>
                                  View
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: center;">Jenis A07</td>
                              <td style="text-align: center;">11/07/2021</td>
                              <td style="text-align: center;">Diverifikasi</td>
                              <td style="text-align: center;">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cpelanggan/detp'); ?>">
                                  <i class="fas fa-folder"></i>
                                  View
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: center;">Jenis A03</td>
                              <td style="text-align: center;">11/05/2021</td>
                              <td style="text-align: center;">Ditolak</td>
                              <td style="text-align: center;">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cpelanggan/detp'); ?>">
                                  <i class="fas fa-folder"></i>
                                  View
                                </a>
                              </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th style="text-align: center;">Jenis Challenge </th>
                              <th style="text-align: center;">Tanggal Pengajuan</th>
                              <th style="text-align: center;">Status Verifikasi</th>
                              <th style="text-align: center;">Action</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                      </div>
                    </div> 
                  </li>


                </ul>

                <center><a href="<?php echo base_url('admin/index.php/cpelanggan'); ?>" class="btn btn-primary" style="width:25%;"><b>Kembali</b></a></center>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->