
<div class="content" style="opacity: 0.9; margin-bottom: 10px;">
<div class="row">
<div class="col-lg-12" style="border-bottom: 1px solid #ccc">
	<?php foreach ($title_kategori as $title) :?>
	<h3 class="head_category_title"><?php echo strtoupper($title->nama_kategori); ?></h3>
	<?php endforeach;?>
</div>
<?php foreach ($warung_list as $warung) :?>
	<div class="col-lg-3" style="width:300px; height: 280px;padding: 5px; margin-bottom: 10px;">
				<div class="col-lg-12" style="padding: 0px;">
				<a href="<?php echo base_url()?>warung/detail_warung/<?php echo $warung->id_warung?>"><div class="" style="padding: 0px;">
					<img class="img-responsive" src="<?php echo base_url() ?>/<?php echo $warung->image;?>" />
				</div></a>
				</div>
				<div class="col-lg-12" style="background: #fff;padding-bottom: 20px; padding-top: 20px; padding-left: 15px;color: #cc3333; font-size: 12px;">
					<label><?php echo strtoupper($warung->nama_warung) ?> </label>
					<i class="fa fa-heart fa-lg pull-right"></i>
				</div>
			</div>
<?php endforeach;?>

</div>
</div>

	<div class="content" style="margin-bottom: 20px;">

		<div class="row">
			<div class="col-lg-12" style="border-bottom: 1px solid #ccc;margin-bottom: 20px;padding-left: 2px;"><h3 class="head_category_title">WARUNG SATE POPULER</h3></div>
			<?php foreach ($warungs as $war) {?>
			<div class="col-lg-3" style="width:300px; height: 280px;padding: 5px; margin-bottom: 10px;">
				<div class="col-lg-12" style="padding: 0px;">
				<a href="<?php echo base_url()?>warung/detail_warung/<?php echo $war->id_warung?>"><div class="" style="padding: 0px;">
					<img class="img-responsive" src="<?php echo base_url() ?>/<?php echo $war->image;?>" />
				</div></a>
				</div>
				<div class="col-lg-12" style="background: #fff;padding-bottom: 20px; padding-top: 20px; padding-left: 15px;color: #cc3333; font-size: 12px;">
					<label><?php echo strtoupper($war->nama_warung) ?> </label>
					<i class="fa fa-heart fa-lg pull-right"></i>
				</div>
			</div>
			<?php } ?> 

		</div>
		
	</div>

