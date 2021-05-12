<?php 
$banner = prefix_get_option('home-banner-gallery');
if(isset($banner) && !empty($banner)):
    $gallery_ids = explode(',', $banner);
?>
<section class="wrap-primary-menu">
    <div class="primary-carousel owl-carousel owl-theme">
        <?php 
            foreach ($gallery_ids as $gallery_item_id): ?>
            <div class="item">
                <?php echo wp_get_attachment_image($gallery_item_id, 'full'); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>