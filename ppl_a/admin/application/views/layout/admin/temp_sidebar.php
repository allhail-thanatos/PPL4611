<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
          
          <li class="nav-item menu-open">
            <a href="<?php echo base_url ('admin/cdashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="<?php echo base_url ('admin/cverif') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Verifikasi Challenge
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url ('admin/cranking') ?>" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Ranking Challenge
              </p>
            </a>
          </li>
          <li class="nav-header">COMPONENTS</li>
          <li class="nav-item">
            <a href="<?php echo base_url ('admin/cjenischallenge') ?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Jenis Challenge</p>
            </a>
          </li>
          <li class="nav-header">USER</li>
          <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Management User
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url ('admin/cgamemaster') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Game Master</p>
                </a>
              </li>
              <li class="nav-item">
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