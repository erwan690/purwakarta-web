<div class="container">
	<div class="content">
		<div class="row">
			<ul>
			<?php foreach ($warung as $w):?>
			<li>
				<img src="<?php echo base_url() ?><?php echo $w->image ?>"/>
				<a href="<?php echo base_url() ?>"><?php echo $w->nama_warung ?> </a>
			</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>