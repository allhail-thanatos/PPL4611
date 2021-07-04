<div class="row">
  <div class="col-12">
    <div class="card card-primary">
    <div class="card-header" style="background-color: #00a830;">
      <h3 class="card-title">Data Verifikasi Challenge</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th style="text-align: center;">Nama Pelanggan</th>
          <th style="text-align: center;">Jenis Challenge</th>
          <th style="text-align: center;">Tanggal Pengajuan</th>
          <th style="text-align: center;">Verifikasi</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query->result_array() as $row) {
        ?>
        <tr>
          <td style="text-align: center;"><?php echo $row['nama_user'] ?></td>
          <td style="text-align: center;"><?php echo $row['nama_jc'] ?></td>
          <td style="text-align: center;"><?php echo date("d-m-Y H:i", strtotime($row['tgl_submit_per'])); ?> WIB</td>
          <td style="text-align: center;">
            <center>
              <a class="btn btn-success"  href="<?php echo base_url('admin/index.php/cverif/verif/'.$this->encrypt->encode($row['id_per'])); ?>">Verifikasi</a>
              <a class="btn btn-danger"  href="<?php echo base_url('admin/index.php/cverif/tolak/'.$this->encrypt->encode($row['id_per'])); ?>">Tolak</a>
          </td>
          <td style="text-align: center;">
            <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cverif/detverif'); ?>"> 
              <i class="fas fa-folder"></i>
              View
            </a>
          </td>
        </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
          <th style="text-align: center;">Nama Pelanggan</th>
          <th style="text-align: center;">Jenis Challenge</th>
          <th style="text-align: center;">Tanggal Pengajuan</th>
          <th style="text-align: center;">Verifikasi</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
  </div>
</div>