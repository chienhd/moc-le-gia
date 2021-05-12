<!-- https://noithatkenli.vn/wp-content/uploads/2021/01/vi-bien-dao-xanh-265x175.jpg -->
<section class="wrap-home-carousel-news">
	<div class="container">
		<div class="wrap-title"><h2 class="title"><?php echo prefix_get_option('home-news-title'); ?></h2></div>
		<?php
			$query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby' => 'ID',
                                'post__in' => prefix_get_option('home-news-select-post')
                            )
                        );
			if($query->have_posts()) {
		 ?>
	    <div class="home-carousel-news owl-carousel owl-theme">
	    	<?php 
	    		while ($query->have_posts()) {
                    $query->the_post();
	    	?>
	        <div class="item">
	        	<div class="home-carousel-news__image">
	        		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>" alt="<?php echo get_the_title(); ?>">
	        	</div>
	        	<div class="home-carousel-news__info">
	        		<a href="<?php echo esc_url(get_permalink()) ?>"><?php echo get_the_title(); ?></a>
	        		<div class="excerpt">
	        			<?php echo get_the_excerpt(); ?>                                     
	        		</div>
	        	</div>
	        </div>
	    	<?php } ?>
	    </div>

	    <?php 
			}	
	     ?>
    </div>
</section>