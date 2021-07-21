<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moc-le-gia
 */

get_header();

$cat = get_category(get_query_var('cat'));
$cat_id = $cat->cat_ID;
?>
    <main id="category-news" class="site-category-news">
        <?php
        $banner = get_field('image-banner-category', $cat->taxonomy . '_' . $cat->term_id);
        if ($banner) {
            ?>
            <div class="wrap-category-banner">
                <div class="category-banner">
                    <img class="img-banner" src="<?php echo $banner['url']; ?>"
                         alt="<?php echo $banner['filename']; ?>"/>
                </div>
            </div>
        <?php } ?>

        <div class="container">
            <section class="category__title-section">
                <h1 class="title-header"><?php echo $cat->name; ?></h1>
                <div class="mota_title">
                    <?php
                    $description = get_field('description-product-category-top', $cat->taxonomy . '_' . $cat->term_id);
                    if (!empty($description)) {
                        echo $description;
                    }
                    ?>
                </div>
            </section>
        </div>

        <div class="wrap-news__content">
            <div class="container">
                <div class="row">
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/category', 'post');

                        endwhile;
                        my_get_the_category_navigation();
                    endif;

                    ?>
                </div>
                <div class="row">
                    <?php
                    $content = get_field('description-product-category-bottom', $cat->taxonomy . '_' . $cat->term_id);
                    if (!empty($content)) {
                        echo $content;
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php
        get_template_part('template-parts/home', 'interior-knowledge');
        get_template_part('template-parts/home', 'partner');
        get_template_part('template-parts/home', 'contact-form');
        ?>

    </main><!-- #main -->

<?php
get_footer();
?>
<style type="text/css">
    .category-banner {
        height: auto;
        padding-bottom: 36%;
        overflow: hidden;
        position: relative;
        margin-top: 77px;
    }
    @media(max-width: 991.98px) {
         .category-banner {
            margin-top: 77px;
         }
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

    .category__title-section {
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .category__title-section .title-header {
        font-size: 35px;
        color: #000;
        font-weight: 600;
        line-height: 1.2;
    }

    .category__title-section .mota_title {
        text-align: center;
        font-size: 20px;
        color: #666;
        margin: 10px 5px;
    }

    .wrap-news__content {
        margin-top: 30px;
    }

    .cate-news__content .featured-thumbnail {
        margin: 0px 0px 0px 0px;
        padding: 0;
        border: none;
        border-radius: 0;
        background: none;
        height: 0;
        position: relative;
        padding-bottom: 68.6%;
        overflow: hidden;
    }

    .cate-news__content .featured-thumbnail > a {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .cate-news__content .featured-thumbnail > a > img {
        margin-left: auto;
        display: block;
        width: 100%;
        height: auto;
        margin-right: auto;
        object-fit: cover;
    }

    .cate-news__content {
        margin-bottom: 20px;
    }

    .cate-news__content .post_content {
        min-height: 144px;
    }

    .cate-news__content .post-title {
        margin: 10px 0;
        text-align: center;
    }

    .cate-news__content .post-title a {
        color: #000;
        font-weight: 600;
        font-size: 16px;
    }
    .cate-news__content:hover a,
    .cate-news__content .post-title a:hover {
        color: #edc14f !important;
    }

    .cate-news__content .excerpt {
        font-size: 14px;
        line-height: 22px;
        color: #666;
        text-align: justify;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    nav#pagination {
        clear: both;
        float: left;
        margin-top: 20px !important;
        margin-bottom: 30px;
    }

    nav#pagination span {
        font-size: 15px;
        color: #000;
        float: left;
        line-height: 2.1;
    }

    nav#pagination .page-numbers.current {
        background: #000 none repeat scroll 0 0 !important;
        color: #fff !important;
        line-height: inherit;
    }

    nav#pagination .page-numbers:hover {
        color: #fff !important;
        background: #000 !important;
        text-decoration: none !important;
    }

    .page-numbers {
        background: #fff;
        color: #000 !important;
        margin-left: 5px;
        padding: 3px 10px;
        float: left;
        height: 33px;
        overflow: hidden;
        border: 1px solid #e6e6e6;
        margin-bottom: 5px;
    }

    @media (max-width: 767.98px) {
        nav#pagination span:first-child {
            display: none;
        }
    }

</style>
