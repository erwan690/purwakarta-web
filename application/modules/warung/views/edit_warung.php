

        
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


		          <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Warung</h3>
                </div><!-- /.box-header -->
              <div class="box-body">
              <table>
              <?php echo form_open_multipart('warung/update_warung'); ?>
              	<?php foreach($warung as  $w):?>
                     <div class="form-group">
                        <label class="col-md-2">Nama warung</label>
                          <div class="col-md-10" style="margin-bottom:25px;">
                            <input type="text"  name="nama_warung" class="form-control" value="<?php echo $w->nama_warung; ?>"  />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Kategori</label>
                          <div class="col-md-10" style="margin-bottom:25px;">
                            <select name="id_kategori" class="form-control" >
                              <?php foreach($kategori as  $k):?>
                                <?php if ($w->id_kategori == $k->id_kategori) { ?>
                                <option  value="<?php echo $k->id_kategori; ?>" ><?php echo $k->nama_kategori; ?></option>
                                <?php } else { ?>
                                <option  value="<?php echo $k->id_kategori; ?>" ><?php echo $k->nama_kategori; ?></option>
                                <?php } ?>
                              <?php endforeach;?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Telpon</label>
                          <div class="col-md-10" style="margin-bottom:25px;">
                            <input type="text"  name="telephone" class="form-control"  value="<?php echo $w->telephone; ?>"/>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Latitude</label>
                          <div class="col-md-10" style="margin-bottom:25px;">
                            <input type="text"  name="latitude" class="form-control" value="<?php echo $w->latitude; ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Longitude</label>
                          <div class="col-md-10" style="margin-bottom:25px;">
                            <input type="text"  name="longitude" class="form-control" value="<?php echo $w->longitude; ?>"  />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Deskripsi</label>
                          <div class="col-md-10" style="margin-bottom:25px;">
                            <textarea  name="deskripsi" class="form-control" ><?php echo $w->deskripsi; ?></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Upload Image</label>
                          <div class="col-md-10" style="margin-bottom:25px;"> 
                                           <input type="hidden" value="<?php echo $w->image;?>" name="old_image">
                
                            <input name="userfile" class="form-upload" type="file" />     
                          </div>
                      </div>

                      <div class="form-group">         
                      <div class="col-md-11">
                            <input type="reset" value="Cancel" class="pull-right btn btn-default">
                               </div> 
<input type="hidden" value="<?php echo $w->id_warung;?>" name="id"> 
                          <input type="submit" value="Update" class="pull-right btn btn-warning"> 
                         
                          </div> 
                      
                    </div>

				            <?php endforeach;?>
                  
                </form>
                </table>
                </div>
              </div>
                
