<?php
/**
 * The template for displaying home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moc-le-gia
 */

get_header();
?>
    <main id="primary" class="site-main">
        <?php
            get_template_part('template-parts/home', 'banner');
            get_template_part('template-parts/home', 'menu-second');
            get_template_part('template-parts/home', 'collect');
            get_template_part('template-parts/home', 'product');
            get_template_part('template-parts/home', 'news');
            get_template_part('template-parts/home', 'video');
            get_template_part('template-parts/home', 'client');
            get_template_part('template-parts/home', 'interior-knowledge');
            get_template_part('template-parts/home', 'partner');
            get_template_part('template-parts/home', 'contact-form');
        ?>
    </main><!-- #main -->
<?php
/*get_sidebar();*/
get_footer();
