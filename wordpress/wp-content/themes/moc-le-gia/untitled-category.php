<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moc-le-gia
 */

get_header();

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
    .category__product-item .thumbnail  >a >img {
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
    .category__collapse-group  .name-cts {
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
    .category__collapse-group  .title_term {
        font-size: 18px;
        color: #6d6d6d;
        margin: 10px 5px;
    }
    
   

</style>
<main id="category" class="site-category">
    <div class="wrap-category-banner">
        <div class="category-banner">
            <img class="img-banner" src="https://noithatkenli.vn/wp-content/uploads/2021/01/Sofa.jpg" />
        </div>
    </div>

    <div class="container">
        <section class="category__title-section">
            <h1 class="title-header">SOFA</h1>
            <div class="mota_title"><p>Sofa da bò sang trọng - Tinh tế - Đẳng cấp</p></div>
        </section>
    </div>
    
    <div class="category__product">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category__product-item">
                       <figure class="featured-thumbnail thumbnail ">
                          <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co">
                             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                         </a>
                     </figure>
                     <div class="post_content">
                      <div class="post-title">
                        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
                     <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                 </a>
             </figure>
             <div class="post_content">
              <div class="post-title">
                <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
         </a>
     </figure>
     <div class="post_content">
      <div class="post-title">
        <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
            <span>AGAY</span><span>Milano &amp; Design</span>
        </a>
    </div>
</div>
</div>
</div>

</div>
</div>
</div>

<div class="category__collapse">
    <div class="container">
        <div class="category__collapse-group"> 
            <div class="post-list_h" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                         </a>
                     </figure>
                             <div class="post_content">
                              <div class="post-title">
                                <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
                             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                         </a>
                     </figure>
                             <div class="post_content">
                              <div class="post-title">
                                <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
                             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                         </a>
                     </figure>
                             <div class="post_content">
                              <div class="post-title">
                                <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
                             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                         </a>
                     </figure>
                             <div class="post_content">
                              <div class="post-title">
                                <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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
                             <img alt="AGAY" dclass="lazyload lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/09/view-5-1-270x180.jpg">
                         </a>
                     </figure>
                             <div class="post_content">
                              <div class="post-title">
                                <a href="https://noithatkenli.vn/san-pham/sofa-da-that-agay-full-bo-co-dong-co" title="AGAY">
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




<style type="text/css">
    .chitiet_bottom {
        height: auto;
        margin: 25px 0;
        border: 1px solid;
        padding: 0 20px !important;
    }
.chitiet_bottom  .center {
    text-align: center;
}

.chitiet_bottom  h2, .chitiet_bottom  h3, .chitiet_bottom  h4, .chitiet_bottom  h5 {
    color: #000;
}
.chitiet_bottom  h2, .h2 {
    font-size: 25px;
}
.chitiet_bottom  h1, .chitiet_bottom  .h1, .chitiet_bottom  h2, .chitiet_bottom  .h2, .chitiet_bottom  h3, .chitiet_bottom  .h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
.chitiet_bottom  h1, .chitiet_bottom  h2, .chitiet_bottom  h3, .chitiet_bottom  h4, .chitiet_bottom  h5, .chitiet_bottom  h6, .chitiet_bottom  .h1, .chitiet_bottom  .h2, .chitiet_bottom  .h3, .chitiet_bottom  .h4, .chitiet_bottom  .h5, .chitiet_bottom  .h6 {
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
        <div class="container">
            <div class="chitiet_bottom" style="padding: 30px 0px;">
                    <h2 class="center">Bàn Ghế Ăn Nhập Khẩu Italia bởi Kenli - Sang Trọng và Độc Đáo</h2>
<p>Nội thất Kenli chuyên cung cấp các mẫu <strong>Bàn ghế ăn</strong> biệt thự, <strong>Bàn ghế ăn</strong> hiện đại Ý, <strong>Bàn ghế ăn</strong> nhập khẩu cao cấp,... với đa dạng sự lựa chọn, đáp ứng mọi nhu cầu.</p>
<p>Các mẫu <strong>Bàn ghế ăn</strong> tại Kenli đều là những thiết kế đình đám, được sáng tạo bởi những kiến trúc sư, nhà thiết kế hàng đầu trên thế giới. Nội thất Kenli luôn là đơn vị tiên phong cung cấp những mẫu <strong>bàn ghế ăn</strong> độc đáo nhất ra thị trường. Mẫu mã của chúng tôi luôn mới nhất, độc đáo nhất. Tất cả những mẫu <strong>Bàn ghế ăn</strong> giống của Kenli trên thị trường đều là sự sao chép lại.</p>
<h3>Nguồn Cảm Hứng KENLI</h3>
<p>Kenli mê mẩn với vẻ đẹp của những thiết kế <strong>Bàn ghế ăn</strong> sang trọng mang đậm hơi thở hiện đại Italy. Tuy nhiên chúng tôi không chỉ muốn sản phẩm của mình dừng lại ở vẻ đẹp bên ngoài mà còn phải mang đến công năng sử dụng hiệu quả cho người dùng.</p>
<p>Vì vậy bên cạnh việc học hỏi các mẫu mã từ những thiết kế đình đám từ nước ngoài, đội ngũ chúng tôi cũng không ngừng lắng nghe phản hồi của thị trường để có những cải tiến phù hợp.</p>
<p>Những mẫu <strong>Bàn ghế ăn</strong> là sự sáng tạo bay bổng của riêng Kenli, kết hợp hài hòa 2 yếu tố thẩm mỹ bên ngoài và chất lượng bên trong. Mang đến những thiết kế độc đáo, hiện đại, sang trọng mà vẫn đảm bảo tiện ích cho người dùng.</p>
<h3>Bàn ghế ăn tại Kenli có điểm gì khác biệt?</h3>
<p><strong>Bàn ghế ăn</strong> Kenli được sản xuất từ những nguyên liệu cao cấp nhất, nhập khẩu từ những nhà máy lớn với tiêu chuẩn khắt khe nhất trên thế giới:</p>
<p>Mặt bàn ăn được làm từ Đá nhân tạo gốc thạch anh với những ưu điểm vượt trội:</p>
<h4>Độ bền cao</h4>
<p>Đá nhân tạo gốc thạch anh với 93% gốc thạch anh, với độ cứng đứng thứ 2 chỉ sau kim cương. Những chiếc bàn ăn đá nhân tạo gốc thạch anh có độ bền tuyệt vời, khó bị trầy xước hay nứt vỡ. Bàn ăn dùng 15 năm vẫn bền đẹp như mới.</p>
<h4>Vệ sinh đơn giản</h4>
<p>Bàn ăn đá nhân tạo gốc thạch anh với bề mặt đặc khít, không có các kẽ nứt hay lỗ khí. Điều này khiến cho thức ăn, đồ uống không thể bám cặn trên mặt bàn ăn gây ố vàng. Chỉ cần 1 chiếc khăn mềm là bạn đã có thể lau sạch mọi vết bẩn, khiến cho công việc vệ sinh trở nên dễ dàng, đơn giản hơn bao giờ hết.</p>
<h4>Đường nét vân đá thanh thoát</h4>
<p>Nếu như ở đá tự nhiên đường nét vân mây bị giới hạn, thiếu sinh động thì ở đá nhân tạo sự sáng tạo là bất tận. Mỗi mẫu đá là một bức tranh muôn hình vạn trạng của thiên nhiên, không mẫu đá nào giống mẫu đá nào. Đó có thể là thiên đường vũ điệu sấm sét, là rừng phủ tuyết trắng đẹp tê tái, là dòng chảy cuồn cuộn của những con sông, là cành lá lúc chớm thu hay sự vần vũ của những cơn bão nhiệt đới…</p>
<h4>Đảm bảo an toàn vệ sinh thực phẩm</h4>
<p>Chất liệu đá nhân tạo gốc thạch anh được các phòng thí nghiệm nổi tiếng trên thế giới như Greenguard – Georgia (Hoa Kỳ chứng nhận đạt tiêu chuẩn ngăn ngừa sự phát triển của vi khuẩn.</p>
<p>Với những chiếc bàn ăn mặt đá nhân tạo gốc thạch anh, gia đình bạn hoàn toàn yên tâm dùng bữa mà không sợ lây lan những vi khuẩn có hại cho đồ ăn. Nhờ đó đảm bảo sức khỏe cho những người thân yêu của bạn và đặc biệt là trẻ nhỏ.</p>
<p>Chất liệu dùng làm chân <strong>Bàn ghế ăn</strong> đều là từ những loại gỗ cao cấp nhất:</p>
<ul>
    <li>Kenli chỉ sử dụng các loại gỗ như Teak hay óc chó đối với chân <strong>bàn ghế ăn</strong>. Đây đều là những loại gỗ có độ bền cao, chống mối mọt, cong vênh và có giá trị khá cao trên thị trường.</li>
    <li>Đường nét vân gỗ tự nhiên mang đến vẻ đẹp sang trọng, độc đáo.</li>
</ul>
<h3>Vì sao bạn nên mua Bàn ghế ăn tại Kenli?</h3>
<p>Tại Kenli, chăm sóc khách hàng sau bán là điều chúng tôi đặc biệt chú trọng:</p>
<ul>
    <li>Hỗ trợ ngay lập tức nếu sản phẩm gặp bất kỳ vấn đề gì</li>
    <li>Đổi trả hàng trong vòng 24h nếu quý khách không ưng ý</li>
    <li>Chủ động gọi điện để tiến hành vệ sinh, kiểm tra sản phẩm định kỳ</li>
    <li>Đặc biệt, cam kết bảo hành Bàn ăn mặt đá lên đến 15 năm</li>
</ul>
<p><strong>Bàn ghế ăn</strong> Kenli là sự lựa chọn hoàn hảo với tính thẩm mỹ cao cùng với công năng vô cùng tiện ích. Đây hứa hẹn là những điểm nhấn sáng giá cho không nhà bạn.</p>
<div id="eJOY__extension_root" style="all: unset;">&nbsp;</div>                </div>
        </div>
</main><!-- #main -->

<?php
get_footer();
