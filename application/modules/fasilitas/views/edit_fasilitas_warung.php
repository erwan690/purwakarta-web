<div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom: 50px;">
    <i class="icon-truck"></i>
    <h3>Edit Fasilitas Warung</h3>
</div>



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
		</div>
            <div class="col-md-12">
	
            <form class="form-horizontal" action="<?php echo base_url();?>
            	/insert_fasilitas" method="post">

                 <div class="form-group">
                  <div class="col-md-12">
                    <table class="table-bordered col-md-12" style="padding: 10px;">
                    <tr style="padding: 10px;"> 
                    <th style="padding: 10px;">
                      Pilih
                    </th>
                    <th style="padding: 10px;">
                      Fasilitas
                    </th>
                    </tr>
                    
                   
                    <?php foreach($fasilitas as  $f):?>
                    <tr>
                    
                    <td>

                    
                    <input type="checkbox" class="form-control"  name="fasilitas[]" value="<?php echo $f->id_fasilitas; ?>"  <?php foreach($fasilitas_warung as  $fw):?><?php if($f->id_fasilitas == $fw->id_fasilitas) { ?> checked <?php } ?>	<?php endforeach; ?>>
              		
                    </td>
                    <td style="padding: 10px;">                   
                    <?php echo $f->nama_fasilitas; ?>
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
