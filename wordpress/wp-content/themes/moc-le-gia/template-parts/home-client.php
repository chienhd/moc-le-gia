<div class="wrap-home-client">
	<div class="container">
		<div class="wrap-title"><h2 class="h2-title"><?php echo prefix_get_option('home-client-title'); ?></h2></div>
		<div class="home-carousel-client owl-carousel owl-theme">
			<?php 
				$client = prefix_get_option('home-client-group');
				if(!empty($client)) {
					foreach ($client as $key => $value) {
			?>
	        <div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="<?php echo $value['image']['thumbnail']; ?>" alt="<?php echo $value['image']['title']; ?>">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="" class="home-client__link-title"><?php echo $value['name']; ?></a>
	        		<div class="home-client__exceprt">
	        			<?php echo $value['desc']; ?>                                         
	        		</div>
	        	</div>
	        </div>
	        <?php
	        		}
	        	}
	        ?>
	        <!-- <div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="https://noithatkenli.vn/wp-content/uploads/2019/07/64704664_213663289599026_5205723640921849856_n-1-300x300.jpg" alt="">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="" class="home-client__link-title">Ca Sĩ Tùng Dương</a>
	        		<div class="home-client__exceprt">
	        			Qua trải nghiệm Dương hoàn toàn tin tưởng vào tính năng, chất lượng của sản phẩm cao cấp từ Kenli. Các sản phẩm của Kenli không chỉ được nghiên cứu...                                           
	        		</div>
	        	</div>
	        </div>
			<div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="https://noithatkenli.vn/wp-content/uploads/2019/07/64688512_10156929759307605_5986123764155285504_n-1-300x300.jpg" alt="">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="" class="home-client__link-title">Ca Sĩ Tùng Dương</a>
	        		<div class="home-client__exceprt">
	        			Qua trải nghiệm Dương hoàn toàn tin tưởng vào tính năng, chất lượng của sản phẩm cao cấp từ Kenli. Các sản phẩm của Kenli không chỉ được nghiên cứu...                                           
	        		</div>
	        	</div>
	        </div>
	        <div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="https://noithatkenli.vn/wp-content/uploads/2019/07/anh-h%E1%BA%A3i-2-1-300x300.jpg" alt="">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="" class="home-client__link-title">Ca Sĩ Tùng Dương</a>
	        		<div class="home-client__exceprt">
	        			Qua trải nghiệm Dương hoàn toàn tin tưởng vào tính năng, chất lượng của sản phẩm cao cấp từ Kenli. Các sản phẩm của Kenli không chỉ được nghiên cứu...                                           
	        		</div>
	        	</div>
	        </div>
	        <div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="https://noithatkenli.vn/wp-content/uploads/2019/07/64704664_213663289599026_5205723640921849856_n-1-300x300.jpg" alt="">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="" class="home-client__link-title">Ca Sĩ Tùng Dương</a>
	        		<div class="home-client__exceprt">
	        			Qua trải nghiệm Dương hoàn toàn tin tưởng vào tính năng, chất lượng của sản phẩm cao cấp từ Kenli. Các sản phẩm của Kenli không chỉ được nghiên cứu...                                           
	        		</div>
	        	</div>
	        </div>
			<div class="home-client__item">
	        	<div class="home-client__preview">
	        		<img src="https://noithatkenli.vn/wp-content/uploads/2019/07/64688512_10156929759307605_5986123764155285504_n-1-300x300.jpg" alt="">
	        	</div>
	        	<div class="testimonial_detail">
	        		<a href="" class="home-client__link-title">Ca Sĩ Tùng Dương</a>
	        		<div class="home-client__exceprt">
	        			Qua trải nghiệm Dương hoàn toàn tin tưởng vào tính năng, chất lượng của sản phẩm cao cấp từ Kenli. Các sản phẩm của Kenli không chỉ được nghiên cứu...                                           
	        		</div>
	        	</div>
	        </div> -->
	    </div>
	</div>
</div>