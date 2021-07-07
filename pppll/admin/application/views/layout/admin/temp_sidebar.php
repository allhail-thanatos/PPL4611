<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="<?php echo base_url ('admin/') ?>" class="brand-link">
      <img src="<?php echo base_url('assets/admin/img/Logo C2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">C O N Q U E R O R</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
            $query = $this->db->query("SELECT * FROM `perhitungan` WHERE status_per = 'Belum Diverifikasi'");
          ?>
          <?php if($page == 'cdashboard'){ ?>
            <li class="nav-item menu-open">
          <?php }else{ ?>
            <li class="nav-item">
          <?php } ?>
            <a href="<?php echo base_url ('admin/cdashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">DATA</li>
          <?php if($page == 'cverif'){ ?>
            <li class="nav-item menu-open">
          <?php }else{ ?>
            <li class="nav-item">
          <?php } ?>
            <a href="<?php echo base_url ('admin/cverif') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Verifikasi Challenge
                <?php if($query->num_rows() >= 1) {?>
                  <span class="badge badge-info right"><?php echo $query->num_rows() ?></span>
                <?php } ?>
              </p>
            </a>
          </li>
          <?php if($page == 'cranking'){ ?>
            <li class="nav-item menu-open">
          <?php }else{ ?>
            <li class="nav-item">
          <?php } ?>
            <a href="<?php echo base_url ('admin/cranking') ?>" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Ranking Challenge
              </p>
            </a>
          </li>
          <li class="nav-header">COMPONENTS</li>
          <?php if($page == 'cjenischallenge'){ ?>
            <li class="nav-item menu-open">
          <?php }else{ ?>
            <li class="nav-item">
          <?php } ?>
            <a href="<?php echo base_url ('admin/cjenischallenge') ?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Jenis Challenge</p>
            </a>
          </li>
          <li class="nav-header">USER</li>
          <?php if($page == 'cgamemaster' || $page == 'cpelanggan'){ ?>
            <li class="nav-item menu-open">
          <?php }else{ ?>
            <li class="nav-item">
          <?php } ?>
            <a class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Management User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if($page == 'cgamemaster'){ ?>
                <li class="nav-item menu-open">
              <?php }else{ ?>
                <li class="nav-item">
              <?php } ?>
                <a href="<?php echo base_url ('admin/cgamemaster') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Game Master</p>
                </a>
              </li>
              <?php if($page == 'cpelanggan'){ ?>
                <li class="nav-item menu-open">
              <?php }else{ ?>
                <li class="nav-item">
              <?php } ?>
                <a href="<?php echo base_url ('admin/cpelanggan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>