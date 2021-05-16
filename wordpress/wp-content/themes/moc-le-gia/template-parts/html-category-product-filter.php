
// $query_args = array(
//     'status'    => 'publish',
//     'limit'     => -1,
//     'category'  => array( $category->slug ),
// );

// $data = array();
// foreach( wc_get_products($query_args) as $product ){
//     foreach( $product->get_attributes() as $taxonomy => $attribute ){

//         $attribute_name = wc_attribute_label( $taxonomy ); // Attribute name
//         $data[$taxonomy]['taxonomy'] = $attribute_name;

//         // Or: $attribute_name = get_taxonomy( $taxonomy )->labels->singular_name;
//         if($attribute->get_terms()) {
//             foreach ( $attribute->get_terms() as $term ){
//                     //$data[$taxonomy][$term->term_id] = $term;
//                 // Or with the product attribute label name instead:
//                 if($term->count) {
//                     $data[$taxonomy]['term'] = array(
//                         $term->slug => $term->name
//                     );
//                 }
                
//             }
//         }
//     }
// }

// echo '<pre>';
// print_r($data); die;


// $args = array(
//     'category'  => array( 'sofa' )
//     // or 'term_taxonomy_id' => 4 i.e. category ID
// );

// foreach( wc_get_products($args) as $product ){

//     foreach( $product->get_attributes() as $attr_name => $attr ){

//         echo wc_attribute_label( $attr_name ); // attr label
//         // or get_taxonomy( $attr_name )->labels->singular_name;

//         foreach( $attr->get_terms() as $term ){

//             //echo $term->name;
//         }
//     }
// }


    // Define Query Arguments
//     $args = array( 
//                 'post_type'             => 'product',
//                 'post_status'           => 'publish',
//                 'ignore_sticky_posts'   => 1,
//                 'category'  => array( $category->slug ),
//                 'tax_query'             => array(
//                     array(
//                         'taxonomy'      => 'pa_demo-thuong-hieu',
//                         'terms'         => 'milanodesign',
//                         'field'         => 'slug',
//                     )
//                 )
//             );
    
//     ob_start();
    
//     $query = new WP_Query( $args );

//     if ($query->have_posts()) {
//                         while ($query->have_posts()) {
//                             $query->the_post();
//                             get_template_part('template-parts/category', 'product');
//                         }
//                     }

// // TEST: Output the Products IDs
// print_r($query->have_posts()); die;

<?php
    $category = get_queried_object();
    $query_args = array(
        'post_type' => 'product',
        'status'    => 'publish',
        'limit'     => -1,
        'category'  => array( $category->slug ),
    );

    $variable = array();
    foreach( wc_get_products($query_args) as $product ){
        foreach( $product->get_attributes() as $taxonomy => $attribute ){
            $attribute_name = wc_attribute_label( $taxonomy ); // Attribute name
            $variable[$taxonomy]['taxonomy'] = $attribute_name;

            if($attribute->get_terms()) {
                foreach ( $attribute->get_terms() as $term ){
                    if($term->count) {
                        $variable[$taxonomy]['term'] = array(
                            $term->slug => $term->name
                        );
                        ?>
                        <?php
                    }
                    
                }
            }
        }
    }
?>


<?php die; ?>
<div class="container">
    <div class="list_product_cat">
    <?php
    $i = 0;
    foreach ($variable as $taxonomy => $value) {
        if(!isset($value['term'])) {
            continue;
        }
    ?>
        <div class="box_item <?php if($i == 0) { echo 'active'; } ?>">
            <div class="content_item">
                <!-- Big title -->
                <div class="title_widget">
                    <div class="post-list_h">
                        <div class="name-cts"><span><?php echo $value['taxonomy']; ?></span><i class="fa fa-minus-square-o"></i></div>
                    </div>
                </div>

                <div class="content_box">

                    <div class="box_item_child">
                        <div class="content_item_child">
                            <?php
                            foreach ($value['term'] as $term_slug => $term) {                           
                            ?>
                            <!-- sub title -->
                            <div class="title">
                                <div class="name-cts"><?php echo $term; ?></div>
                            </div>

                            <div class="row list_post_category">
                                <?php
                                $args = array( 
                                    'post_type'             => 'product',
                                    'post_status'           => 'publish',
                                    'ignore_sticky_posts'   => 1,
                                    'category'  => array( $category->slug ),
                                    'tax_query'             => array(
                                        array(
                                            'taxonomy'      => $taxonomy,
                                            'terms'         => $term_slug,
                                            'field'         => 'slug',
                                        )
                                    )
                                );
                                $query = new WP_Query( $args );

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>">
                                                <img alt="<?php echo get_the_title(); ?>"
                                                    class="lazyload ls-is-cached lazyloaded"
                                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title">
                                                <a href="<?php echo esc_url(get_permalink()) ?>"
                                                   title="<?php echo get_the_title(); ?>">
                                                   <?php echo get_the_title(); ?>
                                                   <span>Chateau d'Ax </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php
                                    }
                                }
                               ?>
                            </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php
        }
        ?>
    </div>
