<div class="container">
	<div class="content">
		<div class="row">
			<ul>
			<?php foreach ($menu as $m):?>
			<li>
				<img src="<?php echo base_url() ?><?php echo $m->image ?>"/>
			</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>