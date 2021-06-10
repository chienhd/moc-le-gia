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

$category = get_queried_object();
?>
<main id="category" class="site-category">
  <?php
  $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
  $image = wp_get_attachment_url($thumbnail_id);
  if ($image) {
    ?>
      <div class="wrap-category-banner">
          <div class="category-banner">
              <img class="img-banner" src="<?php echo $image; ?>"
                   alt="<?php echo $category->name; ?>"/>
          </div>
      </div>
  <?php } ?>

    <div class="container">
        <section class="category__title-section">
            <h1 class="title-header"><?php echo $category->name; ?></h1>
            <div class="mota_title">
              <?php echo get_field('add_description_category_product',  $category->taxonomy. '_' . $category->term_id); ?>
          </div>
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

  <?php
  get_template_part('template-parts/category', 'product-filter');
  ?>

  <?php
  $description = get_field('add_description_product_category_bottom', $category->taxonomy . '_' . $category->term_id);
  if (!empty($description)) {
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
      font-size: 28px;
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
 .category__product-item .thumbnail > a {
    position: relative;
    height: 0;
    padding-bottom: 66.7%;
    overflow: hidden;
    display: block;
 }
  .category__product-item .thumbnail > a > img {
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

  .category__product-item .post_content {
      margin: 10px 0;
      text-align: center;
      min-height: 44px;
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
  .post_wrapper .content_item:hover a,
  .category__product-item:hover .post_content a {
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

  .chitiet_bottom h1,
  .chitiet_bottom h2,
  .chitiet_bottom h3,
  .chitiet_bottom h4,
  .chitiet_bottom h5,
  .chitiet_bottom h6,
  .chitiet_bottom .h1,
  .chitiet_bottom .h2,
  .chitiet_bottom .h3,
  .chitiet_bottom .h4,
  .chitiet_bottom .h5,
  .chitiet_bottom .h6 {
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
