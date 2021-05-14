<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

        .breadcrumbs {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .breadcrumbs a {
            color: #edc14f !important;
        }

        .single__content .title-section {
            margin-bottom: 30px;
        }

        .single__content .title-header {
            font-size: 35px;
            color: #000;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .related-post span {
            font-size: 20px;
            color: #000;
        }

        .related-post .title {
            text-transform: uppercase;
            margin: 40px 0 20px 0;
            border-bottom: 1px solid #e6e6e6;
            padding: 0 0 15px 0;
        }

        .related-post li a {
            font-weight: 500;
            color: #333;
            font-size: 20px;
        }

        .related-post ul {
            margin-left: 0;
            margin-right: 0;
        }

        .related-post li a {
            font-size: 14px;
        }

        .related-post li {
            padding: 15px 0px;
            border-top: 1px solid #e0e0e0;
        }

        .related-post li .content {
            margin-bottom: 0;
        }

        .related-post li:nth-child(1) {
            border-top: none;
            padding-top: 0;
        }

        .related-post li .content {
            margin: 10px 0px;
            text-align: left;
        }

        .related-post ul {
            list-style: none;
            padding: 0px;
            margin: 0px -10px;
        }

        .related-post .thumbnail {
            margin: 0px 0px 0px 0px;
		    padding: 0;
		    border: none;
		    border-radius: 0;
		    height: 0;
		    background: none;
		    position: relative;
		    padding-bottom: 66.6%;
		    overflow: hidden;
        }
         .related-post .thumbnail > a {
         	position: absolute;
         	top: 0;
         	left: 0;
         	width: 100%;
         	height: 100%;
         	display: block;
         }
        .related-post__wrap:hover a {
        	color: #edc14f !important;
        }
        .related-post li a:hover {
            color: #edc14f !important;
        }

        .post-content a {
            color: #edc14f !important;
        }

        .post-content h2, .post-content h3, .post-content h4, .post-content h5 {
            color: #000;
        }

        .post-content h2, .post-content .h2 {
            font-size: 25px;
        }

        .post-content h1, .post-content .h1, .post-content h2, .post-content .h2, .post-content h3, .post-content .h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

         .post-content img {
         	margin-left: auto;
         	margin-right: auto;
         	display: block;
         }

        .post-content h1, .post-content h2, .post-content h3, .post-content h4, .post-content h5, .post-content h6,
        .post-content .h1, .post-content .h2, .post-content .h3, .post-content .h4, .post-content .h5, .post-content .h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }
        .single-single_readmore {
        	margin-top: 30px;
        	padding-bottom: 30px;
        }
        .single-single_readmore  a {
			color: #f9c339 !important;
        }
    </style>
    <main id="single" class="site-single">
        <div class="wrap-category-banner">
            <div class="category-banner">
                <img class="img-banner" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
            </div>
        </div>

        <div class="container">
        	<?php the_breadcrumb() ?>
        </div>

        <div class="single__content">
            <div class="container">
                <section class="title-section">
                    <h1 class="title-header" itemprop="headline"><?php echo get_the_title(); ?></h1>
                    <div class="mota_title"></div>
                </section>

                <div class="row">
                    <div class="col-xs-12 col-sm-9">
                        <div class="post-content">
                        	<?php
                        		echo get_the_content();
                        	?>
                        </div>
                         <div class="single-single_readmore">
				            <p><?php echo get_next_post_link('<span>👉 Xem thêm: %link</span>'); ?></p>
				            <p><?php echo get_previous_post_link('<span>👉 Xem thêm: %link<span>'); ?></p>
				        </div>
                    </div>

                    <?php
                    get_template_part('template-parts/single', 'sidebar');
                    ?>
                </div>
            </div>

        </div>
        <?php
        get_template_part('template-parts/home', 'partner');
        get_template_part('template-parts/home', 'contact-form');
        ?>
    </main><!-- #main -->

<?php
get_footer();
