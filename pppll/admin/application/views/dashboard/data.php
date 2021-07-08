<!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <table>
                    <tr>
                      <th style="line-height: 4.8;" rowspan="4"><h3><?php echo $gm ?></h3></th>
                      <td></td>
                    </tr>
                    <tr>
                      <td><b><?php echo $gm_a ?></b> User Aktif</td>
                    </tr>
                    <tr>
                      <td><b><?php echo $gm_n ?></b> User Nonaktif</td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                </table>

                <p>User Game Master</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="<?php echo base_url('admin/cgamemaster'); ?>" class="small-box-footer">Menuju Halaman <i class="fas fa-arrow-circle-right"></i></a>
            </div> 
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <table>
                    <tr>
                      <th style="line-height: 4.8;" rowspan="4"><h3><?php echo $pelanggan ?></h3></th>
                      <td></td>
                    </tr>
                    <tr>
                      <td><b><?php echo $pelanggan_a ?></b> User Aktif</td>
                    </tr>
                    <tr>
                      <td><b><?php echo $pelanggan_n ?></b> User Nonaktif</td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                </table>
                <p>Data User Pelanggan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="<?php echo base_url('admin/cpelanggan'); ?>" class="small-box-footer">Menuju Halaman <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $verif ?></h3>

                <p>Data Verifikasi Challenge</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="<?php echo base_url('admin/cverif'); ?>" class="small-box-footer">Menuju Halaman <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        