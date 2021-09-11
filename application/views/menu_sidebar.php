<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sidenav-menu-heading">Beranda</div>
                            <a class="nav-link" href="<?= base_url()?>homepage/">
                            <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                    Beranda
                                <span class="badge badge-primary-soft text-primary ml-auto">Baru</span>
                            </a>
                            
                            <?php if ($this->session->userdata('ceklogin')) { ?>
                               
                                <div class="sidenav-menu-heading">Lanjutan</div>
                                <a class="nav-link" href="<?= base_url()?>tagihan/billing">
                                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                    Riwayat Tagihan
                                    <span class="badge badge-primary-soft text-primary ml-auto">Baru</span>
                                </a>
                                
                                <a class="nav-link" href="<?= base_url()?>akun/akun">
                                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                    Profil
                                    <span class="badge badge-primary-soft text-primary ml-auto">Baru</span>
                                </a>
                                <a class="nav-link" href="<?= base_url()?>tagihan/b">
                                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                    Ajukan Rekening Baru
                                    <span class="badge badge-primary-soft text-primary ml-auto">Baru</span>
                                </a>
                                
                                <?php } ?>
                                <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <?php if ($this->session->userdata('ceklogin')) { ?>
                                <div class="sidenav-footer-subtitle">Login Sebagai :</div>
                                <h6> 
                                    <b>
                                        <?= $this->session->userdata('nm_pelanggan') ?>
                                    </b>
                                </h6>
                                <a class="btn btn-danger btn-sm" data-target="#ModalLogout" data-toggle="modal" id="MainNavHelp">
                                    <div class="dropdown-item-icon" style="color: aliceblue;"><i data-feather="lock"></i> Logout</div>
                                </a>
                                <?php } else { ?>
                                    <div class="sidenav-footer-subtitle">Anda Belum Login</div>
                                    <button class="btn btn-primary btn-sm" data-target="#ModalLogin" data-toggle="modal" id="MainNavHelp" >Login</button>
                                    <?php 
                                    } 
                                    ?>
                                </div>
                            </div>
                        </nav>
                    </div>