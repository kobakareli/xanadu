<?php	get_header(); ?>

<div class="flexslider main">
        <ul class="slides">
            <li>
                <img src="http://localhost/xanadu/inc/uploads/2016/10/slider-background.png" />
                <div class="slider-text">
                    <h1>Modern Furniture</h1>
                    <p>We Make Your Beautiful Home</p>
                    <a href=""><span>View Shop</span></a>
                </div>
            </li>
            <li>
                <img src="http://localhost/xanadu/inc/uploads/2016/10/table-1.jpg" />
                <div class="slider-text">
                    <h1>Modern Furniture</h1>
                    <p>We Make Your Beautiful Home</p>
                    <a href=""><span>View Shop</span></a>
                </div>
            </li>
            <li>
                <img src="http://localhost/xanadu/inc/uploads/2016/10/table-2.jpg" />
                <div class="slider-text">
                    <h1>Modern Furniture</h1>
                    <p>We Make Your Beautiful Home</p>
                    <a href=""><span>View Shop</span></a>
                </div>
            </li>
            <li>
                <img src="http://localhost/xanadu/inc/uploads/2016/10/table-3.jpg" />
                <div class="slider-text">
                    <h1>Modern Furniture</h1>
                    <p>We Make Your Beautiful Home</p>
                    <a href=""><span>View Shop</span></a>
                </div>
            </li>
        </ul>
    </div>

    <div class="info">
        <a href="">
            <div class="store-locator">
                <img src="http://localhost/xanadu/inc/uploads/2016/10/locator.png" alt="location marker">
                <p class="section-title">STORE LOCATOR</p>
                <p>Find your nearest Evans store.</p>
            </div>
        </a>

        <div class="vertical-line"></div>

        <a href="">
            <div class="delivery">
                <img src="http://localhost/xanadu/inc/uploads/2016/10/delivery.png" alt="airplane">
                <p class="section-title">DELIVERY & RETURNS</p>
                <p>Delivery & returns information.</p>
            </div>
        </a>

        <div class="vertical-line"></div>

        <a href="">
            <div class="mobile">
                <img src="http://localhost/xanadu/inc/uploads/2016/10/mobile.png" alt="mobile phone">
                <p class="section-title">CORSE APPLICATION</p>
                <p>Donwload the corse mobile App.</p>
            </div>
        </a>

        <div class="vertical-line"></div>

        <a href="">
            <div class="support">
                <img src="http://localhost/xanadu/inc/uploads/2016/10/support.png" alt="headphone">
                <p class="section-title">HELP & SUPPORT</p>
                <p>Find the answers to your questions.</p>
            </div>
        </a>
    </div>

    <div class="new-arrivals">

        <h2>New Arrivals</h2>
        <ul class="categories">
            <li class="living"><a href="" data-filter=".living">LIVING</a></li>
            <li class="dining"><a href="" data-filter=".dining">DINING</a></li>
            <li class="bedroom"><a href="" data-filter=".bedroom">BEDROOM</a></li>
            <li class="bath"><a href="" data-filter=".bath">BATH</a></li>
            <li class="kitchen"><a href="" data-filter=".kitchen">KITCHEN</a></li>
            <li class="outdoor"><a href="" data-filter=".outdoor">OUTDOOR</a></li>
            <li class="workspace"><a href="" data-filter=".workspace">WORKSPACE</a></li>
            <li class="lighting"><a href="" data-filter=".lighting">LIGHTING</a></li>
            <li class="accessories"><a href="" data-filter=".accessories">ACCESSORIES</a></li>
        </ul>
        <select name="categories" class="select-new-arrivals">
            <option value=".living">LIVING</option>
            <option value=".dining">DINING</option>
            <option value=".bedroom">BEDROOM</option>
            <option value=".bath">BATH</option>
            <option value=".kitchen">KITCHEN</option>
            <option value=".outdoor">OUTDOOR</option>
            <option value=".workspace">WORKSPACE</option>
            <option value=".lighting">LIGHTING</option>
            <option value=".accessories">ACCESSORIES</option>
        </select>

        <div id="owl-demo" class="owl-carousel owl-theme">
			<?php 
				$args = array(
					'post_type' => 'furniture',
                    'posts_per_page' => -1,
					'category_name' => 'New Arrivals'
				);
				$query = new WP_Query( $args );
				if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="item <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo ($tag->name . ' '); } } ?>"><a class='main' href="">
						<img class="main-image" <?php the_post_thumbnail( 'medium' ); ?>
						<a class="wishlist" href="#"><img class='hover-item' src="http://localhost/xanadu/inc/uploads/2016/10/wishlist_icon.png" alt="heart"></a>
						<a class="quick-look" href="#"><img class='hover-item' src="http://localhost/xanadu/inc/uploads/2016/10/quickview.png" alt="magnifying glass"></a>
						<a class="cart" href="#">
							<img class='hover-item' src="http://localhost/xanadu/inc/uploads/2016/10/cart.png" alt="cart icon">
							<img class='hover-item plus' src="http://localhost/xanadu/inc/uploads/2016/10/plus.png" alt="plus">
						</a>
						<p><?php the_title(); ?></p>
						<span><span><?php echo get_post_meta(get_the_ID(), 'old_price', true); ?></span> <?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
					</a></div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>

        <a href="" class="view-all"><p>VIEW ALL</p></a>

    </div>

    <div class="banners">
        <a href=""><div class="banner first">
            <p>Kitchen's</p>
            <p>Accessories</p>
            <hr>
            <hr>
        </div></a>
        <a href=""><div class="banner second">
            <p>Furniture</p>
            <p>New Arrivals</p>
            <hr>
            <hr>
        </div></a>
    </div>

    <div class="special-offers">
        <div class="circles">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-10.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-11.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-12.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-13.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-14.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-01.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-02.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-03.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-04.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-05.png">
            <img src="http://localhost/xanadu/inc/uploads/2016/10/O-06.png">
            <img class="large" src="http://localhost/xanadu/inc/uploads/2016/10/O-07.png">
            <img class="large" src="http://localhost/xanadu/inc/uploads/2016/10/O-08.png">
            <img class="largest" src="http://localhost/xanadu/inc/uploads/2016/10/O-09.png">
        </div>
        <div class="flexslider">
            <ul class="slides">
				<?php 
				$args = array(
					'post_type' => 'furniture',
                    'posts_per_page' => -1,
					'category_name' => 'Special Offers'
				);
				$query = new WP_Query( $args );
				if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php 
						$date = get_post_meta(get_the_ID(), 'offer-expiration-date', true); 
						$date = strtotime($date);
						$now = strtotime("now");
						$interval = $date - $now;
						if ($interval > 0) :
					?>
							<li>
								<a class="offer-image" href=""><div style = "background: url('<?php the_post_thumbnail_url( 'medium' ); ?>') no-repeat center center; background-size: cover;"></div></a>
								<div class="right">
									<div class="text">
										<h2>Special Offers</h2>
										<p>GET 30% OFF</p>
										<p>YOUR ORDER OF $100 OR MORE</p>
									</div>
									<div class="countdown">
										<div class="flex">
											<div class="days">
												<p><?php echo $interval/(24*60*60); ?></p>
												<p>DAYS</p>
											</div>
											<div class="line"></div>
											<div class="hours">
												<p><?php $interval = $interval%(24*60*60); echo $interval/(60*60); ?></p>
												<p>HOURS</p>
											</div>
											<div class="line"></div>
											<div class="minutes">
												<p><?php $interval = $interval%(60*60); echo $interval/(60); ?></p>
												<p>MINS</p>
											</div>
											<div class="line"></div>
											<div class="seconds">
												<p><?php $interval = $interval%(60); echo $interval ?></p>
												<p>SECS</p>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php endif?>	
				<?php endwhile; wp_reset_postdata(); endif;?>
            </ul>
        </div>
    </div>

    <div class="reviews">
        <div class="users">
			<?php 
				$args = array(
					'post_type' => 'review',
                    'posts_per_page' => 5
				);
				$query = new WP_Query( $args );
				$count = 0;
				if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post();
					$count += 1;
					$filter = '';
					if ($count == 1) {
						$filter = ".first";
					}
					elseif ($count == 2) {
						$filter = ".second";
					}
					elseif ($count == 3) {
						$filter = ".third";
					}
					elseif ($count == 4) {
						$filter = ".fourth";
					}
					else {
						$filter = ".fifth";
					}
					?>
					<div data-filter="<?php echo $filter; ?>" style="background-image: url('<?php the_post_thumbnail_url( 'medium' ); ?>'); background-repeat:  no-repeat; background-position:  center; background-size: cover;"><div class="transparent"></div></div>
				<?php endwhile; wp_reset_postdata(); endif;?>
        </div>
		
		<?php 	
			$count = 0;
			if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); 
				$count += 1;
				$filter = '';
				if ($count == 1) {
					$filter = "first";
				}
				elseif ($count == 2) {
					$filter = "second";
				}
				elseif ($count == 3) {
					$filter = "third";
				}
				elseif ($count == 4) {
					$filter = "fourth";
				}
				else {
					$filter = "fifth";
				}
				?>
				<div class="review-content <?php echo $filter; ?>">
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_postdata(); endif;?>
        <hr>
		
		<?php
			$count = 0;
			if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); 
				$count += 1;
				$filter = '';
				if ($count == 1) {
					$filter = "first";
				}
				elseif ($count == 2) {
					$filter = "second";
				}
				elseif ($count == 3) {
					$filter = "third";
				}
				elseif ($count == 4) {
					$filter = "fourth";
				}
				else {
					$filter = "fifth";
				}
			?>
				<p class="user-name <?php echo $filter; ?>"><?php the_title(); ?></p>
				<p class="user-info <?php echo $filter; ?>"><?php echo get_post_meta(get_the_ID(), 'position', true); ?></p>
			<?php endwhile; wp_reset_postdata(); endif;?>
    </div>

    <div class="featured-products">
        <h2><F>FEATURED PRODUCTS</F></h2>
        <ul class="categories">
            <li class="popular"><a data-filter=".popular" href="">POPULAR</a></li>
            <li class="new-arrivals" ><a href="" data-filter=".new-arrivals">NEW ARRIVALS</a></li>
            <li class="specials" ><a href="" data-filter=".specials">SPECIALS</a></li>
            <li class="on-sale"><a href="" data-filter=".on-sale">ON SALE</a></li>
            <li class="top-rate"><a href="" data-filter=".top-rate">TOP RATE</a></li>
        </ul>
        <select name="categories" class="select-categories">
            <option data-filter=".popular" value=".popular">POPULAR</option>
            <option data-filter=".new-arrivals" value=".new-arrivals">NEW ARRIVALS</option>
            <option data-filter=".specials" value=".specials">SPECIALS</option>
            <option data-filter=".on-sale" value=".on-sale">ON SALE</option>
            <option data-filter=".top-rate" value=".top-rate">TOP RATE</option>
        </select>
        <div class="isotope-container">
			<div class="grid">
			<?php 
				$args = array(
					'post_type' => 'furniture',
                    'posts_per_page' => -1,
					'category_name' => 'Featured Products'
				);
				$query = new WP_Query( $args );
				if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<a href="">
						<div class="grid-item <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo ($tag->name . ' '); } } ?>">
							<img <?php the_post_thumbnail( 'medium' ); ?>
							<p><?php the_title(); ?></p>
							<span><span><?php echo get_post_meta(get_the_ID(), 'old_price', true); ?></span> <?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
						</div>
					</a>
			<?php endwhile; wp_reset_postdata(); endif;?>
        </div>
		</div>
        <a href=""><p class="view-all">VIEW ALL</p></a>
    </div>
    <div class="news">
        <div class="letter">
            <h2>NewsLetter</h2>
            <hr>
            <div>
                <p>GET EXCLUSIVE DEALS YOU WON'T FIND ANYWHERE ELSE STRAIGHT TO YOUR INBOX!</p>
            </div>
            <input class='email' type="email" name="email" placeholder="email@example.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email@example.com'"><br>
            <button type="submit">SUBSCRIBE</button>
        </div>
        <div class="latest">
            <h2>Latest News</h2>
            <hr>
            <div class="timeline">
				<?php 
				$args = array(
					'post_type' => 'news',
                    'posts_per_page' => 2
				);
				$query = new WP_Query( $args );
				if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="entry">
						<div class="date">
							<h2><?php the_time('j'); ?></h2>
							<p><?php the_time('F'); ?></p>
						</div>
						<div class="content">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a href="">Read more</a>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); endif;?>
                
            </div>
        </div>
    </div>
    <div class="logos">
        <a href=""><img src="http://localhost/xanadu/inc/uploads/2016/10/logo.png" alt="logo"></a>
        <a href=""><img src="http://localhost/xanadu/inc/uploads/2016/10/logo.png" alt="logo"></a>
        <a href=""><img src="http://localhost/xanadu/inc/uploads/2016/10/logo.png" alt="logo"></a>
        <a href=""><img src="http://localhost/xanadu/inc/uploads/2016/10/logo.png" alt="logo"></a>
        <a href=""><img src="http://localhost/xanadu/inc/uploads/2016/10/logo.png" alt="logo"></a>
        <a href=""><img src="http://localhost/xanadu/inc/uploads/2016/10/logo.png" alt="logo"></a>
    </div>
    <div id="instafeed">
        <a href="" class="follow"><span>Follow Us</span></a>
    </div>

<?php get_footer(); ?>
