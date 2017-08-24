
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
    <h4>Makanan Khas Purwakarta</h4>
    <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
  </div>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Alamat</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table>
      <?php echo form_open_multipart('warung/insert_alamat'); ?>
        <?php foreach($warung_detail as  $wd):?>        
                
          <input type="hidden" name="id_warung" value="<?php echo $wd->id_warung; ?>" />
       <?php endforeach; ?> 
       <div class="form-group">
        <label class="col-md-4 control-label">Kota</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="kota" class="form-control"  />
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Provinsi</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="provinsi" class="form-control"  />
          </div>
      </div>
       <div class="form-group">
        <label class="col-md-4 control-label">Alamat</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <textarea  name="alamat" class="form-control" ></textarea>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Priority</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <select name="priority" class="form-control">
            <option value="1"> Pusat </option>
            <option value="0"> Cabang </option>
            </select>
       
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