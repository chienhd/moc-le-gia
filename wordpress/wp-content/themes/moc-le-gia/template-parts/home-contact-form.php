<div id="home-wrap-contact-form" style="background-image: url('/wp-content/themes/moc-le-gia/assets/images/home-customer-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <span class="home-contact-form-title">NHẬN TƯ VẤN VỀ PHONG CÁCH THIẾT KẾ PHÙ HỢP VỚI BẠN</span>
                <span class="home-contact-form-right-des">Tư vấn miễn phí. Tặng kèm Ebook những mẫu Thiết kế nội thất</span>
                <div id="home-contact-form-right-frm">
                    <?php 
                        $shortcCode = prefix_get_option('contact-form-1');
                        echo do_shortcode($shortcCode); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
