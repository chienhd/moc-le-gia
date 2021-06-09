<?php
/**
 * Template Name: Introduce

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
?>
<style type="text/css">
    /*=================================Introduce=================================*/
    main#introduce {
        margin-top: 50px;
    }
    .single-banner-other-page {
        display: block;
        height: auto;
        padding-bottom: 30.5%;
        position: relative;
        overflow: hidden;
    }
    .position-image-center {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    main#introduce h1 {
        font-size: 24px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e4e4e4;
        font-weight: 400;
        margin-top: 30px;
    }
    #introduce .section-nd{padding-top:80px;padding-bottom:80px;}
    #introduce #gt1 hr{max-width:200px;border-top:5px solid;text-align:left;margin:10px 0;}
    #introduce #gt1 .number{opacity:0.7;}
    #introduce #gt1 .number{position:absolute;bottom:30px;top:auto;right:40px;color:#fff;}
    #introduce #gt1 .number:after{background-color:#fff;}
    #introduce #gt1 p:nth-last-of-type(1){margin-bottom:13px;}
    #introduce p{margin-bottom:25px;}
    #introduce .title-section, #introduce .title-section h2{margin-top:0; font-size: 26px; line-height: 1.25}
    #introduce #gt1{padding-top:35px;}
    #introduce .number {
        position: absolute;
        top: auto;
        right: 40px;
        color: #fff;
        font-size: 150px;
        text-align: right;
        line-height: 1;
        display: inline-block;
        float: right;
    }
    #introduce .number:before {
        content: "";
        position: absolute;
        width: 120px;
        border-top: 1px solid;
        bottom: 20px;
        left: -130px;
        overflow: hidden;
        opacity: 1 !important;
    }
    #introduce .number:after {
        content: ".";
        position: absolute;
        width: 12px;
        height: 12px;
        left: -10px;
        bottom: 14px;
        overflow: hidden;
        background: #fff;
        border-radius: 100%;
        opacity: 1 !important;
    }
    #introduce #gt2 .number{opacity:0.7;}
    #introduce #gt2 .number:after{background-color:#fff;}
    #introduce p{margin-bottom:25px;}
    #introduce .title-section{margin-top:0;}
    #introduce #gt2{color:#fff;}
    #introduce #gt2 .title-section{color:#fff;}

    #introduce p {
        margin-bottom: 15px;
        font-size: 15px;
    }
    #introduce #gt3 .col-title-order-1 {
        display: none;
    }
    #introduce #gt3 ul {
        padding-left: 15px;
    }
    #introduce #gt3 .number, #introduce #gt5 .number  {
        color: #182633;
    }
    #introduce #gt3 .number:after, #introduce #gt5 .number:after {
        background: #182633;
    }
    #introduce #gt4 .title-section {
        color: #fff;
    }
    #introduce #gt4 p {
        color: #fff;
    }
    #introduce #gt5 .row {
        align-items: center;
        justify-content: center;
        display: flex;
    }
    #introduce #gt5 .number {
        position: relative;
        margin-bottom: 15px;
    }
    #introduce #gt5 .col-title .text-justify {
        float: left;
    }
    ul li {
        list-style-type: initial;
    }

    @media (min-width:992px){
        #introduce #gt2 .col-title{width:380px;}
        #introduce #gt2 .col-content{width:calc(100% - 470px);}
    }
    @media(max-width: 991.98px) {
        #breadcrumb-wrap {
            margin-top: 5px;
        }
        #introduce .number {
            position: relative;
            font-size: 120px;
            margin-bottom: 15px;
        }
        #introduce #gt3 .col-title-order-2 {
            display: none;
        }
        #introduce #gt3 .col-title-order-1 {
            display: block;
        }
        #introduce .section-nd {
            padding-top: 40px;
            padding-bottom: 40px;
            background-size: cover !important;
        }
        #introduce #gt5 .row {
            align-items: initial;
            justify-content: initial;
            display: block;
        }
        #introduce #gt5 .col-title {
            margin-top: 30px;
        }
    }
    #slideshow {
        margin-top: 77px;
    }
     @media(max-width: 991.98px) {
          #slideshow {
            margin-top: 77px;
          }
    }
    @media(max-width: 575.98px) {
        .single-banner-other-page {
            padding-bottom: 35%;
        }
        #introduce .number {
            font-size: 85px;
        }
    }
    /*=================================Introduce=================================*/
</style>
<main id="introduce" class="page-body-content">
    <?php if(get_the_post_thumbnail_url()): ?>
    <section id="slideshow">
        <div class="single-banner-other-page">
            <img class="position-image-center" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
    </section>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <section id="gt1" class="section-nd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-justify">
                    <h2 class="title-section"><?php echo prefix_get_option('page_introduce_block_1_title'); ?></h2>
                    <?php echo prefix_get_option('page_introduce_block_1_editor'); ?>
                    <hr>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img style="width: 100%; height: auto;" src="<?php echo prefix_get_option('page_introduce_block_1_image')['thumbnail']; ?>" alt="<?php echo prefix_get_option('page_introduce_block_1_image')['thumbnail']; ?>">
                    <div class="number">01</div>
                </div>
            </div>
        </div>
    </section>

    <section id="gt2" class="section-nd" style="background: url(<?php echo prefix_get_option('page_introduce_block_2_image')['thumbnail']; ?>) center;">
        <div class="container">
            <div class="row row-40">
                <div class="col-xs-12 col-md-4 col-title">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_2_title'); ?></h2>
                    <div class="number">02</div>
                </div>
                <div class="col-xs-12 col-md-8 col-content text-justify">
                    <?php echo prefix_get_option('page_introduce_block_2_editor'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="gt3" class="section-nd">
        <div class="container">
            <div class="row row-40">
                <div class="col-xs-12 col-md-4 col-title col-title-order-1">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_3_title'); ?></h2>
                    <div class="number">03</div>
                </div>
                <div class="col-xs-12 col-md-8 col-content text-justify">
                    <?php echo prefix_get_option('page_introduce_block_3_editor'); ?>
                </div>
                <div class="col-xs-12 col-md-4 col-title col-title-order-2">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_3_title'); ?></h2>
                    <div class="number">03</div>
                </div>
            </div>
        </div>
    </section>

    <section id="gt4" class="section-nd" style="background: url(<?php echo prefix_get_option('page_introduce_block_4_image')['thumbnail']; ?>) center;">
        <div class="container">
            <div class="row row-40">
                <div class="col-xs-12 col-md-5 col-title">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_4_title'); ?></h2>
                    <div class="number">04</div>
                </div>
                <div class="col-xs-12 col-md-7 col-content text-justify">
                    <?php echo prefix_get_option('page_introduce_block_4_editor'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php if(!empty(prefix_get_option('page_introduce_block_5_editor'))) : ?>
    <section id="gt5" class="section-nd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7 col-content">
                    <img src="<?php echo prefix_get_option('page_introduce_block_5_image')['thumbnail']; ?>">
                </div>
                <div class="col-xs-12 col-md-5 col-title">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_5_title'); ?></h2>
                    <div class="number">05</div>
                    <div class="text-justify clearfix">
                        <?php echo prefix_get_option('page_introduce_block_5_editor'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php 
        get_template_part('template-parts/home', 'interior-knowledge');
        get_template_part('template-parts/home', 'partner');
        get_template_part('template-parts/home', 'contact-form');
    ?>
</main>

<?php
get_footer();
