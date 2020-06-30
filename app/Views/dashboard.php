<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard | KBM ECOTOURISM</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Archivo|Montserrat|Poppins" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link href="<?php echo base_url('assets/css/layouts/paper-dashboard.css');?>" rel="stylesheet" />
</head>
<body class="bg-putih montserrat"> 
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="<?php echo base_url('assets/img/perhutani.png');?>">
            </div>
            </a>
            <a href="#" class="simple-text logo-normal montserrat fw-800 alignl">
                KBM ECOTOURISM
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav alignc">
            <li class="active">
                <a href="./dashboard.html">
                <i class="nc-icon nc-chart-bar-32"></i>
                <p class="montserrat">Dashboard</p>
                </a>
            </li>
            <li>
                <a href="./map.html">
                <i class="nc-icon nc-pin-3"></i>
                <p class="montserrat">Perjalanan Dinas</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                <i class="nc-icon nc-single-02"></i>
                <p class="montserrat">Data Karyawan</p>
                </a>
            </li>
            <li>
                <a href="./icons.html">
                <i class="nc-icon nc-settings-gear-65"></i>
                <p class="montserrat">Pengaturan</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                <i class="nc-icon nc-tile-56"></i>
                <p class="montserrat">Lainnya</p>
                </a>
            </li>
            </ul>
        </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                </div>
                <a class="navbar-brand montserrat">DASHBOARD</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url() ?>/login/logout">Keluar</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-rotate" href="#pablo">
                    <i class="nc-icon nc-settings-gear-65"></i>
                    <p>
                        <span class="d-lg-none d-md-block">Account</span>
                    </p>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-globe text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                        <p class="card-category">Jumlah</p>
                        <p class="card-title">2
                            <p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                    <i class="fa fa-refresh"></i> Perjalanan Aktif
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-pin-3 text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                        <p class="card-category">Jumlah</p>
                        <p class="card-title"> 1,345
                            <p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                    <i class="fa fa-calendar-o"></i> Perjalanan Bulan Ini 
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-single-copy-04 text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                        <p class="card-category">Jumlah</p>
                        <p class="card-title">23
                            <p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                    <i class="fa fa-clock-o"></i> Perjalanan Tahun Ini
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-favourite-28 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                        <p class="card-category">Jumlah</p>
                        <p class="card-title">92
                            <p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                    <i class="fa fa-refresh"></i> Karyawan
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title"><?php echo($_SESSION['username']);?></h5>
                    <p class="card-category">24 Hours performance</p>
                </div>
                <div class="card-body ">
                    <canvas id=chartHours width="400" height="100"></canvas>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
            <div class="row">
                <nav class="footer-nav">
                <ul>
                    <li>
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                    </li>
                    <li>
                    <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                    </li>
                    <li>
                    <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                    </li>
                </ul>
                </nav>
                <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                    document.write(new Date().getFullYear())
                    </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                </span>
                </div>
            </div>
            </div>
        </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    
    <script src="<?php echo base_url('assets/js/core/jquery.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/js/core/popper.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/js/core/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js');?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js');?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('assets/js/paper-dashboard.min.js');?>" type="text/javascript"></script>
</body>
</html>