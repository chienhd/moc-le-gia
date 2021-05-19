<div class="wrap-home-product">
    <div class="home-product">
        <div class="home-product-second">
            <?php $product = prefix_get_option('home-product-group');
                if($product) {
            ?>
            <div class="home-product-second_top">
                <?php $i = 0; foreach($product as $key => $value) { ?>

                <?php if($i == 2) { ?>
                    </div>
                    <div class="home-product-second_bottom">
                <?php } ?>
                
                <div class="home-product-second_top1 home-product-item">
                    <img class="home-product__img" src="<?php echo $value['image']['url'] ?>" alt="<?php echo $value['image']['title'] ?>">
                    <div class="home-product__info">
                        <a href="<?php echo $value['link'] ?>" class="home-product__link"><?php echo $value['name'] ?></a>
                        <strong class="home-product__title"><?php echo $value['desc'] ?></strong>
                    </div>
                </div>

                <?php
                    $i++;
                } ?>
            </div>
            <?php } ?>
        </div>  
    </div>
</div>

<style type="text/css">
    .home-product-second_top1, .home-product-second_top2 {
        max-height: 588px;
        overflow: hidden;
    }
    .home-product-second_bottom {
        display: flex;
        align-self: center;
        justify-content: space-between;
    }
    .home-product-second_bottom .home-product-item:first-child {
        width: 60%;
        display: block;
        position: relative;
        max-height: 588px;
        overflow: hidden;
        border-right: 1px solid #fff;
    }
    .home-product-second_bottom .home-product-item:last-child {
        width: 40%;
        display: block;
        position: relative;
        max-height: 588px;
        overflow: hidden;
    }

    @media(max-height: 575.98px) {
        .home-product-second_bottom {
            display: block;
        }
        .home-product-second_bottom .home-product-item:first-child,
        .home-product-second_bottom .home-product-item:last-child {
            width: 100%;
        }
    }
</style>