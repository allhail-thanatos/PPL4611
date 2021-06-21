<div class="row">
  <div class="col-12">
    <div class="card card-primary">
    <div class="card-header" style="background-color: #00a830;">
      <h3 class="card-title" style="padding-top: 5px;">Data Jenis Challenge</h3>
      <div align="right"><a type="button" class="btn btn-primary btn-block btn-sm" style="width: 15%;" href="<?php echo base_url('admin/index.php/cjenischallenge/addjc'); ?>"><i class="fas fa-plus-circle"></i></i> &nbsp; Tambah Data</a></div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th style="text-align: center;">Nama Challenge</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </thead> 
        <tbody>
        <?php
          foreach ($query->result_array() as $row) {
        ?>
        <tr>
          <td style="text-align: center;"><?php echo $row['nama_jc'] ?></td>
          <td style="text-align: center;">
            <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/index.php/cjenischallenge/detjc/'.$row['id_jc']); ?>">
              <i class="fas fa-folder"></i>
              View
            </a>
            <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/index.php/cjenischallenge/updatejc/'.$row['id_jc']); ?>">
              <i class="fas fa-pencil-alt"></i>
              Edit
            </a>
            <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/index.php/cjenischallenge/deletejc/'.$row['id_jc']); ?>">
              <i class="fas fa-trash"></i>
              Delete
            </a>
          </td>
        </tr>

        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
          <th style="text-align: center;">Nama Challenge</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
  </div>
</div> 