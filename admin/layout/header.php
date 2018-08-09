<?php
    include("config/router.php");
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Metronic | Blank Page Layout</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url() ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url() ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo base_url() ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo base_url() ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

    <link rel="shortcut icon" href="favicon.ico" />
</head>

<?php
/*
    if($closedmenu == 1) {
        $closedmenu = "page-sidebar-closed";
        $closedonmenu = "page-sidebar-menu-closed";
    } elseif($closedmenu == 0) {
        $closedmenu = "";
        $closedonmenu = "";
    }*/
?>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <div class="page-logo">
                <a href="index-2.html">
                    <img src="<?php echo base_url() ?>assets/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default"/>
                </a>
                <div class="menu-toggler sidebar-toggler">
                </div>
            </div>
            
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

            <div class="page-top">
                <!--
                <form class="search-form" action="http://keenthemes.com/preview/metronic/theme/admin_4/page_general_search_2.html" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="separator hide"></li>
                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-success"> 7 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>
                                        <span class="bold">12 pending</span> notifications</h3>
                                    <a href="page_user_profile_1.html">view all</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-plus"></i>
                                                    </span> New user registered. </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> Nick </span>
                                <img alt="" class="img-circle" src="<?php echo base_url() ?>assets/layouts/layout4/img/avatar9.jpg" /> 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo site_url('logout') ?>"><i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="page-container">
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start ">
                        <a href="#" class="">
                            <i class="icon-home"></i>
                            <span class="title">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/client') ?>" class="">
                            <i class="icon-user"></i>
                            <span class="title">Data Client</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/konfirmasi') ?>" class="">
                            <i class="icon-users"></i>
                            <span class="title">Konfirmasi Client</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/tagihan') ?>" class="">
                            <i class="icon-wallet"></i>
                            <span class="title">Data Tagihan</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/pengaduan') ?>" class="">
                            <i class="icon-speech"></i>
                            <span class="title">Data Pengaduan</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/laporan') ?>" class="">
                            <i class="icon-notebook"></i>
                            <span class="title">Laporan</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/pengumuman') ?>" class="">
                            <i class="icon-calendar"></i>
                            <span class="title">Pengumuman</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?php echo site_url('admin/setting') ?>" class="">
                            <i class="icon-settings"></i>
                            <span class="title">Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>