</div>
<style type="text/css">
    .box_item {
        margin-top: 30px;
    }

    .box_item .title_widget {
        display: table;
        width: 100%;
        margin-bottom: 15px;
    }

    .box_item .title_widget .name-cts {
        display: flex;
        align-items: center;
    }

    .box_item .title_widget .name-cts {
        cursor: pointer;
        background: #f0f0f0;
        padding: 0px 10px;
    }

    .box_item .title_widget .name-cts span {
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

    .box_item .title_widget .name-cts i {
        margin-left: auto;
        font-size: 20px;
    }

    .tax-product_cat .box_item.active .content_box, .box_item_child.active .list_post_category {
        display: block;
        margin-bottom: 30px;
    }

    .box_item_child .title {
        color: #3e3e3e;
        font-size: 18px;
        text-decoration: none;
        font-weight: 600;
        position: relative;
        padding: 10px 0;
        cursor: pointer;
        margin: 10px 0px;
        margin-left: 25px;
        list-style: disc;
        display: list-item;
        font-style: italic;
        text-transform: uppercase;
    }

    .tax-product_cat .box_item .content_box, .box_item_child .list_post_category {
        display: none;
    }

    /*.post_wrapper {*/
    /*    display: inline-block;*/
    /*    vertical-align: top;*/
    /*}*/

    .post_wrapper {
        font-size: 14px;
        line-height: 22px;
    }

    .post_wrapper {
        margin: 0px 0px 20px 0px;
    }

    .thumbnail {
        margin: 0px 0px 0px 0px;
        padding: 0;
        border: none;
        border-radius: 0;
        background: none;
    }

    .thumbnail > img, .thumbnail a > img {
        margin-right: auto;
        margin-left: auto;
        display: block;
        width: 100%;
        height: auto;
    }

    .post_wrapper .post-title {
        margin: 10px 0;
        text-align: center;
    }

    .post_wrapper .post-title a {
        color: #000;
        font-weight: 600;
        font-size: 16px;
    }

    .post_wrapper .post-title a span {
        display: block;
        font-size: 13.5px;
        font-weight: 400;
    }

    .view-more {
        text-align: center;
    }

    .all-product {
        border: 1px solid #edc14f;
        padding: 5px 60px;
        color: #edc14f;
        border-radius: 5px;
        transition: all 0.2s ease-in-out;
    }
</style>

<div class="container">
    <div class="list_product_cat">
        
        <div class="box_item active">
            <div class="content_item">
                <div class="title_widget">
                    <div class="post-list_h">
                        <div class="name-cts"><span>Theo chất liệu</span><i class="fa fa-minus-square-o"></i></div>
                    </div>
                </div>
                <div class="content_box">
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa nỉ</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-edo-full-bo"
                                                        title="EDO">EDO<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-2"
                                                        title="EDO">EDO<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l"
                                                        title="EDO">EDO<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa da thật CAT 6</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/don-da-solange"
                                                        title="ĐÔN SOLANGE">ĐÔN SOLANGE<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/indianapolis"
                                                        title="INDIANAPOLIS">INDIANAPOLIS<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/austin"
                                                                       title="AUSTIN">AUSTIN<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-doi"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-3"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-emma-full-bo"
                                                        title="EMMA">EMMA<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-emma-vang-2-co-dong-co"
                                                        title="EMMA">EMMA<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-softy-full-bo"
                                                        title="SOFTY">SOFTY<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa da thật CAT 4</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/goi-tua-sofa-md"
                                                        title="Gối tựa M&amp;D">Gối tựa
                                                    M&amp;D<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/don-da-simple"
                                                        title="ĐÔN SIMPLE">ĐÔN
                                                    SIMPLE<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/serena-goc"
                                                        title="SERENA">SERENA<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe04-full-bo"
                                                        title="LEO">LEO<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/leo-2"
                                                                       title="LEO">LEO<span>Milano &amp; Design (Sofa đôi)</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/leo"
                                                                       title="LEO">LEO<span>Milano &amp; Design (Sofa đơn)</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-full-bo"
                                                        title="OSLO">OSLO<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-full-bo"
                                                        title="MELAN">MELAN<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_item ">
            <div class="content_item">
                <div class="title_widget">
                    <div class="post-list_h">
                        <div class="name-cts"><span>Theo kiểu dáng</span><i class="fa fa-plus-square-o"></i></div>
                    </div>
                </div>
                <div class="content_box">
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa đơn</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/kris-swivel"
                                                        title="KRIS SWIVEL">KRIS SWIVEL<span>Chateau d'Ax </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/leo"
                                                                       title="LEO">LEO<span>Milano &amp; Design (Sofa đơn)</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-f010-vang-don"
                                                        title="SIMPLE">SIMPLE<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-don-l1260xw1000xh920"
                                                        title="ESTEREL">ESTEREL<span>Milano &amp; Design</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-italia-edo-vang-l">
                                                <img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazyload ls-is-cached lazyloaded"
                                                        src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-don-dong-co"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-softy-vang-don"><img
                                                        loading="lazy" title="SOFTY;" alt="SOFTY;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/01/sofa-da-softy-don-3-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-softy-vang-don"
                                                        title="SOFTY">SOFTY<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-e130-vang-don"><img
                                                        loading="lazy" title="TROMSO;" alt="TROMSO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2021/01/Sofa-da-Tromso-trang-vang-don-1-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-e130-vang-don"
                                                        title="TROMSO">TROMSO<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-don"><img
                                                        loading="lazy" title="MELAN;" alt="MELAN;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/01/sofa-don-FE10-anh-bia-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-don"
                                                        title="MELAN">MELAN<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa đôi</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/canaletto-vang-doi"><img
                                                        loading="lazy" title="CANALETTO;" alt="CANALETTO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2021/03/Sofa-da-Canaletto-2-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-doi"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2"><img loading="lazy"
                                                                                                  title="LEO;"
                                                                                                  alt="LEO;"
                                                                                                  data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                                                                  class="lazy lazyload"
                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/leo-2"
                                                                       title="LEO">LEO<span>Milano &amp; Design (Sofa đôi)</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-vang-2-lon"><img
                                                        loading="lazy" title="OSLO;" alt="OSLO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/02/sofa-da-y-F002-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-vang-2-lon"
                                                        title="OSLO">OSLO<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-f010-vang-2-lon"><img
                                                        loading="lazy" title="SIMPLE;" alt="SIMPLE;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/02/sofa-da-y-F010-3-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-f010-vang-2-lon"
                                                        title="SIMPLE">SIMPLE<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-2-l2040xw1090xh780-1080"><img
                                                        loading="lazy" title="MELAN;" alt="MELAN;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/HUG_2519-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-2-l2040xw1090xh780-1080"
                                                        title="MELAN">MELAN<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-sissy-e119-vang-2-l2210xw1060xh820"><img
                                                        loading="lazy" title="SISSY;" alt="SISSY;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/09/HUG_3502-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-sissy-e119-vang-2-l2210xw1060xh820"
                                                        title="SISSY">SISSY<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-2-dc-l2220xw1140xh860-1080"><img
                                                        loading="lazy" title="ESTEREL;" alt="ESTEREL;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/09/IMG_0353-scaled-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-2-dc-l2220xw1140xh860-1080"
                                                        title="ESTEREL">ESTEREL<span>Milano &amp; Design </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-doi-dong-co"><img
                                                        loading="lazy" title="AGAY;" alt="AGAY;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/HUG_3056-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-doi-dong-co"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa ba</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/canaletto-vang-3"><img
                                                        loading="lazy" title="CANALETTO;" alt="CANALETTO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2021/03/Sofa-da-Canaletto-2-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-3"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-f010-vang-3"><img
                                                        loading="lazy" title="SIMPLE;" alt="SIMPLE;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/02/sofa-da-y-F010-2-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-f010-vang-3"
                                                        title="SIMPLE">SIMPLE<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-3-dc-l3080xw1140xh860-1080"><img
                                                        loading="lazy" title="ESTEREL;" alt="ESTEREL;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2018/08/EE87-1-1-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-3-dc-l3080xw1140xh860-1080"
                                                        title="ESTEREL">ESTEREL<span>Milano &amp; Design </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-md-f019-vang-2-lon-l2640xw970xh860"><img
                                                        loading="lazy" title="GEMMA;" alt="GEMMA;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/10/HUG_3077-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-md-f019-vang-2-lon-l2640xw970xh860"
                                                        title="GEMMA">GEMMA<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-e130-vang-3-lon"><img
                                                        loading="lazy" title="TROMSO;" alt="TROMSO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2021/01/Sofa-da-Tromso-nau-1-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-e130-vang-3-lon"
                                                        title="TROMSO">TROMSO<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-3-lon"><img
                                                        loading="lazy" title="MELAN;" alt="MELAN;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/01/sofa-da-FE10-3-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-3-lon"
                                                        title="MELAN">MELAN<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-cd-host"><img loading="lazy"
                                                                                                         title="HOST;"
                                                                                                         alt="HOST;"
                                                                                                         data-src="https://noithatkenli.vn/wp-content/uploads/2019/10/host-2-360x240.jpg"
                                                                                                         class="lazy lazyload"
                                                                                                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-cd-host"
                                                        title="HOST">HOST<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-ba-dong-co"><img
                                                        loading="lazy" title="AGAY;" alt="AGAY;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/09/ghe-Sofa-da-HUG_3050-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-ba-dong-co"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa bốn</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-l4-lon"><img
                                                        loading="lazy" title="MELAN;" alt="MELAN;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/10/FE-10-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-l4-lon"
                                                        title="MELAN">MELAN<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa L</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/indianapolis"><img loading="lazy"
                                                                                                         title="INDIANAPOLIS;"
                                                                                                         alt="INDIANAPOLIS;"
                                                                                                         data-src="https://noithatkenli.vn/wp-content/uploads/2021/04/Indianapolis-2-360x240.jpg"
                                                                                                         class="lazy lazyload"
                                                                                                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/indianapolis"
                                                        title="INDIANAPOLIS">INDIANAPOLIS<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/austin"><img loading="lazy"
                                                                                                   title="AUSTIN;"
                                                                                                   alt="AUSTIN;"
                                                                                                   data-src="https://noithatkenli.vn/wp-content/uploads/2021/03/Sofa-da-Austin-360x240.jpg"
                                                                                                   class="lazy lazyload"
                                                                                                   src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/austin"
                                                                       title="AUSTIN">AUSTIN<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/serena-goc"><img loading="lazy"
                                                                                                       title="SERENA;"
                                                                                                       alt="SERENA;"
                                                                                                       data-src="https://noithatkenli.vn/wp-content/uploads/2020/01/sofa-da-F026-2-360x240.jpg"
                                                                                                       class="lazy lazyload"
                                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/serena-goc"
                                                        title="SERENA">SERENA<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-vang-l3"><img
                                                        loading="lazy" title="OSLO;" alt="OSLO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/02/sofa-da-F002-7-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-vang-l3"
                                                        title="OSLO">OSLO<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-quay"><img
                                                        loading="lazy" title="AGAY;" alt="AGAY;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/HUG_2834-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-quay"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-sissy-e119-vang-l3"><img
                                                        loading="lazy" title="SISSY;" alt="SISSY;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/09/HUG_3234-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-sissy-e119-vang-l3"
                                                        title="SISSY">SISSY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-f021-vang-l"><img
                                                        loading="lazy" title="FLORENCE;" alt="FLORENCE;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/Sofa-da-Florance-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-f021-vang-l"
                                                        title="FLORENCE">FLORENCE<span>Milano &amp; Design </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-l3-lon-l2820xw1090xh780-1080"><img
                                                        loading="lazy" title="MELAN;" alt="MELAN;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/HUG_2409-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-l3-lon-l2820xw1090xh780-1080"
                                                        title="MELAN">MELAN<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa theo bộ</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/indianapolis"><img loading="lazy"
                                                                                                         title="INDIANAPOLIS;"
                                                                                                         alt="INDIANAPOLIS;"
                                                                                                         data-src="https://noithatkenli.vn/wp-content/uploads/2021/04/Indianapolis-2-360x240.jpg"
                                                                                                         class="lazy lazyload"
                                                                                                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/indianapolis"
                                                        title="INDIANAPOLIS">INDIANAPOLIS<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/austin"><img loading="lazy"
                                                                                                   title="AUSTIN;"
                                                                                                   alt="AUSTIN;"
                                                                                                   data-src="https://noithatkenli.vn/wp-content/uploads/2021/03/Sofa-da-Austin-360x240.jpg"
                                                                                                   class="lazy lazyload"
                                                                                                   src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/austin"
                                                                       title="AUSTIN">AUSTIN<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/canaletto-vang-3"><img
                                                        loading="lazy" title="CANALETTO;" alt="CANALETTO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2021/03/Sofa-da-Canaletto-2-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-3"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe04-full-bo"><img
                                                        loading="lazy" title="LEO;" alt="LEO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Kem-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe04-full-bo"
                                                        title="LEO">LEO<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-edo-full-bo"><img
                                                        loading="lazy" title="EDO;" alt="EDO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-01-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-edo-full-bo"
                                                        title="EDO">EDO<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-emma-full-bo"><img
                                                        loading="lazy" title="EMMA;" alt="EMMA;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2021/01/emma-2-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-emma-full-bo"
                                                        title="EMMA">EMMA<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-full-bo"><img
                                                        loading="lazy" title="OSLO;" alt="OSLO;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/12/Sofa-da-Oslo-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-oslo-f002-full-bo"
                                                        title="OSLO">OSLO<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-full-bo"><img
                                                        loading="lazy" title="MELAN;" alt="MELAN;"
                                                        data-src="https://noithatkenli.vn/wp-content/uploads/2020/01/sofa-da-FE10-3-360x240.jpg"
                                                        class="lazy lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-full-bo"
                                                        title="MELAN">MELAN<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_item ">
            <div class="content_item">
                <div class="title_widget">
                    <div class="post-list_h">
                        <div class="name-cts"><span>Theo chức năng</span><i class="fa fa-plus-square-o"></i></div>
                    </div>
                </div>
                <div class="content_box">
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Sofa có động cơ nâng , tựa</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-emma-full-bo"
                                                        title="EMMA">EMMA<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe10-vang-2-l2040xw1090xh780-1080"
                                                        title="MELAN">MELAN<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-3-dc-l3080xw1140xh860-1080"
                                                        title="ESTEREL">ESTEREL<span>Milano &amp; Design </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-ee87-vang-2-dc-l2220xw1140xh860-1080"
                                                        title="ESTEREL">ESTEREL<span>Milano &amp; Design </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co"
                                                        title="AGAY">AGAY<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-quay"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-don-dong-co"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-doi-dong-co"
                                                        title="AGAY">AGAY<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box_item ">
            <div class="content_item">
                <div class="title_widget">
                    <div class="post-list_h">
                        <div class="name-cts"><span>Theo thương hiệu</span><i class="fa fa-plus-square-o"></i></div>
                    </div>
                </div>
                <div class="content_box">
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Milano&amp;Design</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/goi-tua-sofa-md"
                                                        title="Gối tựa M&amp;D">Gối tựa
                                                    M&amp;D<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/don-da-simple"
                                                        title="ĐÔN SIMPLE">ĐÔN
                                                    SIMPLE<span>Milano &amp; Design</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/don-da-agay"
                                                        title="ĐÔN AGAY">ĐÔN AGAY<span>Milano &amp; Design</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/epu1"
                                                                       title="ĐÔN EPU1">ĐÔN EPU1<span>Milano &amp; Design</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/serena-goc"
                                                        title="SERENA">SERENA<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-fe04-full-bo"
                                                        title="LEO">LEO<span>Milano &amp; Design </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/leo-2"
                                                                       title="LEO">LEO<span>Milano &amp; Design (Sofa đôi)</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/leo"
                                                                       title="LEO">LEO<span>Milano &amp; Design (Sofa đơn)</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="box_item_child">
                        <div class="content_item_child">
                            <div class="title">
                                <div class="name-cts">Chateau d'Ax</div>
                            </div>
                            <div class="row list_post_category">
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="1">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/don-da-solange"
                                                        title="ĐÔN SOLANGE">ĐÔN SOLANGE<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="2">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/indianapolis"
                                                        title="INDIANAPOLIS">INDIANAPOLIS<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="3">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/kris-swivel"
                                                        title="KRIS SWIVEL">KRIS SWIVEL<span>Chateau d'Ax </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="4">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a href="https://noithatkenli.vn/san-pham/austin"
                                                                       title="AUSTIN">AUSTIN<span>Chateau d'Ax</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="5">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-doi"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="6">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/canaletto-vang-3"
                                                        title="CANALETTO">CANALETTO<span>Chateau d'Ax</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="7">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-edo-full-bo"
                                                        title="EDO">EDO<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 post_wrapper" data-post-item="8">
                                    <div class="content_item">
                                        <figure class="featured-thumbnail thumbnail ">
                                            <a href="https://noithatkenli.vn/san-pham/leo-2">
                                                <img loading="lazy"
                                                     title="LEO;"
                                                     alt="LEO;"
                                                     data-src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg"
                                                     class="lazy lazyload"
                                                     src="https://noithatkenli.vn/wp-content/uploads/2020/06/FE04-Den-2-360x240.jpg">

                                            </a>
                                        </figure>
                                        <div class="post_content">
                                            <div class="post-title"><a
                                                        href="https://noithatkenli.vn/san-pham/sofa-da-that-italia-emma-full-bo"
                                                        title="EMMA">EMMA<span>Chateau d'Ax </span></a></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>