<div class="row">
  <div class="col-12">
    <div class="card card-primary">
    <div class="card-header" style="background-color: #00a830;">
      <h3 class="card-title" style="padding-top: 5px;">Data User Game Master</h3>
      <div align="right"><a type="button" class="btn btn-primary btn-block btn-sm" style="width: 15%;" href="<?php echo base_url('admin/cgamemaster/addgm'); ?>"><i class="fas fa-plus-circle"></i></i> &nbsp; Tambah Data</a></div>
    </div>
    <!-- /.card-header -->
    <div class="card-body"> 
      <table id="example1" class="table table-bordered table-striped">
        <thead> 
        <tr>
          <th style="text-align: center;width: 7%;">No</th>
          <th style="text-align: center;">Nama User</th>
          <th style="text-align: center;">ID User</th>
          <th style="text-align: center;">Status</th>
          <th style="text-align: center;width: 25%;">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
          $i=1;
          foreach ($query->result_array() as $row) {
        ?>

        <tr>
          <td style="text-align: center;"><?php echo $i++ ?></td>
          <td style="text-align: center;"><?php echo $row['nama_user'] ?></td>
          <td style="text-align: center;"><?php echo $row['id_user'] ?></td>
          <td style="text-align: center; ">
            <center>
            <?php if($row['id_user'] != $this->session->userdata('id_user')) {?>
              <?php if($row['status_user'] == 'Aktif') {?>
                <a class="btn btn-block btn-success btn-sm" style="width: 50%;" href="<?php echo base_url('admin/cgamemaster/nonaktif/'.$this->encrypt->encode($row['id_user'])); ?>">Aktif
              <?php }else{?>
                <a class="btn btn-block btn-danger btn-sm" style="width: 50%;" href="<?php echo base_url('admin/cgamemaster/aktif/'.$this->encrypt->encode($row['id_user'])); ?>">Nonaktif
              <?php }?>
            <?php }else{?>
                <button type="button" class="btn btn-block btn-success btn-sm disabled" style="width: 50%;">Aktif</button>
            <?php }?>        
          </td>
          <td style="text-align: center;">
              <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/cgamemaster/detgm/'.$this->encrypt->encode($row['id_user'])); ?>">
              <i class="fas fa-folder"></i>
              Detail
            </a>
          <?php if($row['id_user'] != $this->session->userdata('id_user')) {?>
            <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/cgamemaster/updategm/'.$this->encrypt->encode($row['id_user'])); ?>">
              <i class="fas fa-pencil-alt"></i>
              Edit
            </a>
          <?php }else{}?>
          <?php if($row['id_user'] != $this->session->userdata('id_user')) {?>
            <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/cgamemaster/deletegm/'.$this->encrypt->encode($row['id_user'])); ?>">
              <i class="fas fa-trash"></i>
              Delete
            </a>
          <?php }else{}?>
          </td>
        </tr>
        </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
          <th style="text-align: center;">No</th>
          <th style="text-align: center;">Nama User</th>
          <th style="text-align: center;">ID User</th>
          <th style="text-align: center;">Status</th>
          <th style="text-align: center;">Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
  </div>
</div> 