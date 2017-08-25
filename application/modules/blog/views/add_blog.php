

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
   <!--  <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prblogs extra unwanted scrolling.</p> -->
  </div>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add blogs</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <?php echo form_open_multipart('blog/insert_blog'); ?>
      <div class="form-group">
        <label class="col-md-4 control-label">Judul blog</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="judul" class="form-control" >
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Deskripsi</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <textarea  name="deskripsi" class="form-control" ></textarea>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Upload Image</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input name="image" class="form-upload" type="file"/>
          </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
          <button name="submit" type="submit" value="Save" class="pull-right btn btn-primary">SAVE</button>
        </div>
      </div>
        </table>
  </div>
</div>
