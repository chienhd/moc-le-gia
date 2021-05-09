<?php
// Check core class for avoid errors
if (class_exists('CSF')) {

    // Set a unique slug-like ID
    $prefix = 'my_framework';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Tùy chỉnh Theme',
        'menu_slug' => 'my-framework',
        'framework_title' => 'Mộc Lê Gia',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Logo',
        'fields' => array(
            // A text field
            array(
                'type'    => 'media',
                'title'   => 'Logo',
                'library' => 'image',
                'url' => false,
                'class' => 'theme-option__preview-logo'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Tab Title 2',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'opt-textarea',
                'type' => 'textarea',
                'title' => 'Simple Textarea',
            ),

        )
    ));

    /**================Footer Options================*/
    // Create a top-tab
    CSF::createSection($prefix, array(
        'id' => 'footer_tab', // Set a unique slug-like ID
        'title' => 'Footer',
    ));
    // Create a sub-tab
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab', // The slug id of the parent section
        'title' => 'Footer Block 1',

        'fields' => array(

            // Footer block 1
            array(
                'id' => 'footer_tab_block_1',
                'type' => 'code_editor',
                'title' => 'HTML Editor 1',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_name">
   <h4 class="footer_widget_title">CÔNG TY CỔ PHẦN KIẾN TRÚC<br>
      NỘI THẤT AHOME
   </h4>
   <p>Office &amp; Showroom Nội thất: Số 35 – Phan Kế Bính – Ba Đình – Hà Nội</p>
   <p>Showroom Decor: Số 116 – Phan Kế Bính – Ba Đình – Hà Nội</p>
   <p>Thời gian mở cửa: 8h30 – 18h30 kể cả thứ 7 và Chủ nhật.</p>
   <p>Có vị trí đỗ xe ô tô</p>
   <p><a href="https://www.google.com/maps/place/Thi%E1%BA%BFt+k%E1%BA%BF+n%E1%BB%99i+th%E1%BA%A5t+Ahome/@21.035396,105.806627,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab6912cd1d81:0xbf798b44563bc91b!8m2!3d21.035396!4d105.8088157?hl=vi-VN"><img class="size-full wp-image-98 alignleft" src="https://noithatahome.vn/wp-content/uploads/2018/04/icon-map.png" alt="" width="32" height="31"> Bản đồ chỉ dẫn </a></p>
</div>'
            ),

        )
    ));
    // Footer block 2
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 2',
        'fields' => array(

            // HTML Editor
            array(
                'id' => 'footer_tab_block_2',
                'type' => 'code_editor',
                'title' => 'HTML Editor 2',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_contact">
   <h4 class="footer_widget_title">THÔNG TIN LIÊN HỆ</h4>
   <div class="textwidget">
      <p>Hotline : 098 10 888 66</p>
      <p>Email : ahome8866@gmail.com</p>
      <p>Website : <a href="https://noithatahome.vn">noithatahome.vn</a></p>
      <div class="social">
        <a href="https://www.facebook.com/ahome8866/">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#">
          <i class="fa fa-google-plus" aria-hidden="true"></i>
        </a>
        <a href="https://plus.google.com/u/0/105582762864756550248">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCSyZd433RzC_ueCdsAxHf2g">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
      </div>

      <!-- dmca !-->
      <a href="//www.dmca.com/Protection/Status.aspx?ID=7bf91cdc-d573-4b4b-bca9-1d100a23314a&amp;refurl=https://noithatahome.vn/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=7bf91cdc-d573-4b4b-bca9-1d100a23314a" alt="DMCA.com Protection Status"></a>
      <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>

      <!-- end dmca !-->
   </div>
</div>',
            ),

        )
    ));
    // HTML Editor
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 3',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'footer_tab_block_3',
                'type' => 'code_editor',
                'title' => 'HTML Editor 3',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_link">
   <h4 class="footer_widget_title">Liên kết</h4>
   <div class="textwidget">
      <ul>
         <li><a href="https://noithatahome.vn/thiet-ke-noi-that/">Thiết kế nội thất</a></li>
         <li><a href="https://noithatahome.vn/thi-cong-noi-that/">Thi công nội thất</a></li>
         <li><a href="https://noithatahome.vn/showroom-noi-that-ahome/">Nội thất cao cấp</a></li>
      </ul>
      
   </div>
</div>
<div class="widget footer_widget_newspapers">
   <div class="textwidget">
      <ul>
         <li><a href="http://dantri.com.vn/nha-dep/noi-that-ahome-ra-mat-bo-suu-tap-phong-cach-y-20180614093844195.htm"><img src="https://noithatahome.vn/wp-content/uploads/dt.png"></a></li>
         <li><a href="#"><img src="https://noithatahome.vn/wp-content/uploads/h1.png"></a></li>
         <li><a href="https://vnexpress.net/ben-trong-biet-thu-230m2-o-ha-noi-4011897.html"><img src="https://noithatahome.vn/wp-content/uploads/vn.png"></a></li>
         <li><a href="https://vtv.vn/video/khong-gian-xanh-kien-truc-su-luu-phuc-loc-to-am-gan-ket-yeu-thuong-424808.htm"><img src="https://noithatahome.vn/wp-content/uploads/vtv.png"></a></li>
      </ul>
   </div>
</div>'
            ),

        )
    ));
    // HTML Editor
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 4',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'footer_tab_block_4',
                'type' => 'code_editor',
                'title' => 'HTML Editor 4',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_support">
   <h3 class="footer_widget_title">HỖ TRỢ KHÁCH HÀNG</h3>
   <div class="textwidget">
      <ul>
         <li><a href="https://noithatahome.vn/chinh-sach-bao-mat-thong-tin-cua-ahome/">Chính sách bảo mật thông tin</a></li>
         <li><a href="https://noithatahome.vn/chinh-sach-va-quy-dinh-ve-dich-vu-cua-ahome/">Chính sách và quy định</a></li>
         <li><a href="https://noithatahome.vn/map-chi-duong-den-showroom-noi-that/">Sơ đồ chỉ đường</a></li>
      </ul>
   </div>
</div>'
            ),

        )
    ));
    // HTML Editor
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 5',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'footer_tab_block_5',
                'type' => 'gallery',
                'title' => 'Ảnh bên dưới Footer',
                'add_title' => 'Add Images',
                'edit_title' => 'Edit Images',
                'clear_title' => 'Remove Images',
            ),

            array(
                'id' => 'footer_tab_block_5_2',
                'type' => 'text',
                'title' => 'Copy Right',
                'default' => '© 2018 - Nội thất Ahome'
            ),
            array(
                'id' => 'footer_tab_block_5_3',
                'type' => 'text',
                'title' => 'Phone',
            ),
            array(
                'id' => 'footer_tab_block_5_4',
                'type' => 'text',
                'title' => 'Zalo',
            ),
            array(
                'id' => 'footer_tab_block_5_5',
                'type' => 'text',
                'title' => 'Message',
            ),
        )
    ));
    /**================End Footer Options================*/


}