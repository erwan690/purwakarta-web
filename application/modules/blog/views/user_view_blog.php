<div class="container">
	<div class="content">
		<div class="row">
		<div class="col-lg-12 " style="border-bottom: 1px solid #ccc;margin-bottom: 20px;padding-left: 2px;"><h3 class="head_category_title">blog</h3></div>
			<?php foreach ($blog as $p):?>
			<div class="col-lg-12">
					<div class="col-lg-3" style="background: #fff;border-radius: 4px; margin-right: 2px;text-align:center;">
						<div class="col-lg-12" style="padding: 20px;">
							<img src="<?php echo base_url()?><?php echo $p->image ;?>" class="img-responsive" height="400"/>
						</div>
						<div class="col-lg-12" style="padding: 20px;">
							<p><?php echo $p->deskripsi; ?></p>
						</div>
					</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
