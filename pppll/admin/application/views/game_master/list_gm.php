<div class="row">
  <div class="col-12">
    <div class="card card-primary">
    <div class="card-header" style="background-color: #00a830;">
      <h3 class="card-title" style="padding-top: 5px;">Data User Game Master</h3>
      <div align="right"><a type="button" class="btn btn-primary btn-block btn-sm" style="width: 15%;" href="<?php echo base_url('admin/index.php/cgamemaster/addgm'); ?>"><i class="fas fa-plus-circle"></i></i> &nbsp; Tambah Data</a></div>
    </div>
    <!-- /.card-header -->
    <div class="card-body"> 
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th style="text-align: center;">Nama User</th>
          <th style="text-align: center;">ID User</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query->result_array() as $row) {
        ?>

        <tr>
          <td style="text-align: center;"><?php echo $row['nama_user'] ?></td>
          <td style="text-align: center;"><?php echo $row['id_user'] ?></td>
          <td style="text-align: center;">
              <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cgamemaster/detgm/'.$this->encrypt->encode($row['id_user'])); ?>">
              <i class="fas fa-folder"></i>
              View
            </a>
            <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/index.php/cgamemaster/updategm/'.$this->encrypt->encode($row['id_user'])); ?>">
              <i class="fas fa-pencil-alt"></i>
              Edit
            </a>
            <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/index.php/cgamemaster/deletegm/'.$this->encrypt->encode($row['id_user'])); ?>">
              <i class="fas fa-trash"></i>
              Delete
            </a>
          </td>
        </tr>
        </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
          <th style="text-align: center;">Nama User</th>
          <th style="text-align: center;">ID User</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
  </div>
</div> 