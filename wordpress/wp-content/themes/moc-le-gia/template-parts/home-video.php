<section class="wrap-home-videos">
    <div class="container">
        <div class="wrap-title"><h2 class="h2-title"><?php echo prefix_get_option('home-video-title'); ?></h2></div>
        <div class="row">

            <?php 
            $video = prefix_get_option('home-video-group');
            if(!empty($video)) {
                foreach ($video as $key => $value) {
            ?>
            <div class="col-md-4">
                <div class="wrap-home-videos__content">
                    <div class="home-video__top">
                        <img src="<?php echo $value['image']['thumbnail']; ?>" class="home-video__top-before">
                        <div class="home-video__top_start-video">
                            <img width="64" src="/wp-content/themes/moc-le-gia/assets/images/icon/play-btn.png"/>
                        </div>
                        <?php echo $value['iframe']; ?>
                    </div>
                    <div class="home-video__bottom">
                        <img src="/wp-content/themes/moc-le-gia/assets/images/icon/iconvideo.png" alt="play" width="30" height="30"/>
                        <p><?php echo $value['name']; ?></p>
                   </div>
                </div>
            </div> 
            <?php
                    }
                }
            ?>
           
        </div>
        <div class="border"></div>
    </div>
</section>