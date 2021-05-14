<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moc-le-gia
 */

get_header();
?>

<?php
/**
 * The template for displaying all pages
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
// $category_slug = 'sofa';

$query_args = array(
    'status'    => 'publish',
    'limit'     => -1,
    'category'  => array( $category_slug ),
);

$data = array();
foreach( wc_get_products($query_args) as $product ){
    foreach( $product->get_attributes() as $taxonomy => $attribute ){
        $attribute_name = wc_attribute_label( $taxonomy ); // Attribute name
        // Or: $attribute_name = get_taxonomy( $taxonomy )->labels->singular_name;
        foreach ( $attribute->get_terms() as $term ){
            $data[$taxonomy][$term->term_id] = $term->name;
            // Or with the product attribute label name instead:
            // $data[$attribute_name][$term->term_id] = $term->name;
        }
    }
}

// Raw output (testing)
// echo '<pre>'; print_r($data); echo '</pre>';

$category = $wp_query->get_queried_object();

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

        .category__product-item {
            line-height: 22px;
            margin: 0px 0px 20px 0px;
            font-size: 14px;
        }

        .category__product-item .thumbnail {
            margin: 0px 0px 0px 0px;
            padding: 0;
            border: none;
            border-radius: 0;
            line-height: 1.42857143;
            background: none;
            display: block;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        .category__product-item .thumbnail > a > img {
            margin-left: auto;
            display: block;
            width: 100%;
            height: auto;
            margin-right: auto;
        }

        .category__product-item .post_content {
            margin: 10px 0;
            text-align: center;
        }

        .category__product-item .post_content a {
            color: #000;
            font-weight: 600;
            font-size: 16px;
        }

        .category__product-item .post_content a span:last-child {
            display: block;
            font-size: 13.5px;
            font-weight: 400;
        }

        .category__product-item .post_content a:hover {
            color: #edc14f;
        }

        .category__collapse-group {
            display: table;
            width: 100%;
            margin-bottom: 15px;
        }

        .category__collapse-group .name-cts {
            align-items: center;
            cursor: pointer;
            background: #f0f0f0;
            padding: 0px 10px;
            display: flex;
            justify-content: space-between;
        }

        .category__collapse-group .name-cts span {
            text-transform: uppercase;
            color: #000;
            font-size: 18px;
            text-decoration: none;
            display: block;
            font-weight: 600;
            position: relative;
            padding: 10px 0;
            display: table;
        }

        .category__collapse-group .name-cts i {
            margin-left: auto;
            font-size: 20px;
        }

        .category__collapse-group .title_term {
            font-size: 18px;
            color: #6d6d6d;
            margin: 10px 5px;
        }


    </style>
    <main id="category" class="site-category">
        <div class="wrap-category-banner">
            <div class="category-banner">
                <img class="img-banner" src="https://noithatkenli.vn/wp-content/uploads/2021/01/Sofa.jpg"/>
            </div>
        </div>

        <div class="container">
            <section class="category__title-section">
                <h1 class="title-header"><?php echo $category->name; ?></h1>
                <div class="mota_title"><p><?php echo $category->description; ?></p></div>
            </section>
        </div>

        <div class="category__product">
            <div class="container">
                <div class="row">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'product',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'id',
                                'terms' => $category->term_id
                            )
                        )
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            get_template_part('template-parts/category', 'product');
                        }
                    }

                    ?>
                </div>
            </div>
        </div>

        <!-- <div class="category__collapse">
            <div class="container">
                <div class="category__collapse-group">
                    <div class="post-list_h" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                         aria-controls="collapseExample">
                        <div class="name-cts"><span>Bộ bàn ghế ăn 4 ghế</span><i class="fa fa-plus-square-o"></i></div>
                        <div class="title_term"><p>Bộ bàn ăn 4 ghế thiết kế sang trọng - đẳng cấp</p></div>
                    </div>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="category__product-item">
                                <figure class="featured-thumbnail thumbnail ">
                                    <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co">
                                        <img alt="AGAY" dclass="lazyload lazyloaded"
                                             src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                                    </a>
                                </figure>
                                <div class="post_content">
                                    <div class="post-title">
                                        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co"
                                           title="AGAY">
                                            <span>AGAY</span><span>Milano &amp; Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="category__product-item">
                                <figure class="featured-thumbnail thumbnail ">
                                    <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co">
                                        <img alt="AGAY" dclass="lazyload lazyloaded"
                                             src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                                    </a>
                                </figure>
                                <div class="post_content">
                                    <div class="post-title">
                                        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co"
                                           title="AGAY">
                                            <span>AGAY</span><span>Milano &amp; Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="category__product-item">
                                <figure class="featured-thumbnail thumbnail ">
                                    <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co">
                                        <img alt="AGAY" dclass="lazyload lazyloaded"
                                             src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                                    </a>
                                </figure>
                                <div class="post_content">
                                    <div class="post-title">
                                        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co"
                                           title="AGAY">
                                            <span>AGAY</span><span>Milano &amp; Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="category__product-item">
                                <figure class="featured-thumbnail thumbnail ">
                                    <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co">
                                        <img alt="AGAY" dclass="lazyload lazyloaded"
                                             src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                                    </a>
                                </figure>
                                <div class="post_content">
                                    <div class="post-title">
                                        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co"
                                           title="AGAY">
                                            <span>AGAY</span><span>Milano &amp; Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="category__product-item">
                                <figure class="featured-thumbnail thumbnail ">
                                    <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co">
                                        <img alt="AGAY" dclass="lazyload lazyloaded"
                                             src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                                    </a>
                                </figure>
                                <div class="post_content">
                                    <div class="post-title">
                                        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co"
                                           title="AGAY">
                                            <span>AGAY</span><span>Milano &amp; Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
 		<?php 
 			 get_template_part('category-product/category', 'filter');
 		?>

        <style type="text/css">
            .chitiet_bottom {
                height: auto;
                margin: 25px 0;
                border: 1px solid;
                padding: 0 20px !important;
            }

            .chitiet_bottom .center {
                text-align: center;
            }

            .chitiet_bottom h2, .chitiet_bottom h3, .chitiet_bottom h4, .chitiet_bottom h5 {
                color: #000;
            }

            .chitiet_bottom h2, .h2 {
                font-size: 25px;
            }

            .chitiet_bottom h1, .chitiet_bottom .h1, .chitiet_bottom h2, .chitiet_bottom .h2, .chitiet_bottom h3, .chitiet_bottom .h3 {
                margin-top: 20px;
                margin-bottom: 10px;
            }

            .chitiet_bottom h1, .chitiet_bottom h2, .chitiet_bottom h3, .chitiet_bottom h4, .chitiet_bottom h5, .chitiet_bottom h6, .chitiet_bottom .h1, .chitiet_bottom .h2, .chitiet_bottom .h3, .chitiet_bottom .h4, .chitiet_bottom .h5, .chitiet_bottom .h6 {
                font-family: inherit;
                font-weight: 500;
                line-height: 1.1;
                color: inherit;
            }

            .chitiet_bottom b, .chitiet_bottom strong {
                font-weight: bold;
            }


            .chitiet_bottom h3, .chitiet_bottom .h3 {
                font-size: 22px;
            }
        </style>
        <?php 
        	$description = get_field('description-product-category-bottom', $category->taxonomy . '_' . $category->term_id);
            if( !empty($description)) {
         ?>
        <div class="container">
            <div class="chitiet_bottom" style="padding: 30px 0px;">
            <?php
            	echo $description;
            ?>
            </div>
        </div>
    	<?php } ?>
    	
        <?php
        	get_template_part('template-parts/home', 'partner');
            get_template_part('template-parts/home', 'contact-form');
        ?>
    </main><!-- #main -->
<?php
get_footer();