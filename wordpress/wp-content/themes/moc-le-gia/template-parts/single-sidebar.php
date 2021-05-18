<div class="col-xs-12">
    <div class="related-post">
        <div class="title"><span>CÓ THỂ BẠN QUAN TÂM</span></div>
        <div class="row">
            <?php
                $post_id = get_the_ID();
                $current_post_type = get_post_type($post_id);
                $cat = wp_get_post_categories($post_id);
                if(isset($cat[0])) :
                   $cat_id = $cat[0];
                    $query_args = array(
                        'category__in' => $cat_id,
                        'post_type' => $current_post_type,
                        'post__not_in' => array($post_id),
                        'posts_per_page' => '6',
                    );

                    $related_cats_post = new WP_Query($query_args);
                    $i = 1;
                    while ($related_cats_post->have_posts()) :
                        $related_cats_post->the_post();
            ?>
            <div class="col-md-4 col-xs-6 related-post__wrap">
                <figure class="featured-thumbnail thumbnail">
                    <a rel="nofollow" href="<?php echo get_the_permalink(); ?>">
                        <img loading="lazy"
                             alt="<?php echo get_the_title(); ?>"
                             class="lazyload ls-is-cached lazyloaded "
                             src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>">
                    </a>
                </figure>
                <div class="content">
                    <a rel="nofollow" href="<?php echo get_the_permalink(); ?>"
                       title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                </div>
            </div>

            <?php
                        $i++;
                    endwhile; // End of the loop.
                    wp_reset_postdata(); 
                endif
                ?>

        </div>
    </div>
</div>