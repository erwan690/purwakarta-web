

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
      <h3 class="box-title">Add Fasilitas</h3>
    </div><!-- /.box-header -->
    <div class="box-body">

            <form class="form-horizontal" action="<?php echo base_url();?>warung/insert_fasilitas" method="post">
              	<?php foreach($warung_detail as  $wd):?>
                 
                	<input type="hidden" name="id_warung" value="<?php echo $wd->id_warung; ?>" />
                
                 <?php endforeach; ?> 
                 <div class="form-group">
                  <div class="col-md-12">
                    <table class="table-bordered col-md-12" style="padding: 10px;">
                    <tr style="padding: 10px;"> 
                    <th width="100" style="background-color:#4C9ED9; color: #fff;text-align: center;padding: 10px;">
                      Pilih
                    </th>
                    <th style="background-color:#4C9ED9; color: #fff;text-align: center;padding: 10px;">
                      Fasilitas
                    </th>
                    </tr>
                    
                    <?php foreach($fasilitas as  $f):?>
                    <tr>
                    <td style="text-align: center;padding: 10px;">
                      <input type="checkbox" name="fasilitas[]" value="<?php echo $f->id_fasilitas; ?>">
                    </td>
                    <td style="padding: 10px;">                   
                        <?php echo $f->nama_fasilitas; ?>
                    </td>
                     </tr>
                    <?php endforeach; ?>
                  
                    </table>
                    </div>
                    </div>

              
               <div class="col-sm-12">
                      <?php echo form_submit('submit', 'Save', 'class="pull-right btn btn-primary"'); ?>
                    </div>
        	</form>
                
  </div>
</div>

