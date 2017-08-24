
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
      <h3 class="box-title">Add Warung</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table>
      <?php echo form_open_multipart('warung/insert_warung'); ?>
      <div class="form-group">
        <label class="col-md-4 control-label">Nama warung</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="nama_warung" class="form-control"  />
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Kategori</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <select name="id_kategori" class="form-control" >
              <?php foreach($kategori as  $k):?>
                <option  value="<?php echo $k->id_kategori; ?>" ><?php echo $k->nama_kategori; ?></option>
              <?php endforeach;?>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Telpon</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="telephone" class="form-control"  />
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Latitude</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="latitude" class="form-control"  />
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Longitude</label>
          <div class="col-md-8" style="margin-bottom:25px;">
            <input type="text"  name="longitude" class="form-control"  />
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
        <div class="col-md-8">
          <button name="submit" type="submit" value="Save" class="btn btn-primary">SAVE</button>
        </div>
      </div>
    </table>
  </div>
</div>