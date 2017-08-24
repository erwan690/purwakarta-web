
<body style="background: #000;">

  	   <div class="login-box">
	      <div class="login-logo">
	        <i class="fa fa-users fa-lg "></i>
	      </div><!-- /.login-logo -->
	      <div class="login-box-body">
	        <p class="login-box-msg">Sign in to start your session</p>
	        <form action="<?php echo base_url();?>/admin" method="post">
	          <div class="form-group has-feedback">
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                <input type="username" name="username" class="form-control" placeholder="username">
	            </div>
	          </div>
	          <div class="form-group has-feedback">
	          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" name="password" placeholder="password">
               </div>
	          </div>
	          <div class="row">
	            <div class="col-xs-8">

	            </div><!-- /.col -->
	            <div class="col-xs-4">
	              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
	            </div><!-- /.col -->
	          </div>
	        </form>


	      </div><!-- /.login-box-body -->