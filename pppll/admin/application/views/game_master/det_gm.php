<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #007bff;">
                <h3 class="card-title">Detail Data User Game Master</h3>
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
                </ul>

                <center><a href="<?php echo base_url('admin/index.php/cgamemaster'); ?>" class="btn btn-primary" style="width:25%;"><b>Kembali</b></a></center>
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