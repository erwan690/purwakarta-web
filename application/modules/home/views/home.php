

	<div class="content" style="opacity: 0.9; margin-bottom: 10px;">

			<div class="search">

				<div class="form-group" style=" vertical-align:middle;justify-content: center;">
					
					<div class="col-lg-12 col-xs-12">
						<div class="col-lg-3 hidden-xs" style="font-family: 'logo'; color: #666; font-size: 22px;" >
							<div class="pull-left">LAPAR ???</div>
						</div>
						<div class="col-lg-9 col-xs-12">
							<div class="input-group">

			                    <input name="search_data" id="search_data" class="form-control" placeholder="Masukan nama warung" type="text" onkeyup="ajaxSearch();">

			                    <span  class="input-group-addon"><a href="#"><i style="margin-left:0px;" class="fa fa-search"></i></a></span>

		                  	</div>
		                  	<div id="suggestions">
					            <div id="autoSuggestionsList">  
					            </div>
					        </div>
	                  	</div>
                  	</div>
				</div>

			</div>
	</div>

	</div>
	<div class="content col-lg-12 hidden-xs" style="min-height: 400px;margin-bottom: 20px;background: #fff9cc;padding: 0px;z-index: 9;">
		<div id="carousel-example-generic" class="carousel slide slide_bg" data-ride="carousel">
  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active" style="height: 400px;padding-top: 50px;" >
		     <center><img class="img-responsive" src="<?php echo base_url() ?>/images/logos.png" width="400" style="margin-top: 40px;"/></center>
		      <div class="carousel-caption">
		        <h1 class="headline_slide">WIKISATE PERTAMA DI INDONESIA</h1>
		      </div>
		    </div>
		    <div class="item" style="height: 400px;padding-top: 50px;">
		    <div class="col-lg-12" style="text-align: center;padding-top: 50px;color: #fff">
		 	   <h1 class="headline_slide">NYARI TEMPAT SATE YANG PALING ENAK?</h1>
		 	   <button class="btn btn-primary">KLIK DISINI</button>
		 	 </div>
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
  
	</div>
	<div class="container" style="padding: 0px;">

	<div class="content" style="margin-bottom: 20px;">

		<div class="row">
			<div class="col-lg-12 " style="border-bottom: 1px solid #ccc;margin-bottom: 20px;padding-left: 2px;"><h3 class="head_category_title">WARUNG TEMATIK</h3></div>
			<?php foreach ($kategori as $kat) {?>
			<div class="col-lg-3 " style="width:300px; height: 280px;padding: 5px; margin-bottom: 10px;">
				<div class="col-lg-12" style="padding: 0px;">
					<a href="<?php echo base_url()?>category_warung/list_warung/<?php echo $kat->id_kategori?>" ><div style="text-align: center;">
						<img class="img-responsive" src="<?php echo base_url() ?>/<?php echo $kat->image;?>" />
					</div></a>
				</div>
				<div class="col-lg-12" style="background: #fff;padding-bottom: 20px; padding-top: 20px; padding-left: 15px;color: #cc3333; font-size: 12px;"><label><?php echo strtoupper($kat->nama_kategori) ?> </label></div>
			</div>
			<?php } ?> 

		</div>

	</div>


	<div class="content" style="margin-bottom: 20px;">

		<div class="row">
			<div class="col-lg-12" style="border-bottom: 1px solid #ccc;margin-bottom: 20px;padding-left: 2px;"><h3 class="head_category_title">WARUNG SATE POPULER</h3></div>
			<?php foreach ($warung as $war) {?>
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

	<div class="content menu-icon" style="margin-bottom: 20px;color:#666;padding:0px; ">
		<div class="row" style="padding:0px;">
			<div class="col-lg-12" style="border-bottom: 1px solid #ccc;padding-left: 2px;">
			<a href="<?php echo base_url() ?>promo/user_view_promo" style="color: #000;"><div class="col-lg-4 col-xs-4" style="margin-top: 20px;"><div class="col-lg-12" style="border: 1px dashed #666;padding: 100px;border-radius: 0px;height: 240px;vertical-align: middle;text-align:center" ><h3 style="font-family: 'WebFont';margin:0px;">CEK PROMO</h3></div></div></a>
			<a href="<?php echo base_url() ?>about/" style="color: #000;"><div class="col-lg-4 col-xs-4" style="margin-top: 20px;"><div class="col-lg-12" style="border: 1px dashed #666;padding: 100px;border-radius: 0px;height: 240px;vertical-align: middle;text-align:center" ><h3 style="font-family: 'WebFont';margin:0px;">ABOUT MARANGGI</h3></div></div></a>
			<div class="col-lg-4 col-xs-4" style="margin-top: 20px;"><div class="col-lg-12" style="border: 1px dashed #666;padding: 100px;border-radius: 0px;height: 240px;vertical-align: middle;text-align:center" ><h3 style="font-family: 'WebFont';margin:0px;">BLOG</h3></div></div>
		</div>
	</div>




</div>

<script type="text/javascript">
        function ajaxSearch() {
            var input_data = $('#search_data').val();
            if (input_data.length === 0) {
                $('#suggestions').hide();
            } else {

                var post_data = {
                    'search_data': input_data,
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>home/autocomplete/",
                    data: post_data,
                    success: function(data) {
                        // return success
                        if (data.length > 0) {
                            $('#suggestions').show();
                            $('#autoSuggestionsList').addClass('auto_list');
                            $('#autoSuggestionsList').html(data);
                        }
                    }
                });

            }
        }
</script>
<script type="text/javascript">
$('#mylink').ekkoLightbox(options);
</script>
<style type="text/css">
    #autoSuggestionsList > li {
         background: none repeat scroll 0 0 #F3F3F3;
         border-bottom: 1px solid #E3E3E3;
         list-style: none outside none;
         padding: 3px 15px 3px 15px;
         text-align: left;
    }
    #autoSuggestionsList > li a { color: #800000; }
    .auto_list {
         border: 1px solid #E3E3E3;
         border-radius: 5px 5px 5px 5px;
         position: absolute;
         width: 328.5px;
         z-index: 999;
         font-size: 20px;
    }
</style>