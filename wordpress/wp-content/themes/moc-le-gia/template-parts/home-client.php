<div class="wrap-home-client">
	<div class="container">
		<div class="wrap-title"><h2 class="h2-title"><?php echo prefix_get_option('home-client-title'); ?></h2></div>
		<div class="home-carousel-client owl-carousel owl-theme">
			<?php 
				$client = prefix_get_option('home-client-group');
				if(!empty($client)) {
					foreach ($client as $key => $value) {
			?>
	        <div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="<?php echo $value['image']['thumbnail']; ?>" alt="<?php echo $value['image']['title']; ?>">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="<?php echo $value['link']; ?>" class="home-client__link-title"><?php echo $value['name']; ?></a>
	        		<div class="home-client__exceprt">
	        			<?php echo $value['desc']; ?>                                         
	        		</div>
	        	</div>
	        </div>
	        <?php
	        		}
	        	}
	        ?>
	    </div>
	</div>
</div>

<style type="text/css">
	.home-carousel-client .owl-nav {
		display: block !important;
	}
	.home-carousel-client .owl-nav button {
		width: 33px;
		height: 33px;
	}
</style>