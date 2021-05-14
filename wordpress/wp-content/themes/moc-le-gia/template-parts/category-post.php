<div class="col-md-4 col-sm-6">
    <div class="cate-news__content">
       <figure class="featured-thumbnail">
          <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>">
            <img alt="<?php echo get_the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>">
          </a>
       </figure>
       <!-- Post Content -->
       <div class="post_content">
            <div class="post-title">
                <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
            </div>
          <div class="excerpt">
             <?php echo get_the_excerpt(); ?>             
          </div>
       </div>
    </div>
</div>