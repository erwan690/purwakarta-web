<div class="container">
	<div class="content">
		<div class="row">
			<?php foreach ($promo as $p):?>
			<div class="col-lg-12">
				
					<img src="<?php echo base_url()?><?php echo $p->image ;?>" height="200"/>
			
					<p><?php echo $p->deskripsi; ?><p>
				
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>