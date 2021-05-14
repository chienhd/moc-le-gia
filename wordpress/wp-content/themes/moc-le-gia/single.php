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
<style type="text/css">
	 /* --------------------------------------------- List bien the --------------------------------------------------- */
    .list_bienthe {
        background: #f2f2f2;
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
    .mgg p {
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
    }
    .baivietcodinh ul {
        padding: 5px;
        list-style: none;
        padding-left: 0;
        margin: 0px -15px;
    }
    .baivietcodinh.baivietcamnhan ul li {
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
    /* --------------------------------------------- San pham lien quan --------------------------------------------------- */
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
    }
    .sp_lienquan li a {
        font-weight: 500;
        color: #333;
        font-size: 20px;
        font-family: Quicksand, sans-serif;
        display: block;
        width: 100%;
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
    .list_bienthe-top {
    	background: #1e1e1d;
    	padding-top: 40px;
    	padding-bottom: 40px;
    }
    h1.title-header{font-size:35px;color:#000;font-weight:600;color:#fff;  text-align: center; margin-bottom: 15px;}
	h1.title-header span{display:block;text-align:center;font-size:20px;}

	.so-panel{margin-bottom:0px!important;}
	.story_product{;position:relative; padding: 20px 0px 40px 0px;}
	.story_product::before{content:"";position:absolute;left:-100%;height:100%;width:100%;display:block;top:0px;background:#222222;}
	.story_product::after{content:"";position:absolute;right:-100%;height:100%;width:100%;display:block;top:0px;background:#222222;}
	.story_product .textwidget{color:#cccccc;font-size:20px;line-height:30px;font-style:italic;max-width:950px;display:table;margin:0px auto;text-align:center;}
</style>
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
                <div class="mota_title"></div>
            </section>

		    <div class="text_custom story_product panel-widget-style panel-widget-style-for-6921-0-0-0">
		    	<div class="so-widget-sow-editor so-widget-sow-editor-base">
					<div class="siteorigin-widget-tinymce textwidget">
						<?php echo get_the_excerpt(); ?>
					</div>
				</div>
			</div>

			<div class="product-carousel owl-carousel owl-theme">
				<div class="item">
					<img src="https://www.minotti.com/media/immagini/26939_n_MINOTTI_CONNERY_03.jpg">
				</div>
				<div class="item">
					<img src="https://www.minotti.com/media/immagini/26939_n_MINOTTI_CONNERY_03.jpg">
				</div>
				<div class="item">
					<img src="https://www.minotti.com/media/immagini/26939_n_MINOTTI_CONNERY_03.jpg">
				</div>
				<div class="item">
					<img src="https://www.minotti.com/media/immagini/26939_n_MINOTTI_CONNERY_03.jpg">
				</div>
				<div class="item">
					<img src="https://www.minotti.com/media/immagini/26939_n_MINOTTI_CONNERY_03.jpg">
				</div>
			</div>

		</div>
        <div class="container">
            <div class="bienthe">
                <div class="row">
                    <div class="col col-md-5 col-12">
                        <div class="title"><span>Giá bán</span></div>
                        <span class="amount"><bdi>136,000,000&nbsp;<span class="">₫</span></bdi></span>                
                        <div class="mgg">
                            <p>Giá trên bao gồm: </p>
                            <p>-Văng 2      : L2190xW1020xH790                     </p>
                            <p>58.000.000đ</p>
                            <p>-Văng góc L: L3007xW1020/1600xH790       </p>
                            <p>78.000.000đ</p>
                        </div>
                    </div>
                    <div class="col col-md-2 col-12">
                    </div>
                    <div class="col col-md-5 col-12">
                        <small>Giá sản phẩm thay đổi tùy thuộc vào màu da, chất liệu da, động cơ...(Quý khách vui lòng liên hệ với nhân viên kinh doanh để nhận báo giá chi tiết)</small>
                    </div>
                </div>
                <!-- <div class="textwidget custom-html-widget">
                    <div class="hotro_detail">
                        <div class="content_hotro">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7">
                                    <div class="row">
                                        <div class="col-x-12 col-sm-4">
                                            <div class="title"><i class="fa fa-phone-square" aria-hidden="true"></i><br>TỔNG ĐÀI HỖ TRỢ<br>TƯ VẤN &amp; GIẢI ĐÁP MIỄN PHÍ</div>
                                        </div>
                                        <div class="col-x-12 col-sm-8">
                                            <p></p>
                                            <ul>
                                                <li>
                                                    <p><span style="font-size: 20px; color: #d90000;">094 920 8008</span> Hà Nội</p>
                                                    <p><span style="font-size: 20px; color: #d90000;">094 590 8008</span> Hồ Chí Minh</p>
                                                </li>
                                            </ul>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div>
        <div class="container chitiet_sanpham ">
            <div class="chitiet_sanpham_inner">
                <div class="panel-grid-cell">
                    <div class="widget_text" data-index="0">
                        <div class="widget_text text_title">
                            <div class="widget-title"><span>Thương hiệu</span></div>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="" data-index="1">
                        <div class="textwidget">
                            <p>Milano&amp;Design là thương hiệu trực thuộc tập đoàn sản xuất sofa da<strong>&nbsp;lớn thứ 2 châu Âu</strong>&nbsp;- Chateau d'Ax</p>
                            <p>Là thương hiệu có&nbsp;<strong>doanh số lớn nhất tại thị trường châu Á</strong>&nbsp;của tập đoàn&nbsp;</p>
                            <p><strong>Top 5 thương hiệu sofa lớn nhất Châu Á</strong></p>
                            <p>Kế thừa những giá trị tinh túy<strong>&nbsp;hơn 70 năm kinh nghiệm&nbsp;</strong>chế tác sofa da thủ công</p>
                            <p>Sự nghiên cứu kĩ lưỡng<b>&nbsp;dành riêng cho thị trường châu Á:&nbsp;</b>kích thước, khẩu độ ngồi...</p>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell">
                    <div class="widget_text " data-index="2">
                        <div class="widget_text text_title">
                            <div class="widget-title"><span>Chi tiết sản phẩm</span></div>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="" data-index="3">
                        <div class="textwidget">
                            <p><strong>An toàn cho sức khỏe</strong> gia đình bạn</p>
                            <p>Lưu giữ sự tự nhiên bằng <strong>Công nghệ thuộc da thảo mộc</strong> kì công – mất đến <strong>6 tuần</strong> để sản xuất &amp; chỉ <strong>10%</strong> sản phẩm sofa trên thế giới được thuộc bằng công nghệ này</p>
                            <p>Bộ sofa càng dùng càng <strong>mềm và đẹp</strong> bởi được làm bởi da <strong>CAT 4</strong> – <strong>Loại da cao cấp tại thị trường châu Á</strong></p>
                            <p>Sử dụng <strong>100% da bò thật</strong>, thu thập từ những con bò to khỏe nhất ở Nam Mỹ, Bắc Âu,...</p>
                            <p>Khung <strong>gỗ rừng tự nhiên</strong>&nbsp;</p>
                            <p>Quy trình <strong>sản xuất nghiêm ngặt</strong> gồm <strong>128 bước &amp; 3 lần kiểm tra khắt khe</strong></p>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell">
                    <div class="widget_text " data-index="4">
                        <div class="widget_text text_title">
                            <div class="widget-title"><span>Hậu Mãi</span></div>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="" data-index="5">
                        <div class="textwidget">
                            <p><strong>Đổi trả sản phẩm linh hoạt</strong></p>
                            <p>Doanh nghiệp duy nhất cho khách hàng đổi trả sản phẩm mà không cần hỏi lý do</p>
                            <p><strong>Mong ước sản phẩm luôn đẹp trong suốt quá trình sử dụng</strong></p>
                            <p>Chúng tôi tin rằng, sản phẩm cao cấp là luôn đẹp trong suốt quá trình bạn sử dụng, vì vậy Kenli cũng là đơn vị duy nhất trên thị trường thực hiện <strong>bảo dưỡng sản phẩm định kỳ 3 tháng/lần miễn phí</strong>.</p>
                            <p><strong>Bảo trì trọn đời sản phẩm</strong></p>
                            <p><strong>Bảo hành dài hạn</strong></p>
                            <p><strong>18 tháng</strong> bảo hành phần da và mút, động cơ</p>
                            <p><strong>48 tháng</strong> bảo hành cho khung gỗ sofa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
       <div class="container video_sanpham">
            <div class="video_sanpham_inner">
                <div class="panel-grid-cell">
                    <div class="" data-index="0">
                        <div class="textwidget">
                            <p style="text-align: center;"></p>
                            <div class="yt-video-place embed-responsive embed-responsive-4by3" data-yt-url="https://www.youtube.com/embed/eiVchpbB94g?rel=0&amp;showinfo=0"><img src="https://img.youtube.com/vi/eiVchpbB94g/hqdefault.jpg" data-src="https://img.youtube.com/vi/eiVchpbB94g/hqdefault.jpg" async="" class="play-yt-video ls-is-cached lazyloaded"><a class="start-video"><img width="64" src="https://noithatkenli.vn/wp-content/plugins/wp2speed/hoangweb/asset/play-btn.png" data-src="https://noithatkenli.vn/wp-content/plugins/wp2speed/hoangweb/asset/play-btn.png" class=" ls-is-cached lazyloaded"></a></div>
                            <p></p>
                            <p style="text-align: center;"><em>Sofa Nhập Khẩu Cao Cấp EE27 kết hợp bàn trà BaBa</em></p>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell">
                    <div class="" data-index="1">
                        <div class="textwidget">
                            <p style="text-align: center;"></p>
                            <div class="yt-video-place embed-responsive embed-responsive-4by3" data-yt-url="https://www.youtube.com/embed/mU0LFsReA9s?rel=0&amp;showinfo=0"><img src="https://img.youtube.com/vi/mU0LFsReA9s/hqdefault.jpg" data-src="https://img.youtube.com/vi/mU0LFsReA9s/hqdefault.jpg" async="" class="play-yt-video ls-is-cached lazyloaded"><a class="start-video"><img width="64" src="https://noithatkenli.vn/wp-content/plugins/wp2speed/hoangweb/asset/play-btn.png" data-src="https://noithatkenli.vn/wp-content/plugins/wp2speed/hoangweb/asset/play-btn.png" class=" ls-is-cached lazyloaded"></a></div>
                            <p></p>
                            <p style="text-align: center;"><em>Bộ Sofa Da Thật Văng Quây EE27 Màu Kem - Sang Trọng, Tinh Tế</em></p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
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
                        <p><span style="font-weight: 400;"><strong>Sofa da Agay EE27</strong> đến từ cái nôi nghệ thuật thế giới - Italia và mang trong mình sự tinh tế và chỉn chu trong từng đường nét. Đến từ thương hiệu nội thất <strong>Milano&amp;Design</strong>, thương hiệu nội thất trực thuộc tập đoàn lớn thứ 2 châu Âu - Chateau d’Ax, <strong>sofa da EE27</strong> sở hữu công nghệ thuộc da hàng đầu thế giới. M&amp;D đã được kế thừa những xu hướng và thiết kế hàng đầu từ thương hiệu mẹ và cho ra đời sofa Agay EE27 với thiết kế đầy <strong>sang trọng và bề thế</strong>.</span></p>
                        <p><img loading="lazy" alt="Sofa đặt tại phòng khách" width="1764" height="992" data-src="https://noithatkenli.vn/wp-content/uploads/2019/09/Sofa-da-Agay-EE27.jpg" class="wp-image-13555 size-full lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/Sofa-da-Agay-EE27.jpg">
                        <noscript><img class="wp-image-13555 size-full" src="https://noithatkenli.vn/wp-content/uploads/2019/09/Sofa-da-Agay-EE27.jpg" alt="Sofa đặt tại phòng khách" width="1764" height="992" /></noscript>
                        </p>
                        <p>&nbsp;</p>
                        <p><span style="font-weight: 400;"><strong>Sofa da EE27</strong> có thể thu hút mọi ánh nhìn với <strong>sự đẳng cấp</strong> toát lên trong từng chi tiết, tôn lên sự <strong>sang trọng, quyền lực</strong> cho không gian.</span></p>
                        <p><span style="font-weight: 400;">Được sản xuất với <strong>tiêu chuẩn da CAT4</strong> - tiêu chuẩn da cao nhất tại thị trường châu Á, lấy từ những con bò trưởng thành trên đồng cỏ Nam Mỹ, Brazil,... nên bộ sofa da Agay EE27 toát lên vẻ đẳng cấp cùng <strong>lớp da mịn màng, êm dịu</strong> mà hiếm bộ sofa trong nước nào có được.</span></p>
                        <p><span style="font-weight: 400;">Với phần tay vịn to, rộng cùng đường nét chắc chắn, EE27 tạo cảm giác <strong>êm ái, thư giãn</strong> cho người dùng. Cùng với đó là <strong>hệ thống động cơ</strong> có thể nâng chân mang đến<strong> tư thế thoải mái nhất</strong>, <strong>vỗ về những phút giây nghỉ ngơi</strong> của bạn và gia đình. Điều chỉnh tư thế <strong>dễ chịu nhất</strong> chỉ với một nút chạm để bạn đọc sách, xem phim và thư giãn vô cùng tiện ích.</span></p>
                    </div>
                    <div id="haumai" class="content_tab" style="display: none;">
                        <p style="text-align: justify;">Nhằm đem đến sự hài lòng tuyệt đối cho các khách hàng khi mua sản phẩm tại Kenli, chúng tôi luôn cố gắng mang đến những chương trình hậu mãi tốt nhất.</p>
                        <ol style="text-align: justify;">
                            <li><strong>Chính sách đổi sản phẩm</strong></li>
                        </ol>
                        <p style="text-align: justify;">Với mong muốn khách hàng có thể mua sắm sản phẩm ưng ý nhất, Công ty Kenli cho khách hàng đổi sản phẩm trong trường hợp thỏa mãn điều kiện sau:</p>
                        <p style="text-align: justify;">+ Sản phẩm khách hàng mới nhận trong vòng 24 giờ kể từ khi giao hàng.</p>
                        <p style="text-align: justify;">+ Sản phẩm chưa qua sử dụng.</p>
                        <p style="text-align: justify;">+ Sản phẩm nhận lại còn nguyên vẹn vỏ thùng, xốp và đầy đủ các phụ kiện kèm theo, quà khuyến mại (Nếu có)…..</p>
                        <p style="text-align: justify;">+ Không đổi trả đối với hàng đặt riêng theo nhu cầu của khách hàng.</p>
                        <ol style="text-align: justify;" start="2">
                            <li><strong>Chính sách bảo hành</strong></li>
                        </ol>
                        <p style="text-align: justify;">- Kenli quy định thời gian bảo hành với một số sản phẩm là như sau:</p>
                        <ul style="text-align: justify;">
                            <li>Đối với sofa da nhập khẩu: Bảo hành 18 tháng đối với phần da bọc, đệm mút, động cơ và 48 tháng đối với khung gỗ kể từ ngày giao hàng.</li>
                            <li>Đối với sản phẩm từ đá Vicostone: Bảo hành 15 năm theo chính sách của hãng Vicostone.</li>
                            <li>Đối với các sản phẩm khác: Bảo hành miễn phí một năm, bảo trì trọn đời.</li>
                        </ul>
                        <p style="text-align: justify;">(Xem chi tiết ở&nbsp;<a href="https://noithatkenli.vn/chinh-sach-bao-hanh" target="_blank" rel="noopener noreferrer"><strong><span style="color: #008000;">C</span><span style="color: #008000;">hính sách Bảo hành</span></strong></a>).</p>
                        <p style="text-align: justify;">- Trong quá trình sử dụng nếu bạn không may gặp phải bất kì sự cố nào, đội ngũ Kỹ thuật của Kenli sẽ ngay lập tức đến xử lý cho bạn miễn phí. Bất cứ khi nào bạn cần, chỉ cần bạn liên hệ Hotline CSKH – BH: 18006398</p>
                        <p style="text-align: justify;">- Ngoài ra, theo định kì Bộ phận CSKH sẽ tự động liên hệ gọi chăm sóc khách hàng hàng tháng để kiểm tra về tình trạng sản phẩm và nhận phản hồi hay những góp ý về dịch vụ/trải nghiệm sản phẩm từ khách hàng. Dựa theo tình trạng, đội ngũ Kỹ thuật sẽ chủ động tiến hành các hoạt động chăm sóc sản phẩm như: làm sáng, lau chùi, làm bóng,...</p>
                        <p style="text-align: justify;"><strong>3. Chính sách giao hàng</strong></p>
                        <ul style="text-align: justify;">
                            <li><em><strong>Phạm vi áp dụng:</strong></em></li>
                        </ul>
                        <p style="text-align: justify;">Tất cả các đơn hàng của khách hàng mua sản phẩm tại hệ thống website của Kenli hoặc hệ thống showroom :</p>
                        <ul style="text-align: justify;">
                            <li>HN: Toà nhà Kenli, số 2 Phố Dịch Vọng Hậu, Cầu Giấy, HN</li>
                            <li>HCM: Số 26 Nguyễn Cơ Thạch, KĐT Sala, P. An Lợi Đông, Q.2, HCM</li>
                        </ul>
                        <ul style="text-align: justify;">
                            <li><em><strong>Hình thức áp dụng:</strong></em></li>
                            <li>Giao hàng miễn phí:</li>
                        </ul>
                        <p style="text-align: justify;">Giao hàng miễn phí trong phạm vi nội thành Hà Nội và nội thành Hồ Chí Minh. Áp dụng cho đơn hàng giá trị từ 10tr đồng trở lên.</p>
                        <ul style="text-align: justify;">
                            <li>Giao hàng tính phí:</li>
                        </ul>
                        <p style="text-align: justify;">Ngoài trường hợp giao hàng miễn phí trên, các trường hợp còn lại sẽ được tính phí giao hàng theo bảng phí vận chuyển của hãng vận chuyển thứ 3 hoặc theo bảng phí của Kenli.</p>
                        <p style="text-align: justify;">Chi phí này sẽ được Kenli thông báo và xác nhận với quý khách trước khi quý khách xác nhận thanh toán và chúng tôi tiến hành gửi hàng.</p>
                        <ul style="text-align: justify;">
                            <li><em><strong>Thời gian giao hàng:</strong></em></li>
                        </ul>
                        <p style="text-align: justify;">Thời gian giao hàng từ 1-5 ngày tùy theo khoảng cách vận chuyển.</p>
                        <p style="text-align: justify;">Trong một số trường hợp khách quan Kenli có thể giao hàng chậm trễ do những điều kiện bất khả kháng như thời tiết xấu, điều kiện giao thông không thuận lợi, xe hỏng hóc trên đường hay trục trặc trong quá trình xuất hàng.</p>
                        <p style="text-align: justify;">Trong thời gian chờ nhận hàng, Qúy khách có bất cứ thắc mặc gì về thông tin vận chuyển hay cần hỗ trợ xin vui lòng liên hệ hotline CSKH: 18006398 để nhận được sự trợ giúp nhanh nhất.<strong><em>&nbsp;</em></strong></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                    <div id="video_tap" class="content_tab" style="display: none;">
                        <p style="text-align: center;"></p>
                        <div class="yt-video-place embed-responsive embed-responsive-4by3" data-yt-url="https://www.youtube.com/embed/Nw6QF43yBwo?rel=0&amp;showinfo=0"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://img.youtube.com/vi/Nw6QF43yBwo/hqdefault.jpg" async="" class=" lazy play-yt-video"><a class="start-video"><img width="64" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://noithatkenli.vn/wp-content/plugins/wp2speed/hoangweb/asset/play-btn.png" class=" lazy "></a></div>
                        <p></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="baivietcodinh baivietcamnhan" role="toolbar">
                <h3 class="title"><span>Cảm nhận khách hàng</span></h3>
                <ul class="row slide_camnhan slick-initialized slick-slider">
                    <li class="col-lg-4 col-sm-6 slick-slide slick-current slick-active" style="" tabindex="0" role="option" aria-describedby="slick-slide10" data-slick-index="0" aria-hidden="false">
                        <figure class="featured-thumbnail thumbnail">
                            <a rel="nofollow" href="https://noithatkenli.vn/sofa-da-ee27-anh-ngoc-quang-hoang-mai" tabindex="0">
                                <img loading="lazy" title="Anh Ngọc Quang – Hoàng Mai, Hà Nội;" alt="Anh Ngọc Quang – Hoàng Mai, Hà Nội" data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/anh-bia-4-dong-690-1-360x240.jpg" class="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/08/anh-bia-4-dong-690-1-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2019/08/anh-bia-4-dong-690-1-360x240.jpg" title="Anh Ngọc Quang &#8211; Hoàng Mai, Hà Nội;" alt="Anh Ngọc Quang &#8211; Hoàng Mai, Hà Nội"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/sofa-da-ee27-anh-ngoc-quang-hoang-mai" rel="nofollow" title="Anh Ngọc Quang – Hoàng Mai, Hà Nội" tabindex="0">Anh Ngọc Quang – Hoàng Mai, Hà Nội</a>
                            <div class="excerpt">
                                Tôi cảm thấy rất hài lòng về chất lượng sản phẩm và dịch vụ giao hàng, chăm sóc của Kenli....                                                 
                            </div>
                            <div class="readmore"><a href="https://noithatkenli.vn/sofa-da-ee27-anh-ngoc-quang-hoang-mai" rel="nofollow" title="Anh Ngọc Quang – Hoàng Mai, Hà Nội" tabindex="0">Xem thêm</a></div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-sm-6 slick-slide slick-active" style="" tabindex="0" role="option" aria-describedby="slick-slide11" data-slick-index="1" aria-hidden="false">
                        <figure class="featured-thumbnail thumbnail">
                            <a rel="nofollow" href="https://noithatkenli.vn/sofa-da-ee27-co-phuong-khu-biet-thu-trang-an-complex" tabindex="0">
                                <img loading="lazy" title="Cô Phương – Biệt thự Tràng An Complex;" alt="Cô Phương – Biệt thự Tràng An Complex" data-src="https://noithatkenli.vn/wp-content/uploads/2019/08/anh-bia-5-1-1-360x240.jpg" class="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/08/anh-bia-5-1-1-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2019/08/anh-bia-5-1-1-360x240.jpg" title="Cô Phương &#8211; Biệt thự Tràng An Complex;" alt="Cô Phương &#8211; Biệt thự Tràng An Complex"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/sofa-da-ee27-co-phuong-khu-biet-thu-trang-an-complex" rel="nofollow" title="Cô Phương – Biệt thự Tràng An Complex" tabindex="0">Cô Phương – Biệt thự Tràng An Complex</a>
                            <div class="excerpt">
                                Tôi rất hài lòng với sản phẩm sofa nhà Kenli. Đẹp sang trọng cộng thái độ CSKH vệ sinh sản phẩm như mới rất tốt....                                                 
                            </div>
                            <div class="readmore"><a href="https://noithatkenli.vn/sofa-da-ee27-co-phuong-khu-biet-thu-trang-an-complex" rel="nofollow" title="Cô Phương – Biệt thự Tràng An Complex" tabindex="0">Xem thêm</a></div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-sm-6 slick-slide slick-active" style="" tabindex="0" role="option" aria-describedby="slick-slide12" data-slick-index="2" aria-hidden="false">
                        <figure class="featured-thumbnail thumbnail">
                            <a rel="nofollow" href="https://noithatkenli.vn/sofa-ee27-ban-baba-nha-chi%cc%a3-van-vinhome-bason-ho-chi-minh" tabindex="0">
                                <img loading="lazy" title="Chị Vân – Vinhome Bason, HCM;" alt="Chị Vân – Vinhome Bason, HCM" data-src="https://noithatkenli.vn/wp-content/uploads/2018/08/nha-khach-chi-van-2-360x240.jpg" class="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2018/08/nha-khach-chi-van-2-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/08/nha-khach-chi-van-2-360x240.jpg" title="Chị Vân &#8211; Vinhome Bason, HCM;" alt="Chị Vân &#8211; Vinhome Bason, HCM"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/sofa-ee27-ban-baba-nha-chi%cc%a3-van-vinhome-bason-ho-chi-minh" rel="nofollow" title="Chị Vân – Vinhome Bason, HCM" tabindex="0">Chị Vân – Vinhome Bason, HCM</a>
                            <div class="excerpt">
                                Nhà mình đã tham khảo rất nhiều đơn vị cung cấp đồ nội thất nhập khẩu và cuối cùng quyết định chọn mua nguyên set sofa EE27- bàn trà Baba tại Kenli. Khách nhà mình tới ai cũng ưng vì mẫu mã đẹp, khung chắc chắn, đường nét lại rất...                                                 
                            </div>
                            <div class="readmore"><a href="https://noithatkenli.vn/sofa-ee27-ban-baba-nha-chi%cc%a3-van-vinhome-bason-ho-chi-minh" rel="nofollow" title="Chị Vân – Vinhome Bason, HCM" tabindex="0">Xem thêm</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sp_lienquan">
        <div class="container">
            <div class="baivietlienquan sp_lienquan_inner">
                <h3 class="title"><span>Sản phẩm liên quan</span></h3>
                <ul class="row">
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-vast">
                                <img loading="lazy" title="VAST;" alt="VAST" data-src="https://noithatkenli.vn/wp-content/uploads/2018/07/Ban-tra-Vast-09-360x240.jpg" class="lazyload lazyloaded ls-is-cached" src="https://noithatkenli.vn/wp-content/uploads/2018/07/Ban-tra-Vast-09-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/07/Ban-tra-Vast-09-360x240.jpg" title="VAST;" alt="VAST"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-vast" rel="bookmark" title="VAST">VAST</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-noguchi">
                                <img loading="lazy" title="NOGUCHI;" alt="NOGUCHI" data-src="https://noithatkenli.vn/wp-content/uploads/2018/09/Noguchi_5-360x240.jpg" class="lazyload lazyloaded ls-is-cached" src="https://noithatkenli.vn/wp-content/uploads/2018/09/Noguchi_5-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/09/Noguchi_5-360x240.jpg" title="NOGUCHI;" alt="NOGUCHI"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-noguchi" rel="bookmark" title="NOGUCHI">NOGUCHI</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-baba">
                                <img loading="lazy" title="BABA;" alt="BABA" data-src="https://noithatkenli.vn/wp-content/uploads/2019/09/Baba-05-360x240.jpg" class="lazyload lazyloaded ls-is-cached" src="https://noithatkenli.vn/wp-content/uploads/2019/09/Baba-05-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2019/09/Baba-05-360x240.jpg" title="BABA;" alt="BABA"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-baba" rel="bookmark" title="BABA">BABA</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-concorde">
                                <img loading="lazy" title="Concorde;" alt="Concorde" data-src="https://noithatkenli.vn/wp-content/uploads/2018/09/tongthe_3-scaled-360x240.jpg" class="lazyload lazyloaded " src="https://noithatkenli.vn/wp-content/uploads/2018/09/tongthe_3-scaled-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/09/tongthe_3-scaled-360x240.jpg" title="Concorde;" alt="Concorde"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-concorde" rel="bookmark" title="Concorde">Concorde</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-lythos">
                                <img loading="lazy" title="LYTHOS;" alt="LYTHOS" data-src="https://noithatkenli.vn/wp-content/uploads/2021/05/Ban-tra-Lythos-01-360x240.jpg" class="lazyload lazyloaded " src="https://noithatkenli.vn/wp-content/uploads/2021/05/Ban-tra-Lythos-01-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2021/05/Ban-tra-Lythos-01-360x240.jpg" title="LYTHOS;" alt="LYTHOS"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-lythos" rel="bookmark" title="LYTHOS">LYTHOS</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-solange">
                                <img loading="lazy" title="SOLANGE;" alt="SOLANGE" data-src="https://noithatkenli.vn/wp-content/uploads/2018/09/solange-360x240.jpg" class="lazyload lazyloaded " src="https://noithatkenli.vn/wp-content/uploads/2018/09/solange-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/09/solange-360x240.jpg" title="SOLANGE;" alt="SOLANGE"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-solange" rel="bookmark" title="SOLANGE">SOLANGE</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-paul">
                                <img loading="lazy" title="PAUL;" alt="PAUL" data-src="https://noithatkenli.vn/wp-content/uploads/2018/09/p-360x240.jpg" class="lazyload lazyloaded " src="https://noithatkenli.vn/wp-content/uploads/2018/09/p-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/09/p-360x240.jpg" title="PAUL;" alt="PAUL"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-paul" rel="bookmark" title="PAUL">PAUL</a>
                        </div>
                    </li>
                    <li class="col-sm-6 col-lg-4">
                        <figure class="featured-thumbnail thumbnail">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-yard">
                                <img loading="lazy" title="YARD;" alt="YARD" data-src="https://noithatkenli.vn/wp-content/uploads/2018/09/YARD-A-360x240.jpg" class="lazyload lazyloaded " src="https://noithatkenli.vn/wp-content/uploads/2018/09/YARD-A-360x240.jpg">
                                <noscript><img src="https://noithatkenli.vn/wp-content/uploads/2018/09/YARD-A-360x240.jpg" title="YARD;" alt="YARD"/></noscript>
                            </a>
                        </figure>
                        <div class="content">
                            <a href="https://noithatkenli.vn/san-pham/ban-tra-yard" rel="bookmark" title="YARD">YARD</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

      <?php
        	get_template_part('template-parts/home', 'partner');
            get_template_part('template-parts/home', 'contact-form');
        ?>

</main><!-- #main -->
<?php
get_footer();
