<div class="row">
  <div class="col-12">
    <div class="card card-primary">
    <div class="card-header" style="background-color: #00a830;">
      <h3 class="card-title">Ranking Challenge</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th style="text-align: center;width: 7%;">Rank</th>
          <th style="text-align: center;">Nama Pelanggan</th>
          <th style="text-align: center;">Challenge Terselesaikan</th>
          <th style="text-align: center;">Jumlah Point</th>
          <!-- <th style="text-align: center;">Tanggal Pengajuan</th> -->
          <!-- <th style="text-align: center;">Verifikasi</th> -->
          <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
          $i=1;
          foreach ($query->result_array() as $row) {
            $query = $this->db->query(" SELECT * FROM `perhitungan` WHERE id_user = '$row[id_user]' AND status_per = 'Diverifikasi' ");
        ?>
        <tr>
            <td style="text-align: center;"><?php echo $i++ ?></td>
            <td style="text-align: center;"><?php echo $row['nama_user'] ?></td>
            <td style="text-align: center;"><?php echo $query->num_rows() ?> Kali</td>
            <td style="text-align: center;"><?php echo $row['score'] ?></td>
            <td style="text-align: center;">
              <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/cranking/detranking/'.$this->encrypt->encode($row['id_user'])); ?>">
                <i class="fas fa-folder"></i>
                Detail
              </a>
            </td>
          </tr> 
        <?php }?> 
        </tbody>
        <tfoot>
        <tr>
          <th style="text-align: center;">Rank</th>
          <th style="text-align: center;">Nama Pelanggan</th>
          <th style="text-align: center;">Challenge Terselesaikan</th>
          <th style="text-align: center;">Jumlah Point</th>
          <!-- <th style="text-align: center;">Challenge Terakhir</th> -->
          <!-- <th style="text-align: center;">Tanggal Pengajuan</th> -->
          <!-- <th style="text-align: center;">Verifikasi</th> -->
          <th style="text-align: center;">Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
  </div>
</div> 