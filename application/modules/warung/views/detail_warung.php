
	<div class="content">
		<div class="row">
			<div class="detail_warung col-lg-12">
			<?php foreach ($warung as $x): ?>

			
			<div class="row">
				<div class="col-lg-12 title_warung" style="padding: 20px;border-bottom: 1px solid #ccc;margin-bottom: 20px;"><?php echo $x->nama_warung;?></div>
				<div class="col-lg-6">
					<div class="col-lg-12" style="text-align: center; margin-bottom: 20px;">
						<img src="<?php echo base_url() ?><?php echo $x->image ?>"/>
					</div>

					<div class="col-lg-12" style="min-height: 100px;">
						<div class="col-lg-12" style="margin-bottom:20px;">Galeri</div>
							<div class="owl-carousel">
							<?php foreach ($galeri_warung as $gw): ?>
							<div class="item">
							<div class="col-lg-12" id="links">
							
									<a href="<?php echo base_url();?><?php echo $gw->image?>" class="fancybox" rel="group"><img src="<?php echo base_url();?><?php echo $gw->image?>" height="60"/></a>
							
							</div>
							</div>
							<?php endforeach; ?>
							</div>
	
					</div>
					<div class="col-lg-12" style="padding-top: 30px;">
						 <button data-toggle="collapse" class="btn col-lg-12" data-target="#demo" style="margin-bottom: 20px;background:#cc3333;color:#fff">Info Selengkapnya</button>

						<div id="demo" class="collapse">
						<ul>

							<?php foreach ($fasilitas_warung as $fs): ?>
							<li>
		
							<?php echo $fs->nama_fasilitas;?>
		
							</li>
							<?php endforeach; ?>
						</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
							<div class="detail_warung col-lg-12">
							<?php foreach ($alamat_warung as $aw): ?>
							<p><i class="fa fa-map-marker fa-lg"style="margin-right: 10px;"></i> <?php echo $aw->alamat;?>, <?php echo $aw->kota;?> <?php echo $aw->provinsi;?></p>
							<?php endforeach; ?>
							<p><i class="fa fa-phone fa-lg"style="margin-right: 10px;"></i> <?php echo $x->telephone;?></p>
							<p><i class="fa fa-list fa-lg"style="margin-right: 10px;"></i> <?php echo $x->deskripsi;?></p>

							</div>
							<div class="detail_warung col-lg-12">						
							<div class="col-lg-12" style="padding-left: 0px;border-bottom: 1px solid #ccc;margin-bottom: 10px">Menu</div>
		  					<div class="owl-carousel">
							<?php foreach ($menu_warung as $mw): ?>
							<div class="item">
							<div class="col-lg-12" id="links">			
								<a href="<?php echo base_url();?><?php echo $mw->image?>" class="fancybox" rel="group"><img src="<?php echo base_url();?><?php echo $mw->image?>" height="60"/></a>				
							</div>
							</div>
							<?php endforeach; ?>
							</div>
							</div>
							<div class="detail_warung col-lg-12">
							<div class="col-lg-12" style="padding-left: 0px;border-bottom: 1px solid #ccc;margin-bottom: 10px">Peta</div>
								<?php foreach ($warung as $x): ?>
							<iframe class="col-lg-12" style="min-height: 220px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d<?php echo $x->latitude; ?>!2d107.47908082918607!3d<?php echo $x->longitude; ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjgnMDQuNCJTIDEwN8KwMjgnNDYuNyJF!5e0!3m2!1sid!2sus!4v1460116890521"  frameborder="0" style="border:0" allowfullscreen></iframe>
								<?php endforeach; ?>
						</div>
				</div>
				<div class="col-lg-12">

				</div>
				</div>
				<div class="row">



				<div class="col-lg-12">
					<div class="row">
					<?php foreach ($comments as $comment): ?>
						<?php $avatar = $this->db->get_where('user', array('id_user' => $comment->id_user))->row()->avatar; ?>
						<div class="col-lg-12">
							<div class="col-lg-8">
								<div class="col-lg-4" style="text-align:center;">
								<img src="<?php echo base_url() ?><?php echo $avatar; ?>" width="100">
								</div>
								<div class="col-lg-8" style="border-left: 1px solid #ccc;padding-bottom: 20px;padding-top:20px;">
								<?php if(!empty($comment->image)){ ?>
								<div class="col-lg-12" style="text-align:center;">
									<img src="<?php echo base_url() ?><?php echo $comment->image; ?>" width="100">
								</div>
								<?php } ?>
								<div class="col-lg-12" style="border: 1px solid #ccc;padding: 10px;margin:0px;">
									<?php echo $comment->testimonial; ?>
								</div>
								</div>
							</div>
						</div>

					<?php endforeach; ?>

					</div>

					<?php if($this->session->userdata('is_logged_in') == false) { ?>
					<div class="col-lg-12">
					<table>
					<center><strong>Login dulu dong brosis !!!</strong></center>
					</table>
					</div>

					<?php } else { ?>
					<form action="<?php echo base_url();?>warung/insert_comment" enctype="multipart/form-data" method="post">
				     <table>
				      <div class="form-group">
				          <div class="col-md-8" style="margin-bottom:25px;">
				            <input type="hidden"  name="id_user" id="id_user" value="<?php echo $this->session->userdata('user_id') ?>" class="form-control"  />
				            <input type="hidden"  name="id_warung" id="id_warung" value="<?php echo $id_warung; ?>" class="form-control"  />
				          </div>
				      </div>

				      <div class="form-group">
				          <div class="col-md-8" style="margin-bottom:25px;">
				          IMAGE UPLOAD
				            <input type="file"  name="image" id="image" style="padding-bottom: 40px;" class="form-control"  />
				            
				          </div>
				      </div>
				      <div class="form-group"> 
				          <div class="col-md-8" style="margin-bottom:25px;">
				          COMMENT
				            <textarea  name="comment" id="comment" class="form-control" ></textarea>
				          </div>
				      </div>

				      <div class="form-group">         
				        <div class="col-md-8">
				       
				          <button name="submit" type="submit" value="Save" class="btn btn-primary pull-right" style="background: #cc3333;border: none;padding: 15px;">COMMENT</button>
				        </div>
				      </div>
				    </table>
					</form>
					<?php } ?>
				</div>

				                <!--Disqus Comments Plugin-->
                <div class="col-lg-10 col-lg-offset-1">
					<div id="disqus_thread"></div>
					<script>

					/**
					 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
					/*
					var disqus_config = function () {
					    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
					    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					*/
					(function() { // DON'T EDIT BELOW THIS LINE
					    var d = document, s = d.createElement('script');
					    s.src = '//maranggiku.disqus.com/embed.js';
					    s.setAttribute('data-timestamp', +new Date());
					    (d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                </div>
				</div>
				
				
			

			
			<?php endforeach; ?>
			
		</div>
	</div>
</div>

                  
<div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>

    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="fa fa-angel-left fa-2x"></i>
                        Previous
                    </button>
                     <button type="button" class="btn btn-primary next">
                        Next
                        <i class="fa fa-angel-right fa-2x"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
	
.owl-theme .owl-controls .owl-page {
    display: inline-block;
}
  .owl-theme .owl-controls .owl-page span {
    background: none repeat scroll 0 0 #869791;
    border-radius: 20px;
    display: block;
    height: 15px;
    margin: 5px 7px;
    opacity: 0.5;
    width: 12px;
}

</style>


<script type="text/javascript">

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items:4,
    dots:true,
    autoPlay: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

</script>

<script>
    window.preview = function (input) {
        if (input.files && input.files[0]) {
            $("#previewImg").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImg").append("<br><br><div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                 
                }
            });
        }
    }
</script>
  <script type="text/javascript">
    $(function() {
      $('.summernote').summernote({
        height: 200
      });


    });
  </script>
