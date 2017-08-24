<!DOCTYPE html>
<html>
<head>
	<title></title> 

<script src="<?php echo base_url();?>assets/javascripts/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>assets/source/jquery.fancybox.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/source/jquery.fancybox.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"></style>
<script src="<?php echo base_url();?>assets/javascripts/1.2.1/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/font-awesome.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-sidebar.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css"></style>
<link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css"></style>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/summernote.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/dist/summernote.js"></script>



    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
</script>
</head>
<body>
  <nav class="navbar navbar-default" style="background: #cc3333; background-size: 100px;border: 0px;margin:0px;border-radius:0px;">
      <div class="container-fluid">
        <div class="container">
            <div class="navbar-header ">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" style="font-family: 'welcome'; color:#fff;" href="<?php echo base_url(); ?>" ><img width="150" src="<?php echo base_url(); ?>/images/logos.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" style="border: none; margin-top: 10px;">
            <?php if($this->session->userdata('is_logged_in') == false) { ?>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#" data-toggle="modal" data-target="#signup">Daftar</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#logup">Login</a></li>              
              </ul>
            <?php } else { ?>
               <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user user-menu" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="min-width: 200px;">
                  <img src="<?php echo base_url();?>/<?php echo $this->session->userdata('ava'); ?>" class="user-image" alt="User Image">
                  <span style="color: #fff;" class="hidden-xs">Hai !!!, <strong><?php echo $this->session->userdata('surename'); ?></strong></span>
                </a>
                <ul class="dropdown-menu" style="border-bottom: 2px solid #ccc, padding: 20px;">
                  <!-- User image -->
                  <li class="user-header" style="padding: 20px;text-align:center;">
                    <img src="<?php echo base_url();?>/<?php echo $this->session->userdata('ava'); ?>" class="img-circle" alt="User Image" width="100">
                    <p style="color: #000;">
                      <?php echo $this->session->userdata('surename'); ?> - User
                      <small>@Maranggiku2016</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer" style="padding: 20px;">
                    <div class="pull-left">
                      <a href="#"  class="btn btn-default btn-primary" style="color:#fff;">Profile</a>
                    </div>
                    <!-- <div class="pull-right">
                      <a class="btn btn-default btn-primary" style="color:#fff;" href="<?php echo base_url();?>users/logout">Logout</a>
                    </div> -->
                  </li>
                </ul>
              </li>         
              </ul>
            <?php } ?>
          </div><!--/.nav-collapse -->
        </div>
       </div><!--/.container-fluid -->
 </nav>

<div class="container" style="padding: 0px;">
            <div class="modal fade" role="dialog" id="signup" style="padding: 20px;">

               <form action="<?php echo base_url();?>users/insert_register" method="post" enctype="multipart/form-data" data-parsley-validate>
                <div class="row row-centered">
                <div class="modal-content modal-content-custom col-lg-4 col-xs-12 col-centered">
                  <div class="modal-header">
                    <button type="button" style="padding-right: 2px;border-radius: 100%; background: #fff; width: 21px;" class="close" data-dismiss="modal" aria-label="Close"><span style="font-size: 20px;color: #cc3333;" aria-hidden="true">x</span></button>
                    <h4 class="modal-title" style="padding-bottom:20px;"></h4>
                  </div>
                  <div class="modal-body">
                  <center><img src="<?php echo base_url() ?>images/blogo.png" width="200"></center>
                  <p style="margin-bottom:20px;margin-top: 30px;">JADILAH ORANG PERTAMA YANG MENDAPATKAN INFO TERBARU MARANGGIKU</p>
                  <br>
                 <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon" style="background: #cc3333;border-radius:0px;"><i class="fa fa-user" style="color: #fff;"></i></span>
                       <input type="text" name="surename" class="form-control" placeholder="surename" style="font-height: 20px;">
                   </div>
                </div>
                 <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon" style="background: #cc3333;border-radius:0px;"><i class="fa fa-at" style="color: #fff;"></i></span>
                       <input type="text" name="email" class="form-control" placeholder="email">
                   </div>
                </div>
                 <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon" style="background: #cc3333;border-radius:0px;"><i class="fa fa-key" style="color: #fff;"></i></span>
                       <input type="password" name="password" class="form-control" placeholder="password">
                   </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                  <label class="control-label" style="color:#fff;">Upload Picture</label><br> 
                      <input name="image" class="form-control" style="padding-bottom: 40px;" type="file"/>          
                  </div>
                </div>
                </div>
                  <div class="modal-footer">
                    <button type="submit" class="col-lg-12 btn btn-primary" style="background: #cc3333; border:1px solid #cc3333"><strong>REGISTER</strong></button>
                  </div>
                </div><!-- /.modal-content -->
                </div>
              </form>
              </div><!-- /.modal-dialog -->

              <div class="modal fade" role="dialog" id="logup" style="padding: 20px;">

               <form action="<?php echo base_url();?>users/login" method="post" data-parsley-validate>
                <div class="row row-centered">
                <div class="modal-content modal-content-custom col-lg-4 col-xs-12 col-centered">
                  <div class="modal-header ">
                    <button type="button" style="padding-right: 2px;border-radius: 100%; background: #fff; width: 21px;" class="close" data-dismiss="modal" aria-label="Close"><span style="font-size: 20px;color: #000;" aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="padding-bottom:20px;"></h4>
                  </div>
                  <div class="modal-body">
                  <center><img src="<?php echo base_url() ?>images/blogo.png" width="200"></center>
                  <center><p style="margin-bottom:20px;margin-top: 30px;">REVIEW SETIAP MENU SATE YANG KAMU NIKMATI</p></center>
                 <div class="form-group">
                   <div class="input-group">
                        <span class="input-group-addon" style="background: #cc3333;border-radius:0px;"><i class="fa fa-at" style="color: #fff;"></i></span>
                       <input type="text" name="surename" class="form-control" placeholder="surename">
                   </div>
                </div>
                 <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon" style="background: #cc3333;border-radius:0px;"><i class="fa fa-key" style="color: #fff;"></i></span>
                       <input type="password" name="password" class="form-control" placeholder="password">
                   </div>
                </div>
                </div>
                  <div class="modal-footer modal-footer-custom">
                    <button type="submit" class="col-lg-12 btn btn-primary" style="background: #cc3333; border:1px solid #cc3333" value="ok"><strong>LOGIN</strong></button>
                  </div>
                </div><!-- /.modal-content -->
                </div>
              </form>
              </div><!-- /.modal-dialog -->

            