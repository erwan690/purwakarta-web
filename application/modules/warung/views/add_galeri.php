

<?php echo form_open_multipart('warung/do_uploads');?>

                <?php foreach($warung_detail as  $wd):?>
            
                    <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom: 50px;">
                        <i class="icon-truck"></i>
                        <h3> <?php echo $wd->nama_warung; ?></h3>
                    </div>
                 
                    <input type="hidden" name="id_warung" value="<?php echo $wd->id_warung; ?>" />
                
                 <?php endforeach; ?>

<input type="file" name="userfile[]" size="20" multiple=""/>

<br /><br />

<input type="submit" value="upload" />

</form>

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
