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
                  <?php if ($row['foto_user'] == NULL) { ?>
                      <img id="output1" src="<?php echo base_url('assets/admin/img/a.png') ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle" style="width: 150px;height: 150px;">
                  <?php
                  }else { ?> 
                      <img id="output1" src="<?php echo base_url('upload/foto_profile/'.$row['foto_user']) ?>" alt="User profile picture" class="profile-user-img img-fluid img-circle" style="width: 150px;height: 150px;">
                  <?php } ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $row['nama_user'] ?></h3>

                <p class="text-muted text-center">Pelanggan</p>

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
                      <b style="width:80%;"class="float-left">Score</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $row['score'] ?></a>
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
                            <?php
                              foreach ($chl->result_array() as $row) {
                            ?>
                            <tr>
                              <td style="text-align: center;"><?php echo $row['nama_jc'] ?></td>
                              <td style="text-align: center;"><?php echo date("d-m-Y H:i", strtotime($row['tgl_submit_per'])); ?> WIB</td>
                              <td style="text-align: center;">
                                <?php if($row['status_per'] == 'Diverifikasi') { ?>
                                  <button class="btn btn-success" disabled="">Diverifikasi</button>
                                <?php }else if($row['status_per'] == 'Ditolak') { ?>
                                  <button class="btn btn-danger" disabled="">Ditolak</button>
                                <?php }else{ ?>
                                  <button class="btn btn-warning" disabled="">Belum Diverifikasi</button>
                                <?php } ?>
                                  
                                </td>
                              <td style="text-align: center;">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cpelanggan/detp'); ?>">
                                  <i class="fas fa-folder"></i>
                                  View
                                </a>
                              </td>
                            </tr>
                            <?php } ?>
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