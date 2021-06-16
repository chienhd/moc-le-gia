<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moc-le-gia
 */

?>

	
<footer id="footer" class="site-footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_1'); ?>
                </div>
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_2'); ?>
                </div>
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_3'); ?>
                </div>
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_4'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    $gallery_opt = prefix_get_option('footer_tab_block_5');
    if (!empty($gallery_opt)) {
        $gallery_ids = explode(',', $gallery_opt);
        ?>
        <div class="container">
            <div class="footer_bottom">
                <ul class="clearfix">
                    <?php
                    foreach ($gallery_ids as $gallery_item_id) {
                        echo '<li>' . wp_get_attachment_image($gallery_item_id, 'full') . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="copyright text-center"><?php echo prefix_get_option('footer_tab_block_5_2') ?></div>

    </div>
    </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<div class="support">
    <div class="support-item " style="background: #1e130b">
        <a href="<?php echo prefix_get_option('footer_tab_block_5_5'); ?>" style="color: #fff">
            <img src="/wp-content/themes/moc-le-gia/assets/images/social/messicon.png"><span>Messenger</span>
        </a>
    </div>
    <div class="support-item " style="background: #1e130b">
        <a href="tel:<?php echo prefix_get_option('footer_tab_block_5_3') ?>" style="color: #fff">
            <img src="/wp-content/themes/moc-le-gia/assets/images/social/phoneicon-1.png"><span><?php echo prefix_get_option('footer_tab_block_5_3') ?></span>
        </a>
    </div>
    <div class="support-item " style="background: #1e130b">
        <a href="<?php echo prefix_get_option('footer_tab_block_5_4') ?>" style="color: #fff">
            <img src="/wp-content/themes/moc-le-gia/assets/images/social/zaloicon.png"><span>Zalo</span>
        </a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-quickview-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
        </button>
        </div>
        <div class="modal-body clearfix">
            <div class="row" id="append-quick-view-product">
            </div>
        </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
