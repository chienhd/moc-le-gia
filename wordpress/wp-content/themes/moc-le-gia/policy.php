<?php
/**
 * Template Name: Policy
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>
<style type="text/css">
	 .category-banner {
            height: auto;
            padding-bottom: 36%;
            overflow: hidden;
            position: relative;
            margin-top: 77px;
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

        #policy h1 {
		    font-size: 24px;
		    padding-bottom: 10px;
		    border-bottom: 1px solid #e4e4e4;
		    font-weight: 600;
		    margin-top: 30px;
		    margin-bottom: 25px;
		}
		h2, .h2 {
		    font-size: 30px;
		}
		h3, .h3 {
		    font-size: 24px;
		}
		h1, .h1, h2, .h2, h3, .h3 {
		    margin-top: 20px;
		    margin-bottom: 10px;
		}
		h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
		    font-family: inherit;
		    font-weight: 500;
		    line-height: 1.1;
		    color: inherit;
		}
		p {
		    margin: 0 0 10px;
		}
		#single-content {
			margin-bottom: 25px;
			color: #666;
		}
		@media(max-width: 991.98px) {
			 .category-banner {
			 	margin-top: 60px;
			 }
		}
</style>
	<main id="policy" class="page-body-content">
        <?php if(get_the_post_thumbnail_url()): ?>
            <section id="slideshow">
                <div class="category-banner">
                    <img class="img-banner" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
            </section>
        <?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();
		?>
		<div class="container">
		    <div class="row">
		        <div class="col-xs-12">
		            <h1><?php echo get_the_title(); ?></h1>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-xs-12">
		        	<div id="single-content" class="single-content">
			            <?php
			            the_content(
			                sprintf(
			                    wp_kses(
			                    /* translators: %s: Name of current post. Only visible to screen readers */
			                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'client'),
			                        array(
			                            'span' => array(
			                                'class' => array(),
			                            ),
			                        )
			                    ),
			                    wp_kses_post(get_the_title())
			                )
			            );

			            wp_link_pages(
			                array(
			                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'client'),
			                    'after' => '</div>',
			                )
			            );
			            ?>
			        </div><!-- .entry-content -->
		        </div>
		    </div>
	    </div>

		<?php	
			// If comments are open or we have at least one comment, load up the comment template.
		endwhile; // End of the loop.
		?>

		<?php
			get_template_part('template-parts/home', 'interior-knowledge');
            get_template_part('template-parts/home', 'partner');
            get_template_part('template-parts/home', 'contact-form');
		 ?>
	</main><!-- #main -->

<?php
get_footer();
