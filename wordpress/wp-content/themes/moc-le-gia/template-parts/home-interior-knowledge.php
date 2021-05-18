<div class="home-interior-knowledge">
	<div class="container">
		<div class="wrap-title">
			<h2 class="h2-title"><?php echo prefix_get_option('home-knowledge-title'); ?></h2>
		</div>
		<div class="row">
			<?php
			$query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby' => 'ID',
                                'post__in' => prefix_get_option('home-knowledge-select-post')
                            )
                        );
			if($query->have_posts()) {
				while ($query->have_posts()) {
                    $query->the_post();
		 	?>
				<div class="col-sm-4">
					<div class="content_item">
					   <figure class="featured-thumbnail thumbnail">
					      <a target="_blank" href="<?php echo esc_url(get_permalink()) ?>" rel="nofollow">
					      <img loading="lazy" class="lazyloaded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>" alt="<?php echo get_the_title(); ?>">
					      </a>
					   </figure>
					   <div class="post_meta">
					      <a target="_blank" class="post-title" href="<?php echo esc_url(get_permalink()) ?>"><?php echo get_the_title(); ?></a>
					      <div class="excerpt">
					         <?php echo get_the_excerpt(); ?>                                             
					      </div>
					   </div>
					</div>
				</div>
			<?php
					}
				}	
	     	?>
		</div>
	</div>	
</div>

