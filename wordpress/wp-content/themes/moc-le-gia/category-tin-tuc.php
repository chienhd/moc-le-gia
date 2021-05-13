<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moc-le-gia
 */

get_header();

$news = get_category_by_slug('tin-tuc');

$categories = get_categories(
    array('parent' => $news->cat_ID)
);
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
    }
     .cate-news__content .featured-thumbnail >a {
        display: block;
     }
    .cate-news__content .featured-thumbnail >a >img {
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

    .pagination {
        margin: 20px auto;
        display: table;
        clear: both;
    }
    .pagination ul li {
        display: inline-block;
    }
    .pagination ul li.active a {
        background: #1e1e1d;
        color: #fff;
    }

    .pagination ul li a {
        display: block;
        padding: 0px 10px;
        border: 1px solid #e6e6e6;
        color: #000;
        margin: 0px 5px 0px 5px;
    }


</style>
<main id="category-news" class="site-category-news">

    <div class="wrap-category-banner">
        <div class="category-banner">
            <img class="img-banner" src="https://noithatkenli.vn/wp-content/uploads/2021/01/Sofa.jpg" />
        </div>
    </div>

    <div class="container">
        <section class="category__title-section">
            <h1 class="title-header"><?php echo $news->name; ?></h1>
            <div class="mota_title"><p>Cập nhật nhanh chóng, chính xác & đầy đủ các tin tức về Nội thất, tin tức báo chí & tin tức thị trường. </p>
            </div>
        </section>
    </div>

    <div class="wrap-news__content">
        <div class="container">
            <div class="row">
                <?php
                    $query = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'order' => 'DESC',
                            'orderby' => 'ID',
                            'cat' => $news->cat_ID,
                            'posts_per_page' => 6
                        )
                    );
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="cate-news__content">
                       <figure class="featured-thumbnail">
                          <a href="<?php echo esc_url(get_permalink()) ?>">
                            <img alt="<?php echo get_the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                          </a>
                       </figure>
                       <!-- Post Content -->
                       <div class="post_content">
                            <div class="post-title">
                                <a href="<?php echo esc_url(get_permalink()) ?>"><?php echo get_the_title(); ?></a>
                            </div>
                          <div class="excerpt">
                            <?php echo get_the_excerpt(); ?>        
                          </div>
                       </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="pagination pagination__posts"><ul><li class="active"><a href="#">1</a></li><li><a href="https://noithatkenli.vn/blogs/page/2" class="inactive">2</a></li>...<li><a href="https://noithatkenli.vn/blogs/page/46" class="inactive">46</a></li><li class="next"><a href="https://noithatkenli.vn/blogs/page/2">Next</a></li><li class="last"><a href="https://noithatkenli.vn/blogs/page/46">Last</a></li></ul></div>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
