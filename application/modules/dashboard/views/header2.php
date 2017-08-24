<!DOCTYPE html>
<html>
<head>
	<title></title> 

<script src="<?php echo base_url();?>assets/javascripts/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/javascripts/1.2.1/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/font-awesome.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-sidebar.css"></style>
<link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css"></style>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.dataTables.min.js"></script>
</head>
<body style="background:white;font-family: 'Arial';">

 	<!--<nav class="navbar navbar-default" style="background: url('<?php echo base_url();?>/images/bgs.png') repeat; background-size: 100px;border: 0px;margin-bottom: 20px;">
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
          	<div id="navbar" class="navbar-collapse collapse" style="border: none;font-family: 'welcome'; margin-top: 10px;">
            	<ul class="nav navbar-nav navbar-right">
       			  		<li><a href="#" data-toggle="modal" data-target="#signup">Daftar</a></li>
       			  		<li><a href="#">Login</a></li>          		
            	</ul>
          </div>
        </div>
       </div>
 </nav>



            <div class="modal fade" role="dialog" id="signup" style="padding: 20px;">

               <form action="<?php echo base_url();?>users/insert_register" method="post" data-parsley-validate>
                <div class="row row-centered">
                <div class="modal-content modal-content-custom col-lg-4 col-xs-12 col-centered">
                  <div class="modal-header-custom modal-header ">
                    <button type="button" style="padding-right: 2px;border-radius: 100%; background: #fff; width: 21px;" class="close" data-dismiss="modal" aria-label="Close"><span style="font-size: 20px;color: #000;" aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal Default</h4>
                  </div>
                    <div class="modal-body ">

                <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input type="text" name="username" class="form-control" placeholder="username">
                   </div>
                </div>
                 <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-at"></i></span>
                       <input type="text" name="email" class="form-control" placeholder="email">
                   </div>
                </div>
                 <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>
                       <input type="password" name="password" class="form-control" placeholder="password">
                   </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                       <input type="text" name="phone" class="form-control" placeholder="phone">
                   </div>
                </div>
                <div class="form-group">

                      <textarea class="form-control" name="address" rows="3" placeholder="address"></textarea>

                </div>
                <div class="form-group">
                  <div class="input-group">
                  <label class="control-label" style="  color:#fff;">Upload Picture</label><br>
                   
                      <input name="image" class="form-upload" type="file"/>          
                </div>
                </div>
                </div>
                  <div class="modal-footer modal-footer-custom">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">register</button>
                  </div>
                </div>
                </div>
              </form>
              </div>-->
<div class="container">
  <div class="content">
    <div class="header">

        <div class="search2">

        <div class="form-group col-lg-6">
              <div class="input-group col-lg-12">

                          <input name="search_data" id="search_data" class="custom-input form-control" style="background: none;color:#fff;border: 2px solid #fff;" placeholder="Nama Restoran" type="text" onkeyup="ajaxSearch();" style="min-width: 400px;">

           

                        </div>
                        <div class="col-lg-12" id="suggestions">
                        <div id="autoSuggestionsList">  
                        </div>
                        </div>
            </div>
          </div>

    </div>
  </div>

</div>
            