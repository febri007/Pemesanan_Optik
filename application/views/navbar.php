<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 10:49:12 GMT -->
<head>
<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key=<?php getClientKey()
            ?>></script>
        <title>PAMSIMAS</title>
        <link href="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/css/styles.css" rel="stylesheet" />
        <link href="<?= base_url()?>sbadmin/cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="<?= base_url()?>sbadmin/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"/>
        <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="<?= base_url()?>sbadmin/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" ></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand" href="index.html">Project PAMSIMAS</a>
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url()?>assets/icon.jpg"/></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="<?= base_url()?>assets/icon.jpg" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name"><?= $this->session->userdata('nm_pelanggan') ?></div>
                                <div class="dropdown-user-details-email"><?= $this->session->userdata('email') ?></div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <?php if ($this->session->userdata('ceklogin')) {?>
                            <a class="dropdown-item" data-target="#ModalLogout" data-toggle="modal" id="MainNavHelp">
                            <div class="dropdown-item-icon"><i data-feather="lock"></i></div>
                            Logout
                        </a>
                        <?php }
                        else{?>
                        <a class="dropdown-item" data-target="#ModalLogin" data-toggle="modal" id="MainNavHelp">
                            <div class="dropdown-item-icon"><i data-feather="lock"></i></div>
                            Login
                        </a>
                        <a class="dropdown-item" data-target="#ModalRegister" data-toggle="modal" id="MainNavHelp">
                            <div class="dropdown-item-icon"><i data-feather="lock"></i></div>
                            Daftar
                        </a>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </nav>
<div id="ModalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
                <div class="card-body">
                <div class="" id="notifregister"></div>
                    <!-- Login form-->
                    <form action="#" method="POST" id="form_login" class="form-horizontal">
                        <!-- Form Group (email address)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" name="email" id="email" type="email" placeholder="Enter email address" required>
                        </div>
                        <!-- Form Group (password)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" required>
                        </div>
                        <!-- Form Group (remember password checkbox)-->
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                            </div>
                        </div>
                        <!-- Form Group (login box)-->
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="auth-password-basic.html"></a>
                            <!-- <a class="btn btn-primary" type="#">Login</a> -->
                            <button type="button" onclick="prosesLogin();" class="btn btn-info">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a data-target="#ModalRegister" data-toggle="modal" id="MainNavHelp"  href="#ModalRegister">Belum punya akun? Daftar Sekarang</a></div>
                </div>
        </div>
    </div>
</div>
<div id="ModalLogout" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h4 class="modal-title">Peringatan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
                <div class="card-body">
                <div class="" id="notifregister"></div>
                    <!-- Login form-->
                    <form action="#" method="POST" id="form_login" class="form-horizontal">
                        <!-- Form Group (email address)-->
                        <h3>Lanjut Logout?</h3>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="auth-password-basic.html"></a>
                            <!-- <a class="btn btn-primary" type="#">Login</a> -->
                            <button type="button" onclick="prosesLogout();" class="btn btn-info">Logout</button>
                        </div>
                    </form>
                </div>
                           
        </div>
    </div>
</div>

<div id="ModalRegister" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <h4 class="modal-title">Form Daftar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="card-body">
                <!-- Registration form-->
                <form id="form_daftar" method="POST">
                    <!-- Form Row-->
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Form Group (first name)-->
                            <div class="form-group">
                                <label class="small mb-1" for="inputFirstName">Nama</label>
                                <input class="form-control py-4" id="nama" name="nama" type="text" placeholder="Nama" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group (last name)-->
                            <div class="form-group">
                                <label class="small mb-1" for="inputLastName">NIK</label>
                                <input class="form-control py-4" id="nik" name="nik" type="number" placeholder="NIK" />
                            </div>
                        </div>
                    </div>
                    <!-- Form Group (email address)            -->
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email" />
                    </div>
                    
                    <div class="form-group">
                        <label class="small mb-1" for="hp">HP</label>
                        <input class="form-control py-4" id="hp" type="number" name="hp" aria-describedby="hp" placeholder="Masukkan no HP" />
                    </div>
                    <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Massukan password" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Alamat</label>
                        <input class="form-control py-4" id="alamat" type="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Massukan Alamat" />
                    </div>
                    <!-- Form Row    -->
                    <div class="form-row">
                        <div class="col-md-6">
                            <!-- Form Group (password)-->
                            <div class="form-group">
                                <!-- <label class="small mb-1" for="inputPassword">Rt</label> -->
                                <input class="form-control py-4" id="rt" name="rt" type="number" placeholder="RT" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group (confirm password)-->
                            <div class="form-group">
                                <!-- <label class="small mb-1" for="inputConfirmPassword">Rw</label> -->
                                <input class="form-control py-4" name="rw" id="rw" type="number" placeholder="RW" />
                            </div>
                        </div>
                    </div>
                    <!-- Form Group (create account submit)-->
                    <button type="button" onclick="prosesDaftar();" class="btn btn-primary btn-block">Daftar Sekarang</button>
                    <!-- <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="auth-login-basic.html">Create Account</a></div> -->
                </form>
            </div>
                
            
        </div>
    </div>
</div>

                                
                            