<style type="text/css">
	.home-interior-knowledge {
		background: #100000;
		padding-top: 60px;
	}
	.home-interior-knowledge .wrap-title {
	    margin-bottom: 60px;
	}
	.home-interior-knowledge .wrap-title .h2-title {
	    font-size: 24px;
	    line-height: 25px;
	    color: #fff;
	    padding: 0px 0px 11px 0px;
	    margin: 0px 0px 30px 0px;
	    text-transform: uppercase;
	    color: #fff;
	    text-align: center;
	    position: relative;
	}
	.home-interior-knowledge .wrap-title .h2-title::after {
	    width: 25%;
	    max-width: 285px;
	    left: 50%;
	    -webkit-transition: translateX(-50%);
	    -moz-transition: translateX(-50%);
	    -o-transition: translateX(-50%);
	    transform: translateX(-50%);
	    position: absolute;
	    content: "";
	    bottom: -10px;
	    height: 1px;
	    background: #edc14f;
	    margin: 0 auto;
	}
	   
	.home-interior-knowledge .content_item {
		margin-bottom: 30px;
	}
	.home-interior-knowledge .content_item .thumbnail {
	    margin: 0px 0px 0px 0px;
	    padding: 0;
	    border: none;
	    border-radius: 0;
	    background: none;
	}
	.home-interior-knowledge .content_item .thumbnail > a {
		margin: 0px 0px 0px 0px;
	    border: none;
	    border-radius: 0;
	    background: none;
	    height: 0;
	    display: block;
	    padding-top: 0;
	    padding-left: 0;
	    padding-right: 0;
	    padding-bottom: 66.7%;
	    position: relative;
	    overflow: hidden;
	}
	.home-interior-knowledge .content_item .thumbnail > a > img {
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		margin: auto;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.home-interior-knowledge .content_item .post_meta {
		margin: 10px 0px;
	}

	.home-interior-knowledge .content_item .post_meta a {
		font-size: 16px;
	    line-height: 25px;
	    min-height: 45px;
	    display: block;
	    font-weight: 600;
	    color: #fff;
	    cursor: pointer;
	    margin-bottom: 10px;
	}
	.home-interior-knowledge .content_item .post_meta a:hover {
		color: #edc14f !important;
	}

	.home-interior-knowledge .content_item .post_meta .excerpt {
	    color: #ccc;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    display: -webkit-box;
	    -webkit-line-clamp: 3;
	    -webkit-box-orient: vertical;
	}

	@media (max-width: 767.98px) {
		.home-interior-knowledge .content_item .post_meta a {
			min-height: auto;
			text-align: center;
			margin-bottom: 5px;
		}
		.home-interior-knowledge .content_item .post_meta .excerpt {
			text-align: center;
		}
	}

</style>


<!-- <div class="home-interior-knowledge">
	<div class="container">
		<div class="wrap-title">
			<h2 class="h2-title">Kiến thức nội thất</h2>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="content_item">
				   <figure class="home-interior-knowledge__thumbnail">
				      	<a target="_blank" href="https://noithatkenli.vn/da-bo-that" rel="nofollow">
				      		<img loading="lazy" class="lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/08/da-bo-that-360x240.jpg">
				      	</a>
				   </figure>
				   <div class="home-interior-knowledge__post_meta">
				      	<a target="_blank" class="post-title" href="https://noithatkenli.vn/da-bo-that" rel="nofollow" title="Da bò thật của chúng tôi số 2 thì không ở đâu là số 1">Da bò thật của chúng tôi số 2 thì không ở đâu là số 1</a>
				   </div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="content_item">
				   <figure class="home-interior-knowledge__thumbnail">
				      	<a target="_blank" href="https://noithatkenli.vn/da-bo-that" rel="nofollow">
				      		<img loading="lazy" class="lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/08/sofa-edo-04-360x240.jpg">
				      	</a>
				   </figure>
				   <div class="home-interior-knowledge__post_meta">
				      	<a target="_blank" class="post-title" href="https://noithatkenli.vn/da-bo-that" rel="nofollow" title="Da bò thật của chúng tôi số 2 thì không ở đâu là số 1">4 điều khiến bạn muốn mua nội thất Kenli ngay lập tức1</a>
				   </div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="content_item">
				   <figure class="home-interior-knowledge__thumbnail">
				      	<a target="_blank" href="https://noithatkenli.vn/da-bo-that" rel="nofollow">
				      		<img loading="lazy" class="lazyloaded" src="https://noithatkenli.vn/wp-content/uploads/2019/08/41cDiBg6HJL._SR600600_-1-360x240.jpg">
				      	</a>
				   </figure>
				   <div class="home-interior-knowledge__post_meta">
				      	<a target="_blank" class="post-title" href="https://noithatkenli.vn/da-bo-that" rel="nofollow" title="Da bò thật của chúng tôi số 2 thì không ở đâu là số 1">Da bò thật của chúng tôi số 2 thì không ở đâu là số 1</a>
				   </div>
				</div>
			</div>
		</div>
	</div>	
</div>
<style type="text/css">
	.home-interior-knowledge {
		background: #0e0e0e;
		padding-top: 50px;
		padding-bottom: 50px;
	}
	.home-interior-knowledge .wrap-title {
	    margin-bottom: 60px;
	}
	.home-interior-knowledge .h2-title {
		font-size: 24px;
	    line-height: 25px;
	    color: #fff;
	    padding: 0px 0px 11px 0px;
	    margin: 0px 0px 30px 0px;
	    text-transform: uppercase;
	    color: #fff;
	    text-align: center;
	    position: relative;
	}
	.home-interior-knowledge .h2-title::after {
		width: 25%;
	    max-width: 285px;
	    left: 50%;
	    -webkit-transition: translateX(-50%);
	    -moz-transition: translateX(-50%);
	    -o-transition: translateX(-50%);
	    transform: translateX(-50%);
	    position: absolute;
	    content: "";
	    bottom: -10px;
	    height: 1px;
	    background: #edc14f;
	    margin: 0 auto;
	}
	.home-interior-knowledge .content_item {
		margin-bottom: 20px;
	}
	figure.home-interior-knowledge__thumbnail {
	    background: #fff;
	    padding: 5px;
	    margin: 0px 0px 0px 0px;
	}
	figure.home-interior-knowledge__thumbnail > a {
		display: block;
	}
	figure.home-interior-knowledge__thumbnail > a img {
		margin-left: auto;
		margin-right: auto;
		display: block;
		text-align: center;
	}

	figure.home-interior-knowledge__thumbnail a::after {
		content: "";
		display: table;
		clear: both;
	}
	.home-interior-knowledge__post_meta {
		padding: 5px 15px;
	    border-bottom: 2px solid #edc14f;
	    background: #fff;
	}
	.home-interior-knowledge__post_meta .post-title {
		min-height: 47px;
	    text-overflow: ellipsis;
	    display: -webkit-box;
	    -webkit-line-clamp: 2;
	    -webkit-box-orient: vertical;
	    overflow: hidden;
	    -webkit-transition: .3s;
	    -moz-transition: .3s;
	    -o-transition: .3s;
	    transition: .3s;
	    color: #5b5b5c;
	    text-align: center;
	}
	.home-interior-knowledge__post_meta .post-title:hover {
		color: #edc14f;
	}
</style>
 -->