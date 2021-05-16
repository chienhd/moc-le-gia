<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="category__product-item">
        <figure class="featured-thumbnail thumbnail ">
            <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>">
               <img alt="<?php echo get_the_title(); ?>" dclass="lazyload lazyloaded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>">
           </a>
        </figure>
            <div class="post_content">
              <div class="post-title">
                <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>">
                  <?php echo get_the_title(); ?>
                  <span><?php echo get_field('add_product_brand_with_title'); ?></span>
              </a>
            </div>
        </div>
    </div>
</div>

