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
                      <b style="width:80%;"class="float-left">Akumulasi Score</b>
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
                                <a class="btn btn-primary btn-sm" id="<?php echo $row['id_per'] ?>" data-toggle="modal" data-target="#detail_<?php echo $row['id_per'] ?>"><i class="fas fa-folder"></i>Detail</a>
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

                <center><a href="<?php echo base_url('admin/cpelanggan'); ?>" class="btn btn-primary" style="width:25%;"><b>Kembali</b></a></center>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
        </div> 
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php
      foreach ($riwayat->result_array() as $rows) {
    ?>
    <div class="modal fade" id="detail_<?php echo $rows['id_per'] ?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Data Challange</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #007bff;">
                <h3 class="card-title">Detail Data Pengajuan Challange</h3>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b class="float-left"><h5><b>Data Pengajuan</b></h5></b>
                    </div>
                    <div class="col-md-8">
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Tanggal Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo date("d-m-Y H:i", strtotime($rows['tgl_submit_per'])); ?> WIB</a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Status Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left">
                        <?php if($rows['status_per'] == 'Diverifikasi') { ?>
                          <button class="btn btn-success btn-sm" disabled="">Diverifikasi</button>
                        <?php }else if($rows['status_per'] == 'Ditolak') { ?>
                          <button class="btn btn-danger btn-sm" disabled="">Ditolak</button>
                        <?php }else{ ?>
                          <button class="btn btn-warning btn-sm" disabled="">Belum Diverifikasi</button>
                        <?php } ?>    
                      </a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">File Pengajuan</b>
                    </div>
                    <div class="col-md-8">
                      <?php if ($rows['bukti_per'] != NULL) { ?>
                        <a href="<?php echo base_url('./upload/bukti_chl/'.$rows['bukti_per']) ?>" download>
                          <button type="button" class="btn btn-sm btn-success" style="width:30%;">Download File</button>
                        </a>
                      <?php } else { ?>
                        <button type="button" class="btn btn-sm btn-danger disabled" style="width:30%;">File Tidak Tersedia</button>
                      <?php } ?>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left"></b>
                    </div>
                    <div class="col-md-8">
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b class="float-left"><h5><b>Data Challange</b></h5></b>
                    </div>
                    <div class="col-md-8">
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Jenis Challange</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $rows['nama_jc'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Deskripsi Challange</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $rows['desc_jc'] ?></a>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-4">
                      <b style="width:80%;"class="float-left">Point Challange</b>
                    </div>
                    <div class="col-md-8">
                      <a  class="float-left"><?php echo $rows['score_jc'] ?></a>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="modal-footer justify-content-between">
            <a ></a>
            <button type="button" class="btn btn-primary" style="width: 15%;" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <?php } ?>
    <!-- /.modal -->