<?php
/**
 * moc-le-gia Theme Customizer
 *
 * @package moc-le-gia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function moc_le_gia_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'moc_le_gia_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'moc_le_gia_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'moc_le_gia_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function moc_le_gia_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function moc_le_gia_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function moc_le_gia_customize_preview_js() {
	wp_enqueue_script( 'moc-le-gia-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'moc_le_gia_customize_preview_js' );

/**
 * short_code_moc_le_gia_contact_form
 */
function short_code_moc_le_gia_contact_form() {
    $html = '<div id="home-wrap-contact-form" style="background-image: url('. prefix_get_option('contact-form-2')['thumbnail'].')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <span class="home-contact-form-title">NHẬN TƯ VẤN VỀ PHONG CÁCH THIẾT KẾ PHÙ HỢP VỚI BẠN</span>
                            <span class="home-contact-form-right-des">Tư vấn miễn phí. Tặng kèm Ebook những mẫu Thiết kế nội thất</span>
                            <div id="home-contact-form-right-frm">
                                ' .
                                    do_shortcode(prefix_get_option('contact-form-1'))
                                    .
                            '</div>
                        </div>
                    </div>
                </div>
            </div>';
return $html;
}
add_shortcode( 'moc_le_gia_contact_form', 'short_code_moc_le_gia_contact_form' );