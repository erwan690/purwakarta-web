<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>


<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css"/>

<script src="<?php echo base_url();?>assets/javascripts/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/javascripts/1.2.1/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/typeahead.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-tokenfield.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-tagsinput.css"></style>
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pygments-manni.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/skin-black.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/_all-skins.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/sweetalert.css"></style>
<script type="text/javascript" src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
<link href="<?php echo base_url();?>assets/css/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/typeahead.bundle.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/docs.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/bootstrap-editable.js" charset="UTF-8"></script>
</head>
 <style type="text/css">
.dataTables_filter{
  position: relative;
  left:-100px;
}
.nav > li > a:hover, .nav > li > a:active, .nav > li > a:focus {
    color: #444;
    background: #666 none repeat scroll 0% 0%;


}
.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    background-color: #666;
    border-color: #428BCA;
}

}
</style> <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
  <body class="hold-transition fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header" style="background-color: #ff7878;max-height: 50px;">
        <!-- Logo -->
        <div class="pull-left" style="padding: 15px;font-weight: bold;color: #fff;">

          KULINER PURWAKARTA ADMINISTRATOR

        </div>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
    <!--           <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o" style="color:#fff"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li> -->
                    <!-- inner menu: contains the actual data -->
                    <!-- <ul class="menu"> -->
                      <!-- <li> -->
                      <!-- start message -->
                        <!-- <a href="#"> -->
                          <!-- <div class="pull-left">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a> -->
                      <!-- </li> -->
                      <!-- end message -->
                    <!-- </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li> -->
              <!-- Notifications: style can be found in dropdown.less -->
             <!--  <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o" style="color:#fff"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li> -->
                    <!-- inner menu: contains the actual data -->
                    <!-- <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li> -->
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o" style="color:#fff"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li> -->
                    <!-- inner menu: contains the actual data -->
                    <!-- <ul class="menu"> -->
                      <!-- <li> -->
                      <!-- Task item -->
                       <!--  <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a> -->
                      <!-- </li> -->
                      <!-- end task item -->
                    <!-- </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li> -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="min-width: 200px;">
                  <img src="<?php echo base_url();?>/<?php echo $this->session->userdata('ava'); ?>" class="user-image" alt="User Image">
                  <span style="color: #fff;" class="hidden-xs"><?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?></span>
                </a>
                <ul class="dropdown-menu" style="border-bottom: 2px solid #ccc">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>/<?php echo $this->session->userdata('ava'); ?>" class="img-circle" alt="User Image">
                    <p style="color: #000;">
                      <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?> - Super Administrator
                      <small>@KulinerPwk2016</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#"  class="btn btn-default btn-primary" style="color:#fff;">Profile</a>
                    </div> -->
                    <div class="pull-right">
                      <a class="btn btn-default btn-primary" style="color:#fff;" href="<?php echo base_url();?>admin/logout">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears" style="color: #fff;"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar" style="background-color: #1E282C;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar skin-blue">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>/<?php echo $this->session->userdata('ava'); ?>" style="border-radius: 100%;" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Mr.<?php echo $this->session->userdata('firstname'); ?> </p>   </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
                <!-- <li>
                    <a href="<?php echo base_url();?>admin/admin_dashboard">Dashboard</a>
                </li> -->
                <li>
                    <a href="<?php echo base_url();?>kategori/">Kategori</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>warung/list_warung">Warung</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>fasilitas/list_fasilitas">Fasilitas</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>jurnal/list_jurnal">Blog</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>promo/">Promo</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>event/">Event</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>slide/list_album">Slider</a>
                </li>
                <!--<li>
                    <a href="<?php echo base_url();?>partner/">Partner</a>
                </li> -->

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

            <div class="container-fluid">

              <div class="col-lg-12" style="padding-bottom: 10px;">
        <!-- Content Header (Page header) -->
