
 <div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom: 50px;">
        <i class="icon-truck"></i>
        <h3>Edit Alamat</h3>
 </div>

<?php $msg = $this->session->flashdata('msg'); 
	if((isset($msg)) && (!empty($msg))) { ?>
                
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
		
	

		  <div class="pull-left">
              <form class="form-horizontal" action="<?php echo base_url();?>alamat/update_alamat" method="post">
              	<?php foreach($alamat as  $al):?>
                       <div class="form-group">
			        <label class="col-md-4 control-label">Kota</label>
			          <div class="col-md-8" style="margin-bottom:25px;">
			            <input type="text"  name="kota" class="form-control"  value="<?php echo $al->kota; ?>"/>
			          </div>
			      </div>
			      <div class="form-group">
			        <label class="col-md-4 control-label">Provinsi</label>
			          <div class="col-md-8" style="margin-bottom:25px;">
			            <input type="text"  name="provinsi" class="form-control" value="<?php echo $al->provinsi; ?>" />
			          </div>
			      </div>
			       <div class="form-group">
			        <label class="col-md-4 control-label">Alamat</label>
			          <div class="col-md-8" style="margin-bottom:25px;">
			            <textarea  name="alamat" class="form-control" ><?php echo $al->alamat; ?></textarea>
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
			         <input type="hidden"  name="id_warung" class="form-control"  value="<?php echo $al->id_warung; ?>"/>
				   <?php endforeach;?>
                   <div class="col-sm-12">
                   	<?php echo form_hidden('id',$al->id_alamat,'class="form-control"'); ?>
                    <?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>
                    </div>
                </form>

                </div>
                
