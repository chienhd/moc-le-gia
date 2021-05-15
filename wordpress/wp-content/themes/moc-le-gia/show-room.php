<?php
/**
 * Template Name: Show Room
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moc-le-gia
 */

get_header();
?>
<style type="text/css">
      .category-banner {
            height: auto;
            padding-bottom: 36%;
            overflow: hidden;
            position: relative;
        }

        .category-banner .img-banner {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            object-fit: cover;
        }
        .show-room-content {
            padding-top: 35px;
        }
        .show-room__title {
            margin-top: 0;
            font-size: 24px;
            color: #182633;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 30px;
        }
        .show-room__content ul {
            padding-left: 15px;
        }
        .show-room__content ul li {
            list-style-type: initial;
            color: #182633;
            font-size: 15px;
            margin-bottom: 5px;
        }
        p {
            margin: 0 0 10px;
        }
        #show-room__slider {
            margin-top: 30px;
            padding-top: 30px;
            padding-bottom: 30px;
            background: #222222;
        }
        .show-room__slider .owl-nav button {
            height: 33px;
            overflow: hidden;
        }
        .show-room__slider .owl-item,
        .show-room__slider .owl-item .item {
            height: 300px;
        }
        .show-room__slider .owl-item img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
</style>
<main id="show-room" class="site-show-room">
    <div class="wrap-category-banner">
        <div class="category-banner">
            <img class="img-banner" alt="show room" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" />
        </div>
    </div>
    <?php

    if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            ?>

            <div class="show-room-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                             <h1 class="show-room__title"><?php echo get_the_title(); ?></h1>
                             <div class="show-room__content">
                                 <?php echo get_the_content(); ?>
                             </div>
                        </div>
                         <div class="col-md-6">
                            <?php moc_le_gia_post_thumbnail(); ?>
                        </div>
                    </div>
                </div>
                <div id="show-room__slider" class="container-fluid">
                    <div class="show-room__slider owl-carousel owl-theme">
                       <?php 
                            if($variable = get_field('add_gallery_to_page')):
                            foreach ($variable as $key => $value) :
                        ?>
                       <div class="item">
                           <img src="<?php echo $value['url']; ?>" alt="<?php echo $value['filename']; ?>">
                       </div>
                       <?php 
                            endforeach;
                            endif;
                       ?>
                    </div>
                </div>
            </div>

             <?php
        endwhile;

    endif;

      
    ?>


    <?php 
        get_template_part('template-parts/home', 'partner');
        get_template_part('template-parts/home', 'contact-form');
    ?>
</main><!-- #main -->

<?php
get_footer();
