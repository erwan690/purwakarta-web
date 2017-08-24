  <div class="callout callout-info" style="margin-top: 26px;">
    <h4>Makanan Khas Purwakarta</h4>
    <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
  </div>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Menu</h3>
    </div><!-- /.box-header -->
    <div class="box-body">

<?php echo form_open_multipart('menu/do_upload');?>

<?php foreach($warung_detail as  $wd):?>
            
    
    <input type="hidden" name="id_warung" value="<?php echo $wd->id_warung; ?>" />
                
<?php endforeach; ?>



<input type="file" name="userfile[]" size="20" multiple=""/>

<br /><br />

<input type="submit" value="upload" />

</form>

  </div>
</div>