<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('pelanggan/profile')?>">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <?php if($this->session->userdata('foto_user') == NULL) { ?>
                    <span id="output1" class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"  src="<?php echo base_url('assets/pelanggan/assets/img/profile.jpg')?>" alt="..." /></span>
                <?php }else{ ?>
                    <span id="output1" class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"  src="<?php echo base_url('upload/foto_profile/'.$this->session->userdata('foto_user')) ?>" alt="..." /></span>   
                <?php } ?>
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('pelanggan/home')?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('pelanggan/profile')?>">Profile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('pelanggan/rank')?>">Rank</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('pelanggan/history')?>">History</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('pelanggan/challenge')?>">Challenge</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('')?>">Logout</a></li>
                </ul>
            </div>
        </nav>