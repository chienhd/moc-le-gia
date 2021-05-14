<div class="col-xs-12 col-sm-3">
    <div class="related-post">
        <div class="title"><span>Tin tức bạn quan tâm</span></div>
        <ul class="row">
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
                        'posts_per_page' => '4',
                    );

                    $related_cats_post = new WP_Query($query_args);
                    $i = 1;
                    while ($related_cats_post->have_posts()) :
                        $related_cats_post->the_post();
            ?>
            <li class="col-xs-6 col-sm-12 col-md-12 related-post__wrap">
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
            </li>

            <?php
                        $i++;
                    endwhile; // End of the loop.
                    wp_reset_postdata(); 
                endif
                ?>

        </ul>
    </div>
</div>