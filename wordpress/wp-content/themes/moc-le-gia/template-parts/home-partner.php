<div class="home-partner">
	<div class="container">
		<div class="wrap-title">
			<h2 class="h2-title"><?php echo prefix_get_option('home-partner-title'); ?></h2>
		</div>

		<?php 
		$partner = prefix_get_option('home-partner-gallery');
		if(isset($partner) && !empty($partner)):
		    $gallery_ids = explode(',', $partner);
		?>
		<div class="home-partner-carousel owl-carousel owl-theme">
			<?php foreach ($gallery_ids as $gallery_item_id): ?>
	        <div class="item">
	        	<?php echo wp_get_attachment_image($gallery_item_id, 'full'); ?>
	        </div>
	        <?php endforeach; ?>
		</div>
	  	<?php
        endif;
        ?>	
	</div>	
</div>

<style type="text/css">
	.home-partner {
		background: #0e0e0e;
		padding-bottom: 60px;
		padding-top: 60px;
	}
	.home-partner .wrap-title {
	    margin-bottom: 60px;
	}
	.home-partner .wrap-title .h2-title {
	    font-size: 24px;
	    line-height: 25px;
	    color: #fff;
	    padding: 0px 0px 11px 0px;
	    margin: 0px 0px 30px 0px;
	    text-transform: uppercase;
	    color: #fff;
	    text-align: center;
	    position: relative;
	}
	.home-partner .wrap-title .h2-title::after {
	    width: 25%;
	    max-width: 285px;
	    left: 50%;
	    -webkit-transition: translateX(-50%);
	    -moz-transition: translateX(-50%);
	    -o-transition: translateX(-50%);
	    transform: translateX(-50%);
	    position: absolute;
	    content: "";
	    bottom: -10px;
	    height: 1px;
	    background: #edc14f;
	    margin: 0 auto;
	}
	   

	@media (max-width: 767.98px) {
		.home-partner .wrap-title {
			margin-bottom: 45px;
		}
	}

</style>