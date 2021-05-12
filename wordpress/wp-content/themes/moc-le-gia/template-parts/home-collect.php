<div class="home-collect">
    <div class="container">
        <div class="wrap-h1-title">
            <h1 class="h1-title"><?php echo prefix_get_option('home-collection-title'); ?></h1>
        </div>
        <div class="description home-collect__description">
            <p><?php echo prefix_get_option('home-collection-desc'); ?></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <?php
            $variable = prefix_get_option('home-collection-group');
            if(!empty($variable)):
                foreach ($variable as $key => $value):
        ?>
            <div class="col-sm-4 col">
                <div class="home-collect__product">
                    <div class="home-collect__product-top">
                        <div class="image">
                            <img src="<?php echo $value['image']['thumbnail']; ?>" alt="<?php echo $value['image']['title']; ?>">
                        </div>
                        <div class="info">
                            <h2 class="title"><?php echo $value['name']; ?></h2>
                            <a href="<?php echo $value['link']; ?>" class="link">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="home-collect__product-bottom">
                        <strong class="sub-title"><?php echo $value['name2']; ?></strong>
                        <div class="description">
                            <?php echo $value['desc']; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            endforeach;
        endif; 
        ?>

            <!-- <div class="col-sm-4 col">
                <div class="home-collect__product">
                    <div class="home-collect__product-top">
                        <div class="image">
                            <img src="https://noithatkenli.vn/wp-content/uploads/2019/10/cover-2-2-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2 class="title">Sofa Chateau d'ax</h2>
                            <a href="#" class="link">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="home-collect__product-bottom">
                        <strong class="sub-title">SANG TRỌNG – ĐẲNG CẤP</strong>
                        <div class="description">
                            <p><strong>Thương hiệu sofa da thật thứ 2 châu Âu</strong> với hơn 70 năm bề dày lịch sử. Vẻ đẹp của <strong>Sofa da thật Chateau d'Ax</strong> đã là điều cả thế giới phải ngưỡng mộ. Sức hút từ những tuyệt phẩm này không chỉ còn là về chất lượng hay trải nghiệm sản phẩm. Chateau d'Ax mang tới cho chủ sở hữu sự <strong>đẳng cấp ngay từ phong cách sống</strong> ...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col">
                <div class="home-collect__product">
                    <div class="home-collect__product-top">
                        <div class="image">
                            <img src="https://noithatkenli.vn/wp-content/uploads/2019/10/cover-2-2-1.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2 class="title">Sofa Chateau d'ax</h2>
                            <a href="#" class="link">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="home-collect__product-bottom">
                        <strong class="sub-title">SANG TRỌNG – ĐẲNG CẤP</strong>
                        <div class="description">
                            <p><strong>Thương hiệu sofa da thật thứ 2 châu Âu</strong> với hơn 70 năm bề dày lịch sử. Vẻ đẹp của <strong>Sofa da thật Chateau d'Ax</strong> đã là điều cả thế giới phải ngưỡng mộ. Sức hút từ những tuyệt phẩm này không chỉ còn là về chất lượng hay trải nghiệm sản phẩm. Chateau d'Ax mang tới cho chủ sở hữu sự <strong>đẳng cấp ngay từ phong cách sống</strong> ...</p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
