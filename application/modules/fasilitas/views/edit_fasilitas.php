<div class="col-lg-12" style="border-bottom:1px solid #ccc;margin-bottom: 50px;">
    <i class="icon-truck"></i>
    <h3>Edit Fasilitas</h3>
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
		<form class="form-horizontal" action="<?php echo base_url();?>kategori/update_kategori" method="post">
		<?php foreach($kategori as  $k):?>
		<div class="pull-left">
	 		<div class="form-group">
	 			<label class="col-sm-5 control-label">Full Name</label>
	  			<div class="col-md-7" >
					<input type="text" class="form-control" name="name" value="<?php echo $k->nama_kategori;?>">
				</div>
			</div>
		
		  	<div class="footer" align="center">
			  	<input type="hidden" value="<?php echo $k->id_kategori;?>" name="id"> 
			  	<input type="submit" value="Update" class="btn btn-default">
			  	<input type="reset" value="Cancel" class="btn btn-default">
		  	</div>
		</div>

	<?php endforeach;?>
</form>


</body>
</html>