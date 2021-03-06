<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
	
	
<script src="<?php echo base_url();?>assets/javascripts/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/javascripts/1.2.1/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/font-awesome.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-sidebar.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css"></style>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.dataTables.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>admin">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>kategori/list_kategori">Kategori</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>buah/list_buah">Buah</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>">Events</a>
                </li>
      
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
