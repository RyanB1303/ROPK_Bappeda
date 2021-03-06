<?php
$username = $_SESSION['username'];
$nama = $_SESSION['nama'];
$priv = $_SESSION['id_unit'];
//print_r($priv);die;
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TestBappeda</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>bower_components/datatables/dataTables.bootstrap.css">
  
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>r</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi</b> ROPK</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo TEMPLATE_ASSETS; ?>dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $username;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo TEMPLATE_ASSETS; ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
                <p>
                  <?php echo $username;?>
                  <small><?php echo $nama;?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo BASE_URL;?>Login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<div class="user-panel">
            <div class="pull-left image">
				<img src="<?php echo TEMPLATE_ASSETS; ?>dist/img/48.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Bappeda Madiun </p>
			  <span>BADAN PERENCANAAN PEMBANGUNAN DAERAH</span>
            </div>
        </div>
		</br>
		</br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
		
		<!--DASHBOARD-->
        <li class="active"><a href="<?php echo BASE_URL;?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
		
		<!--MASTER-->
		<li class="treeview">
		  <a href="#">
			<i class="fa fa-database"></i>
			<span>Master</span>
			<i class="fa fa-angle-left pull-right"></i>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="<?php echo BASE_URL;?>program"><i class="fa fa-circle-o"></i> Program</a></li>
			<li><a href="<?php echo BASE_URL;?>kegiatan"><i class="fa fa-circle-o"></i> Kegiatan</a></li>
			<li><a href="<?php echo BASE_URL;?>sub_kegiatan"><i class="fa fa-circle-o"></i> Sub Kegiatan</a></li>
		  </ul>
		</li>
		
		<!--ROPK Kinerja-->
        <li ><a href="<?php echo BASE_URL;?>kinerja"><i class="fa fa-bar-chart"></i> <span>ROPK Kinerja</span></a></li>
		
		<!--Laporan Progress-->
        <li ><a href="<?php echo BASE_URL;?>lap_progres"><i class="fa fa-book"></i> <span>Laporan Progress</span></a></li>
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

