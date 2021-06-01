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
               'id' => 'opt-media-logo',
                'type' => 'media',
                'title' => 'Logo',
                'library' => 'image',
                'preview_size' => 'full',
                'url' => true,
            ),

        )
    ));
     //banner

    CSF::createSection($prefix, array(
        'id' => 'home-partner',
        'title' => 'Banner',
        'fields' => array(
            // A textarea field
            array(
                'id' => 'home-banner-gallery',
                'type' => 'gallery',
                'title' => 'Hình ảnh banner',
                'add_title' => 'Thêm mới',
                'edit_title' => 'Chỉnh sửa',
                'clear_title' => 'Xóa',
            ),

        )
    ));
    // Bo suu tap noi that
    CSF::createSection($prefix, array(
        'title' => 'Bộ sưu tập nội thất',
        'id' => 'home-collection',
        'fields' => array(

            array(
                'id' => 'home-collection-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
                'default' => 'BỘ SƯU TẬP NỘI THẤT - MỘC LÊ GIA'
            ),
            array(
                'id' => 'home-collection-desc',
                'type' => 'textarea',
                'title' => 'Mô tả',
                'default' => 'Nhà là gia đình - Cùng trải nghiệm những sản phẩm và dịch vụ đẳng cấp hàng đầu thế giới, cùng tô điểm Yêu thương cho gia đình!'
            ),
            array(
                'id' => 'home-collection-group',
                'type' => 'group',
                'title' => 'Thêm Bộ sưu tập',
                'fields' => array(
                    array(
                        'id' => 'name',
                        'type' => 'text',
                        'title' => 'Tên Bộ sưu tập (Bên trên ảnh)',
                    ),
                    array(
                        'id' => 'link',
                        'type' => 'text',
                        'title' => 'Đường dẫn cho Bộ sưu tập',
                    ),
                    array(
                       'id' => 'image',
                        'type' => 'media',
                        'title' => 'Hình ảnh Bộ sưu tập',
                        'library' => 'image',
                        'preview_size' => 'full',
                        'url' => false,
                    ),
                     array(
                        'id' => 'name2',
                        'type' => 'text',
                        'title' => 'Tên Bộ sưu tập (Bên dưới)',
                    ),
                     array(
                        'id'            => 'desc',
                        'type'          => 'wp_editor',
                        'title'         => 'Mô tả ngắn',
                        'tinymce'       => true,
                        'quicktags'     => true,
                        'media_buttons' => false,
                      
                ),
            ),
          )      
        )
    ));

      // san pham
    CSF::createSection($prefix, array(
        'title' => 'Sản phẩm',
        'id' => 'home-product',
        'fields' => array(
            array(
                'id' => 'home-product-group',
                'type' => 'group',
                'title' => 'Sản phẩm',
                'fields' => array(
                    array(
                        'id' => 'name',
                        'type' => 'text',
                        'title' => 'Tên sản phẩm',
                    ),
                    array(
                        'id' => 'link',
                        'type' => 'text',
                        'title' => 'Đường dẫn cho sản phẩm',
                    ),
                    array(
                       'id' => 'image',
                        'type' => 'media',
                        'title' => 'Hình ảnh Sản phẩm',
                        'library' => 'image',
                        'preview_size' => 'full',
                        'url' => false,
                    ),
                     array(
                        'id' => 'desc',
                        'type' => 'text',
                        'title' => 'Mô tả ngắn',
                    ),
                ),
            ),

        )
    ));

      // Tin tức
    CSF::createSection($prefix, array(
        'title' => 'Tin tức',
        'id' => 'home-news',
        'fields' => array(

            array(
                'id' => 'home-news-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
              'id'          => 'home-news-select-post',
              'type'        => 'select',
              'title'       => 'Chọn bài posts',
              'placeholder' => 'Select posts',
              'chosen'      => true,
              'multiple'    => true,
              'sortable'    => true,
              'options'     => 'posts',
            ),

        )
    ));

        // Tin tức
    CSF::createSection($prefix, array(
        'title' => 'Video Nội thất',
        'id' => 'home-video',
        'fields' => array(

            array(
                'id' => 'home-video-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
                'id' => 'home-video-group',
                'type' => 'group',
                'title' => 'Video sản phẩm',
                'fields' => array(
                    array(
                        'id' => 'name',
                        'type' => 'text',
                        'title' => 'Tên video',
                    ),
                    array(
                       'id' => 'image',
                        'type' => 'media',
                        'title' => 'Hình ảnh video',
                        'library' => 'image',
                        'preview_size' => 'full',
                        'url' => false,
                    ),
                    array(
                        'id'    => 'iframe',
                        'type'  => 'text',
                        'title'   => 'link video youtube',
                        'defaul' => 'https://www.youtube.com/embed/7ZMF66BFCsQ'
                      ),
                ),
            ),
            array(
                'id' => 'home-video-readmore',
                'type' => 'text',
                'title' => 'Xem thêm video',
            ),

        )
    ));

    //KHÁCH HÀNG NÓI GÌ VỀ MỘC LÊ GIA
     CSF::createSection($prefix, array(
        'title' => 'Khách hàng',
        'id' => 'home-client',
        'fields' => array(

            array(
                'id' => 'home-client-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
                'id' => 'home-client-group',
                'type' => 'group',
                'title' => 'Khách hàng nói về mộc lê gia',
                'fields' => array(
                    array(
                        'id' => 'name',
                        'type' => 'text',
                        'title' => 'Tên khách hàng',
                    ),
                    array(
                        'id' => 'desc',
                        'type' => 'wp_editor',
                        'title' => 'Cảm nhận của khách hàng',
                        'media_buttons' => false,
                        'height'        => '100px',
                    ),
                    array(
                       'id' => 'image',
                        'type' => 'media',
                        'title' => 'Hình ảnh khách hàng',
                        'library' => 'image',
                        'preview_size' => 'full',
                        'url' => false,
                    ),
                    array(
                        'id' => 'link',
                        'type' => 'text',
                        'title' => 'link',
                    ),
                   
                ),
            ),

        )
    ));

    // KIẾN THỨC NỘI THẤT
    CSF::createSection($prefix, array(
        'title' => 'Kiến thức nội thất',
        'id' => 'home-knowledge',
        'fields' => array(

            array(
                'id' => 'home-knowledge-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
              'id'          => 'home-knowledge-select-post',
              'type'        => 'select',
              'title'       => 'Chọn bài posts',
              'placeholder' => 'Select posts',
              'chosen'      => true,
              'multiple'    => true,
              'sortable'    => true,
              'options'     => 'posts',
            ),

        )
    ));

    //ĐỐI TÁC CỦA MỘC LÊ GIA

    CSF::createSection($prefix, array(
        'id' => 'home-partner',
        'title' => 'Đối tác',
        'fields' => array(
          array(
                'id' => 'home-partner-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            // A textarea field
            array(
                'id' => 'home-partner-gallery',
                'type' => 'gallery',
                'title' => 'Hình ảnh đối tác',
                'add_title' => 'Thêm mới',
                'edit_title' => 'Chỉnh sửa',
                'clear_title' => 'Xóa',
            ),

        )
    ));
     /*Contact form*/
     CSF::createSection($prefix, array(
        'id' => 'contact-form', // Set a unique slug-like ID
        'title' => 'Form liên Hệ',
        'fields' => array(
            array(
                'id' => 'contact-form-1',
                'type' => 'text',
                'title' => 'Thêm short code contact Form',
            ),
             array(
                'id' => 'contact-form-2',
                'type' => 'media',
                'title' => 'Thêm background contact Form',
                'library' => 'image',
                'preview_size' => 'full',
                'url' => true,
            ),
        )
    ));
    /*end Contact form*/
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

     /*Page Gioi Thieu*/
     CSF::createSection($prefix, array(
        'id' => 'page_introduce', // Set a unique slug-like ID
        'title' => 'Page Giới thiệu',
    ));
    // Create a sub-tab
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 1',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_1_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_1_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 1',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
           array(
            'id' => 'page_introduce_block_1_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 2',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_2_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_2_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 2',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
            array(
            'id' => 'page_introduce_block_2_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 3',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_3_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_3_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 3',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 4',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_4_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_4_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 4',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
            array(
            'id' => 'page_introduce_block_4_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 5',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_5_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_5_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 5',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
            array(
            'id' => 'page_introduce_block_5_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    /*End Page Gioi Thieu*/
}