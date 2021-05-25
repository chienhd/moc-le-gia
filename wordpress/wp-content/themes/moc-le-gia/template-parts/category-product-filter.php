<?php
$category = get_queried_object();
$query_args = array(
  'post_type' => 'product',
  'status' => 'publish',
  'limit' => -1,
  'category' => array($category->slug),
);

$variable = array();
foreach (wc_get_products($query_args) as $product) {
  foreach ($product->get_attributes() as $taxonomy => $attribute) {

    $attribute_name = wc_attribute_label($taxonomy); // Attribute name
    $variable[$taxonomy]['taxonomy'] = $attribute_name;

    // Or: $attribute_name = get_taxonomy( $taxonomy )->labels->singular_name;
    if ($attribute->get_terms()) {
      foreach ($attribute->get_terms() as $term) {
        if ($term->count) {
          $variable[$taxonomy]['term'] = array(
            $term->slug => $term->name
          );
        }

      }
    }
  }
}
?>
<div class="container">
  <div class="list_product_cat">
    <?php
    foreach ($variable as $taxonomy => $value) {
      if (!isset($value['term'])) {
        continue;
      }
      ?>
      <div class="box_item">
        <div class="content_item">
          <!-- Big title -->
          <div class="title_widget">
            <div class="post-list_h">
              <div class="name-cts"><span><?php echo $value['taxonomy']; ?></span>
                <i class="fa fa-plus-square-o"></i>
                <i class="fa fa-minus-square-o" style="display: none"></i>
              </div>
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
                      'post_type' => 'product',
                      'post_status' => 'publish',
                      'ignore_sticky_posts' => 1,
                      'category' => array($category->slug),
                      'tax_query' => array(
                        array(
                          'taxonomy' => $taxonomy,
                          'terms' => $term_slug,
                          'field' => 'slug',
                        )
                      )
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                      while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-3 post_wrapper"
                           data-post-item="1">
                          <div class="content_item">
                            <figure class="featured-thumbnail thumbnail ">
                              <a href="<?php echo esc_url(get_permalink()) ?>"
                                 title="<?php echo get_the_title(); ?>">
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
                                  <span><?php echo get_field('add_product_brand_with_title'); ?></span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                      }
                      wp_reset_postdata();
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

  .list_product_cat .box_item.active .content_box, .box_item_child.active .list_post_category {
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

  .list_product_cat .box_item .content_box, .box_item_child .list_post_category {
    display: none;
  }

  /*.post_wrapper {*/
  /*    display: inline-block;*/
  /*    vertical-align: top;*/
  /*}*/
  .list_post_category .featured-thumbnail > a {
    position: relative;
    height: 0;
    padding-bottom: 66.7%;
    overflow: hidden;
    display: block;
  }
 .list_post_category .featured-thumbnail > a > img {
    margin: auto;
    display: block;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    object-fit: cover;
 }
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