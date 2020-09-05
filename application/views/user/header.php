<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('lte'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('lte'); ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-fw fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link text-light">Aplikasi Pementaan Reklame</a>
                </li>

            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link text-light">Logout</a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-fw fa-envelope mr-2"></i> 4 new messages

                        </a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-fw fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-info nav-flat elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('lte'); ?>/index3.html" class="brand-link">
                <img src="<?= base_url('lte'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-2 mb-2 d-flex">
                    <div class="image">
                        <img src="<?= base_url('img/user/') . $user['foto']; ?>" class="img-circle elevation-1" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block ml-1 text-sm"><?= $user['nama']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-header">USER</li>
                        <li class="nav-item">
                            <a href="<?= base_url('user'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-fw  fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/profile'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li class="nav-header">LOKASI</li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/lokasi'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-search-location"></i>
                                <p>Daftar Lokasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/tambahlokasi'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-map-marker-alt"></i>
                                <p>Input Lokasi</p>
                            </a>
                        </li>

                        <li class="nav-header">REKLAME</li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/reklame'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-map-marked-alt"></i>
                                <p>Daftar Reklame</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-ad"></i>
                                <p>Input Reklame</p>
                            </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-fw fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-fw fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-fw fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-fw fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">