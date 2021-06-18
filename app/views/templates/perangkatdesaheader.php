<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?= $data['judul']; ?></title>
        <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?= BASEURL; ?>/css/styles2.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?= BASEURL; ?>/perangkatdesa">Administrasi Desa</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="<?= BASEURL; ?>/perangkatdesa">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link" href="<?= BASEURL; ?>/perangkatdesa/info">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Info Akun
                            </a>
                            <a class="nav-link" href="<?= BASEURL; ?>/perangkatdesa/datapenduduk">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Penduduk
                            </a>
                            <a class="nav-link" href="<?= BASEURL; ?>/perangkatdesa/logout">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Login Dengan Akun Desa:</div>
                        <?= $_SESSION['perangkat']['nama']; ?>
                    </div>
                </nav>
            </div>