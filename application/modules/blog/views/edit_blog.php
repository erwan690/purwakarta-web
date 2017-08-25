<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
        <div class="alert alert-success" >

        <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
                <?php $msg = $this->session->flashdata('msg1'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-error" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
   <div class="callout callout-info" style="margin-top: 26px;">
    <h4>Satenya Orang Purwakarta</h4>
    <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prblogs extra unwanted scrolling.</p> -->
  </div>
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit blog</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
        <div class="alert alert-success" >

        <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
                <?php $msg = $this->session->flashdata('msg1'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-error" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
		<?php echo form_open_multipart('blog/update_blog'); ?>
		<?php foreach($blog as  $p):?>
		<div class="pull-left">
                <div class="form-group">
                  <label class="col-md-4 control-label">Judul blog</label>
                    <div class="col-md-8" style="margin-bottom:25px;">
                      <input  type="text" name="judul" class="form-control" value="<?php echo $p->judul_blog; ?>">
                    </div>
                </div>
		      <div class="form-group">
		        <label class="col-md-4 control-label">Deskripsi</label>
		          <div class="col-md-8" style="margin-bottom:25px;">
		            <textarea  name="deskripsi" class="form-control" ><?php echo $p->deskripsi; ?></textarea>
		          </div>
		      </div>

		      <div class="form-group">
		        <label class="col-md-4 control-label">Upload Image</label>
		          <div class="col-md-8" style="margin-bottom:25px;">
		            <input name="userfile" class="form-upload" type="file" />
		          </div>
		      </div>
		      <div class="form-group">
		        <div class="col-md-8">
		        	 <input type="hidden" value="<?php echo $p->image;?>" name="old_image">
		         <input type="hidden" value="<?php echo $p->id_blog;?>" name="id">
			  	<input type="submit" value="Update" class="btn btn-default">
			  	<input type="reset" value="Cancel" class="btn btn-default">
		        </div>
		      </div>
		</div>

	<?php endforeach;?>
</form>

  </div>
</div>
