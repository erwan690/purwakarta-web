              <div class="modal-dialog" style="display:block" id="signup">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal Default</h4>
                  </div>
	                  <div class="modal-body">
					      <?php echo form_open_multipart('promo/insert_promosi'); ?>
					      <div class="form-group">
						       <div class="input-group">
						        	<span class="input-group-addon"><i class="fa fa-user"></i></span>
						           <input type="username" name="username" class="form-control" placeholder="username">
						       </div>
					      </div>
					       <div class="form-group">
						       <div class="input-group">
						           <span class="input-group-addon"><i class="fa fa-at"></i></span>
						           <input type="username" name="username" class="form-control" placeholder="email">
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

					            <textarea class="form-control" name="alamat" rows="3" placeholder="address"></textarea>

					      </div>
					      <div class="form-group">
					      	<div class="input-group">
					        <label class="control-label" style="  color:#fff;">Upload Picture</label><br>
					         
					            <input name="image" class="form-upload" type="file"/>          
					   		</div>
					      </div>
	    			</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            