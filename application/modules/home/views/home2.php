<div class="container" style="padding-top: 20px;" >

	<div class="content" style=" opacity: 0.9; margin-bottom: 10px;">


	    	<div class="container-fluid">
	        <div class="container">
	          	<div class="navbar-header ">
	            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	              		<span class="sr-only">Toggle navigation</span>

	            	</button>
	          
	          	</div>
	          	<div id="navbar" class="navbar-collapse collapse" style="border: none;font-family: 'welcome'; margin-top: 10px;">
	            	<ul class="nav navbar-nav navbar-right">
	       			  		<li><a href="#" data-toggle="colpase" data-target="#signup" style="font-size: 11px;"><i class="fa fa-bars la" style="font-size: 25px; color:#333;"></i><br>menu</li>
	           				
	            	</ul>
	          	</div>
	         </div>
	         </div>
	   
	      


	</div>

	<div class="content col-lg-12 hidden-xs" style="margin-bottom: 20px;">
  
	  <div id="myCarousel" class=" carousel slide" data-ride="carousel" style="padding: 20px;">

	    <ol class="carousel-indicators">
	    <?php foreach($album as $a ):?>
	      <li data-target="#myCarousel" data-slide-to="<?php echo $a->id_album; ?>"  class="active"></li>
	    <?php endforeach;?>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner col-lg-12" role="listbox">
	    <?php foreach($album as $a ):?>
	      <div class="item col-lg-12 <?php if($a->id_album == 1) {echo "active";} else {echo "";} ?>">
	    	<?php foreach($slide as $s ):?>
	    	<?php if($a->id_album == $s->id_album) { ?>
	    	<div class="col-md-3" style="margin-right: 0px;">
	    	
	        <img src="<?php echo base_url() ?><?php echo $s->image ?>" width="250" height="145">
	       
	    	</div>
	    	 <?php } ?>
	        <?php endforeach;?>
	      </div>

	      <?php endforeach;?>
	
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>

       
	  </div>
	</div>

	<div class="content">
		<div class="row" style="margin:0px;padding:0px;">
			<div class="col-lg-7" style="margin:0px;padding:0px;">		
				<a href="#">
					<div class="button-1 col-lg-12">
					<div class="pb">NUANSA</div>
				</div>
			</a>
				<a href="#"><div class="button-2 col-lg-6" style="">
					<div class="pb">JOURNAL</div>
				</div></a>
				<a href="#"><div class="button-3 col-lg-6" style="">
				<div class="pb">PROMO</div>
				</div></a>
			</div>
			<div class="col-lg-5" style="margin:0px;padding:0px;">	
							<div class="col-lg-6 col-xs-12" style="background: #1e1919;height:550px;">
								<div class="col-lg-12 col-xs-6" style="max-height:275px;">
								<a href="#">
									<img class="image-icon col-lg-12" src="<?php echo base_url() ?>images/food-dome.png" />
								</a>
								</div>
							
								<div class="col-lg-12 col-xs-6" style="height:275px;">
								<a href="#">
									<img class="image-icon col-lg-12 " src="<?php echo base_url() ?>images/food-dome.png" >
								</a>
								</div>
							</div>
							<div class="col-lg-6" style="background: #333;height:550px;">
								<div class="col-lg-12" style="height:275px;">
							<a href="#">
								<img class="image-icon col-lg-12 " src="<?php echo base_url() ?>images/toko.png" >
							</a>
						</div>
						<div class="col-lg-12" style="height:275px;">
							<a href="#">
								<img class="image-icon col-lg-12 " src="<?php echo base_url() ?>images/review.png">
							</a>
							</div>
							</div>

			</div>
		</div>
	</div>

	<div class="content col-lg-12 hidden-xs" style="margin-bottom: 20px;background: #1e1e1e;margin:0px;padding:0px;height:100px;">
  
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding: 20px;height:100px;">

		  <div class="carousel-inner" role="listbox">
   	<?php foreach($partner as $p ):?>
		    <div class="col-md-3 carousel-item active" style="text-align:center;">
		
		      <img src="<?php echo base_url() ?><?php echo $p->image; ?>" width="50">
		 
		    </div>
 <?php endforeach; ?>
		  </div>
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

	<div class="content"  style="margin:0px;">

		<div class="row">
			<div class="col-lg-12">
			<div class="col-lg-4" style="text-align: center;padding: 50px; display: flex;
  justify-content: center;
  align-items: center;">
				<img width="350" class="img-responsive" src="<?php echo base_url(); ?>/images/mmm.png">
			</div>
			<div class="col-lg-8" style="background: #1e1e1e;padding:20px;color:#fff;">
				<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
				Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
				</p>

			</div>
		</div>
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

         position: absolute;
         width:100%;

    }
    #autoSuggestionsList{
         

    }
</style>