  <div class="callout callout-info" style="margin-top: 26px;">
    <h4>Satenya Orang Purwakarta</h4>
    <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
  </div>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Select Image</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
            <div class="col-md-12">
	
            <form class="form-horizontal" action="<?php echo base_url();?>/slide/insert_slide" method="post">

            	    <?php foreach($album as  $a):?>

                    <input type="hidden" name="id_album" value="<?php echo $a->id_album; ?>" />
                
                 <?php endforeach; ?>

                 <div class="form-group">
                  <div class="col-md-12">
                    <table class="table-bordered col-md-12" style="padding: 10px;">
                    <tr style="padding: 10px;"> 
                    <th style="padding: 10px; text-align: center; width: auto;">
                      Pilih
                    </th>
                    <th style="padding: 10px;">
                      Image
                    </th>
                    </tr>
                    
                   
                    <?php foreach($slide as  $s):?>
                    <tr>
                    
                    <td style="padding: 10px; text-align: center;">

                    
                    <input type="checkbox" class="slide"  name="slide[]" value="<?php echo $s->image; ?>" >
              		
                    </td>
                    <td style="padding: 10px;">                   
                    <img src ="<?php echo base_url() ?><?php echo $s->image; ?>" width="100" class=" img-responsive" />
                    </td>
       
                    </tr>
                  
                	<?php endforeach; ?>
                  
                  </table>
                    </div>
                    </div>

                </div>
               <div class="col-sm-12">
                      <?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
                    </div>
        	</form>
                

				   
            </div>
            </div>
            </div>
<script type="text/javascript">

var limit = 5;
$('input.slide').on('click', function (evt) {
    if ($('.slide:checked').length > limit) {
        this.checked = false;
    }
});


</script>