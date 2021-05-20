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

<main id="product" class="site-product">

	<div class="wrap-category-banner">
        <div class="category-banner">
            <img class="img-banner" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" />
        </div>
    </div>


	<div class="list_bienthe">
		<div class="list_bienthe-top">
			<section class="title-section">
                <h1 class="title-header" itemprop="headline"><?php single_post_title(); ?> </h1>
                <div class="mota_title"><?php echo get_field('add_description_afer_title'); ?></div>
            </section>

		    <div class="text_custom story_product panel-widget-style panel-widget-style-for-6921-0-0-0">
		    	<div class="so-widget-sow-editor so-widget-sow-editor-base">
					<div class="siteorigin-widget-tinymce textwidget">
						<?php echo get_the_excerpt(); ?>
					</div>
				</div>
			</div>
            <!-- Product carousel -->
            <?php 
            $product_id = get_the_ID();
            $product = new WC_product($product_id);
            $attachment_ids = $product->get_gallery_image_ids();
            if($attachment_ids) {
            ?>
			<div class="product-carousel owl-carousel owl-theme">
                <?php foreach ($attachment_ids as $key => $attachment_id) { ?>
				<div class="item">
					<img src="<?php echo wp_get_attachment_url( $attachment_id, 'medium_large' ); ?>" alt="<?php echo wp_get_attachment_url( $attachment_id, 'medium_large' ) ?>">
                    <div class="download-attachment" data-url="<?php echo get_field('add_upload_file')['url']; ?>"><img src="/wp-content/themes/moc-le-gia/assets/images/icon/down-white.svg"></div>
				</div>
                <?php } ?>
			</div>
            <?php } ?>
		</div>

        <?php 
        $product = wc_get_product( $product_id );
        ?>
        <div class="container">
            <div class="bienthe">
                <div class="row">
                    <div class="col col-md-5 col-12">
                        <?php
                        $price = $product->get_price();
                        if($price) {
                        ?>
                        <div class="title"><span>Giá bán</span></div>
                        <span class="amount"><bdi><?php echo number_format($price, 2, ".", ","); ?>&nbsp;<span class="">₫</span></bdi></span>
                        <?php } ?>            
                        <div class="mgg">
                            <?php echo get_field('add_description_price'); ?>
                        </div>
                    </div>
                    <div class="col col-md-2 col-12">
                    </div>
                    <div class="col col-md-5 col-12">
                        <?php echo get_field('add_description_price_right'); ?>
                    </div>
                </div>
               <!-- New form here -->
            </div>
        </div>

    </div>

    <!-- <div>
        <div class="container chitiet_sanpham ">
            <div class="chitiet_sanpham_inner">
                <?php if($brand = get_field('add_product_brand')) { ?>
                <div class="panel-grid-cell">
                    <div class="widget_text" data-index="0">
                        <div class="widget_text text_title">
                            <div class="widget-title"><span>Thương hiệu</span></div>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="" data-index="1">
                        <div class="textwidget">
                            <?php echo $brand; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if($detail = get_field('add_product_detail')) { ?>
                <div class="panel-grid-cell">
                    <div class="widget_text " data-index="2">
                        <div class="widget_text text_title">
                            <div class="widget-title"><span>Chi tiết sản phẩm</span></div>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="" data-index="3">
                        <div class="textwidget">
                            <?php echo $detail; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if($afterSales = get_field('add_after_sales')) { ?>
                <div class="panel-grid-cell">
                    <div class="widget_text " data-index="4">
                        <div class="widget_text text_title">
                            <div class="widget-title"><span>Hậu Mãi</span></div>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="" data-index="5">
                        <div class="textwidget">
                            <?php echo $afterSales; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div> -->
    <!-- <div>
       <div class="container video_sanpham">
            <div class="video_sanpham_inner">
                <?php if($video1 = get_field('add_video_1_intro_product')) { ?>
                <div class="panel-grid-cell">
                    <div class="" data-index="0">
                        <div class="textwidget" align="center">
                            <?php echo $video1; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if($video2 = get_field('add_video_2_intro_product')) { ?>
                <div class="panel-grid-cell">
                    <div class="" data-index="1">
                        <div class="textwidget" align="center">
                            <?php echo $video2; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
       </div>
    </div> -->
    <div class="tab_chitiet">
        <div class="container">
            <div class="bg_tap">
                <div id="tabs_list">
                    <ul>
                        <li class="active"><a class="title" aria-label="#cauchuyen">Câu chuyện sản phẩm</a></li>
                        <li><a class="title" aria-label="#haumai">Chính sách hậu mãi</a></li>
                        <li><a class="title" aria-label="#video_tap">Hướng dẫn bảo quản</a></li>
                    </ul>
                </div>
                <div class="tab_content_container">
                    <div id="cauchuyen" class="content_tab">
                       <?php echo get_the_content(); ?>
                    </div>
                    <div id="haumai" class="content_tab" style="display: none;">
                        <?php echo get_field('add_after_sales_policy'); ?>
                    </div>
                    <div id="video_tap" class="content_tab" style="display: none;">
                        <?php echo get_field('add_storage_instructions') ?>
                    </div>
                </div>
            </div>

           <?php
            $customerReviews = get_field('add_customer_reviews');
            if($customerReviews) {
            ?>
            <div class="baivietcodinh baivietcamnhan" role="toolbar">
                <h3 class="title"><span>Cảm nhận khách hàng</span></h3>
                <ul class="slide_camnhan owl-carousel owl-theme">
                    <?php 
                    $args = array(
                       'status' => 'publish',
                       'post__in' => $customerReviews
                    );
                    // The Query
                    $the_query = new WP_Query( $args );
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                        $the_query->the_post();
                    ?>
                    <li class="customer-review__item">
                        <figure class="featured-thumbnail">
                            <a rel="nofollow" href="<?php echo esc_url(get_permalink()) ?>" tabindex="0">
                                <img loading="lazy" alt="<?php echo get_the_title(); ?>" class="lazyload lazyloaded"
                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>">
                            </a>
                        </figure>
                        <div class="content">
                            <a href="<?php echo esc_url(get_permalink()) ?>" rel="nofollow" title="<?php echo get_the_title(); ?>" tabindex="0"><?php echo get_the_title(); ?></a>
                            <div class="excerpt">
                                <?php echo get_the_excerpt(); ?>                                                
                            </div>
                        </div>
                    </li>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

    <div class="sp_lienquan">
        <div class="container">
            <div class="baivietlienquan sp_lienquan_inner">
                <h3 class="title"><span>Sản phẩm liên quan</span></h3>
                <ul class="row">
                    <?php
                    $post_id = get_the_ID();
                    $categories = get_the_terms($post_id, 'product_cat');
                    $cat = ($categories[0])->slug;
                    $count = 0;
                    foreach ($categories as $key => $value) {
                        if($count < $value->count) {
                            $cat_id = $value->slug;
                            $count = $value->count;
                        }
                    }

                    $query_args = array(
                        'category' => array($cat),
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'post__not_in' => array($post_id),
                        'posts_per_page' => '8',
                    );

                    $related_cats_post = new WP_Query($query_args);
                    if($related_cats_post->have_posts()):
                    while ($related_cats_post->have_posts()) :
                        $related_cats_post->the_post();
                    ?>
                    <li class="col-sm-6 col-md-3">
                         <figure class="featured-thumbnail">
                            <a rel="nofollow" href="<?php echo esc_url(get_permalink()) ?>" tabindex="0">
                                <img loading="lazy" alt="<?php echo get_the_title(); ?>" class="lazyload lazyloaded"
                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>">
                            </a>
                        </figure>
                        <div class="content">
                            <a href="<?php echo esc_url(get_permalink()) ?>" rel="nofollow" title="<?php echo get_the_title(); ?>" tabindex="0">
                                <?php echo get_the_title(); ?>
                                <span><?php echo get_field('add_product_brand_with_title'); ?></span>
                            </a>
                            <!-- <div class="excerpt">
                                <?php //echo get_the_excerpt(); ?>                                                
                            </div> -->
                        </div>
                    </li>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </ul>
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
    .list_bienthe {
        background: #f2f2f2;
    }
    .download-attachment {
        position: absolute;
        background-color: rgba(152,152,152,.8);
        height: 47px;
        width: 47px;
        bottom: 10px;
        right: 15px!important;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        opacity: 0;
        z-index: 1;
    }
    
    .download-attachment > img {
        display: block;
        width: auto;
        height: 28px !important;;
        margin-top: 12px;
        margin-left: auto;
        margin-right: auto;
    }
    .product-carousel.owl-carousel.owl-theme.owl-loaded.owl-drag {
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #fff;
    }
    .product-carousel .owl-item {
        max-height: 650px;
        overflow: hidden;
    }
    .product-carousel .owl-item .item {
        height: 0;
        padding-top: 70%;
        position: relative;
        overflow: hidden;
    }
    .product-carousel .owl-item .item > img {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        display: block;
        width: 100%;
        height: 100%;
        opacity: 0.5;
        object-fit: cover;
    }
    .product-carousel .owl-item.active.center img {
        opacity: 1;
    }
    .product-carousel .owl-item.active.center:hover .download-attachment {
        cursor: pointer;opacity: 1;
    }
    .product-carousel .owl-prev {
        left: 15px;
    }
    .product-carousel .owl-next {
        right: 15px;
    }
    .product-carousel .owl-prev span, .product-carousel .owl-next span {
        display: none;
    }
    .product-carousel .owl-prev, .product-carousel .owl-next {
        width: 33px;
        height: 33px;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        display: block;
        border: 1px solid black;
        background: transparent;
    }
    .product-carousel .owl-prev:hover,
    .product-carousel .owl-next:hover {
        background: transparent !important;
    }
    .product-carousel .owl-next::before {
        content: "\f105" !important;
        font: normal normal normal 14px/1 FontAwesome !important;
        font-size: 60px !important;
        width: 30px;
        height: 40px;
        display: inline-block;
        line-height: 40px !important;
        color: #9f0000 !important;
    }
    .product-carousel .owl-prev::before {
        content: "\f104" !important;
        font: normal normal normal 14px/1 FontAwesome !important;
        font-size: 60px !important;
        width: 30px;
        height: 40px;
        display: inline-block;
        line-height: 40px !important;
        color: #9f0000 !important;
    }

    @media(max-width: 991.98px) {
        .product-carousel .owl-item .item {
            padding-top: 78%;
        }
    }

     /* --------------------------------------------- List bien the --------------------------------------------------- */

    .list_bienthe {
        background: #f2f2f2 !important;
    }
    .bienthe {
        padding: 30px 0;
    }
    .bienthe .title {
        color: #000;
        font-size: 20px;
        margin-bottom: 15px;
    }
    .bienthe .amount {
        font-size: 36px;
        color: #9f0000;
    }
    .bienthe small {
        margin-top: 15px;
        display: block;
        font-style: italic;
        font-size: 16px;
    }
    .mgg, .mgg p {
        color: #a44800;
        font-size: 16px;
        margin: 10px 5px;
        margin-left: 0;
        text-align: left;
    }
    /* --------------------------------------------- Chi tiet san pham --------------------------------------------------- */
    .chitiet_sanpham {
        padding: 30px 0px 40px 0px;
    }
    .chitiet_sanpham p {
        margin: 10px 5px;
    }
    .chitiet_sanpham_inner {
        display: flex;
        align-items: flex-start;
        -ms-flex-wrap: wrap;
        flex-wrap: nowrap;
        -ms-justify-content: space-between;
        justify-content: space-between;
    }
    .chitiet_sanpham_inner .panel-grid-cell {
        width: calc(33.3333% - ( 0.66666666666667 * 20px ) );
    }
    .chitiet_sanpham .widget-title {
        text-align: left;
        font-size: 30px;
        line-height: 25px;
        margin: 0px 0px 30px 0px;
        padding: 0px;
        color: #000;
        padding: 0px 0px 20px 0px;
        font-weight: normal;
        position: relative;
    }
    .chitiet_sanpham .widget-title:after {
        background: #e6e6e6;
        position: absolute;
        content: "";
        bottom: -10px;
        left: 0px;
        right: 0px;
        width: 100%;
        height: 1px;
        margin: 0px auto;
        display: block;
    }
    /* --------------------------------------------- Video san pham --------------------------------------------------- */
    .video_sanpham_inner {
        display: flex;
        align-items: flex-start;
        -ms-flex-wrap: wrap;
        flex-wrap: nowrap;
        -ms-justify-content: space-between;
        justify-content: space-between;
    }
    .video_sanpham_inner .panel-grid-cell {
        width: calc(50% - ( 0.5 * 20px ) );
    }
    .video_sanpham_inner .yt-video-place.embed-responsive {
        padding-bottom: 10px !important;
        height: auto;
    }
    .video_sanpham_inner .start-video {
        position: absolute;
        top: 37%;
        padding: 0px;
        left: 45%;
        opacity: 1;
        cursor: pointer;
        transition: all 0.3s;
        border-radius: 50%;
    }
    .video_sanpham_inner p {
        margin: 10px 5px;
    }
    .video_sanpham_inner .embed-responsive-4by3::before {
         padding-top: 0; 
    }
    .video_sanpham_inner .yt-video-place .play-yt-video {
        display: block;
        margin: auto;
    }
    /* --------------------------------------------- Tab chi tiet --------------------------------------------------- */
    .tab_chitiet .bg_tap {
        width: 100%;
        margin: 30px 0px;
    }
    .tab_chitiet .bg_tap #tabs_list {
        display: table;
        width: 100%;
    }
    .tab_chitiet .bg_tap #tabs_list ul {
        display: flex;
        justify-content: center;
        flex-direction: row;
        padding: 0;
    }
    .tab_chitiet #tabs_list li {
        list-style: none;
        float: left;
        flex: auto;
        padding: 0 15px;
        position: relative;
    }
    .tab_chitiet #tabs_list li:first-child {
        padding-left: 0;
    }
    #tabs_list li:last-child {
        padding-right: 0;
    }
    .tab_chitiet #tabs_list li:before {
        content: "";
        width: 5px;
        height: 0;
        background: #e7e7e7;
        position: absolute;
        top: 100%;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        -webkit-transition: .5s;
        -moz-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
    }
    .tab_chitiet #tabs_list li:hover:before {
        height: 20px;
    }
    .tab_chitiet #tabs_list li.active:before {
        height: 20px;
        background: #9f0000;
    }
    .tab_chitiet #tabs_list li a {
        padding: 10px 5px;
        background: #d2c858;
        color: #000;
        font-size: 15px;
        display: block;
        text-align: center;
        border-left: 1px solid #d2c858;
        border-right: 1px solid #d2c858;
        cursor: pointer;
        border-radius: 10px;
    }
    .tab_chitiet #tabs_list li.active a {
        background: #9f0000;
        color: #fff;
    }
    .tab_chitiet .tab_content_container {
        padding: 10px;
        border: 1px solid #e7e7e7;
        border-radius: 10px;
        margin-top: 10px;
    }
    .tab_chitiet .tab_content_container>.content_tab {
        display: none;
        padding: 10px;
    }
    .tab_chitiet .tab_content_container .content_tab {
        overflow-x: hidden;
    }
    .tab_chitiet .tab_content_container>.content_tab:first-child {
        display: block;
    }
    .baivietcamnhan {
        margin: 30px 0px;
    }
    .baivietcodinh .title {
        margin: 40px 0 20px 0;
        border-bottom: 1px solid #e6e6e6;
        padding: 0 0 15px 0;
        text-align: left;
        font-size: 22px;
        text-transform: uppercase;
    }
    .baivietcodinh ul {
        padding: 5px;
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    .baivietcodinh .baivietcamnhan ul li {
        margin-bottom: 15px;
    }
    .baivietcodinh .thumbnail a > img {
        margin: auto;
        display: block;
        max-width: 100%;
        width: 100%;
        height: auto;
    }
    .baivietcodinh li .content a {
        color: #333333;
        font-size: 20px;
        line-height: 22px;
        text-decoration: none;
        margin: 10px 0px;
        display: block;
        font-weight: 600;
    }
    .baivietcodinh li:hover .content a {
        color: #edc14f !important;
    }
    .baivietcodinh li .content .readmore {
        text-align: center;
    }
    .baivietcodinh li .content .readmore a {
        font-size: 15px;
        text-decoration: underline;
        color: #edc14f;
        font-weight: 600;
    }
    .baivietcodinh li .content .readmore a:hover {
        text-decoration: none;
    }
    .slide_camnhan {
        position: relative;
    }
    .slide_camnhan .excerpt {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .slide_camnhan .featured-thumbnail {
        position: relative;
        height: 0;
        padding-bottom: 65%;
        display: block;
        overflow: hidden;
    }
    .slide_camnhan .featured-thumbnail a {
        display: block;
        width: 100%;
        height: 100%;
    }
    .slide_camnhan .featured-thumbnail img {
        width: 100%;
        height: auto;;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .slide_camnhan .owl-prev, .slide_camnhan .owl-next {
        width: 30px;
        height: 50px;
        position: absolute;
        top: 45%;
        -webkit-transform: translateY(-45%);
        -moz-transform: translateY(-45%);
        -o-transform: translateY(-45%);
        transform: translateY(-45%);
        display: block;
        border: 1px solid black;
        color: #9f0000 !important;
    }
    .slide_camnhan .owl-prev:hover,
    .slide_camnhan .owl-next:hover {
        background: transparent !important;
    }
    .slide_camnhan .owl-prev:hover i,
    .slide_camnhan .owl-next:hover i {
        color: #edc14f !important;
    }
    .slide_camnhan .owl-prev i,
    .slide_camnhan .owl-next i {
        display: block;
        font-size: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .slide_camnhan .owl-prev {
        left: -35px;
    }
    .slide_camnhan .owl-next {
        right: -35px;
    }

    /* --------------------------------------------- San pham lien quan --------------------------------------------------- */
    .sp_lienquan {
        margin-bottom:40px;
    }
    .sp_lienquan .title {
        text-transform: uppercase;
        margin: 40px 0 20px 0;
        border-bottom: 1px solid #e6e6e6;
        padding: 0 0 15px 0;
        font-size: 22px;
    }
    .sp_lienquan ul {
        list-style: none;
        padding: 0px;
    }
    .sp_lienquan li .content {
        text-align: center;
        margin: 10px 0px;
        min-height: 48px;
    }
    .sp_lienquan li a {
        font-weight: 500;
        color: #333;
        font-size: 20px;
        display: block;
        width: 100%;
    }
    .sp_lienquan li .content a >span {
        display: block;
        font-size: 13.5px;
        font-weight: 400;
    }
    .sp_lienquan li a img {
        width: 100%;
    }

    /* --------------------------------------------- RESPONSIVE --------------------------------------------------- */
    /* --------------------------------------------- List bien the --------------------------------------------------- */
    @media (max-width: 767px) {
        .list_bienthe [class*="col-"] {
            margin: 0px 0px 20px 0px;
        }
        .list_bienthe .title {
            font-size: 17px;
            font-weight: 600;
        }
        .list_bienthe .bienthe .amount {
            font-size: 25px;
        }
    }
    /* --------------------------------------------- Chi tiet san pham --------------------------------------------------- */
     @media (max-width: 768px) {
        .chitiet_sanpham_inner {
            flex-direction: column;
        }
        .chitiet_sanpham_inner .panel-grid-cell {
            width: 100%;
        }
    }
    @media (max-width: 767px) {
        .chitiet_sanpham {
            padding: 30px 15px 10px 15px;
        }
        .chitiet_sanpham .widget-title {
            margin: 20px 0px 20px 0px;
            padding: 0px 0px 0px 0px;
        }
    }
    /* --------------------------------------------- Video san pham --------------------------------------------------- */
     @media (max-width: 768px) {
        .video_sanpham_inner {
            flex-direction: column;
        }
        .video_sanpham_inner .panel-grid-cell {
            width: 100%;
        }
    }
    /* --------------------------------------------- Tab chi tiet --------------------------------------------------- */
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
     @media(max-width: 991.98px) {
          .category-banner {
            margin-top: 60px;
          }
    }
    .list_bienthe-top {
        background:  #100000;
        padding-top: 40px;
        padding-bottom: 0;
    }
    h1.title-header{font-size:35px;line-height:1.3;color:#000;font-weight:600;color:#fff;  text-align: center; margin-bottom: 15px;}
    h1.title-header span{display:block;text-align:center;font-size:20px;}
    .mota_title { color:#fff; }
    .so-panel{margin-bottom:0px!important;}
    .story_product{;position:relative; padding: 20px 0px 40px 0px;}
    .story_product::before{content:"";position:absolute;left:-100%;height:100%;width:100%;display:block;top:0px;background:#222222;}
    .story_product::after{content:"";position:absolute;right:-100%;height:100%;width:100%;display:block;top:0px;background:#222222;}
    .story_product .textwidget{color:#cccccc;font-size:16px;line-height:1.5;font-style:italic;max-width:950px;display:table;margin:0px auto;text-align:center;}
</style>