<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="category__product-item">
        <?php if(get_field('special_product')){ ?>
        <div class="quick-view">
            <button class="open-quick-view woodmart-tltp" data-id="<?php echo get_the_ID(); ?>">
                <span class="woodmart-tooltip-label">Xem nhanh</span><i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <?php } ?>
        <figure class="featured-thumbnail thumbnail ">
            <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>">
               <img alt="<?php echo get_the_title(); ?>" dclass="lazyload lazyloaded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
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

