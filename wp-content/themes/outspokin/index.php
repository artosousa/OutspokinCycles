<?php 
get_header('home');
/*
Template Name: index Page
*/
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=253261338017236";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section id="navigation">
	<div class="navigation-wrap">
		<?php
			wp_nav_menu(
			    array(
				'menu' => 'main',
				// do not fall back to first non-empty menu
				'theme_location' => '__no_such_location',
				// do not fall back to wp_page_menu()
				'fallback_cb' => false
			  )
			);
		?>
	</div>
</section>

<section id="about-us" >
	<?php
		$post_id = 5;
		$queried_post = get_post($post_id);
	?>
	<div class="about-us-wrap clearfix">
		<h1><?php echo $queried_post->post_title; ?></h1>
		<?php echo $queried_post->post_content; ?>
	</div>

	<section id="staff" class="clearfix">
		<ul class="staff-list">
			
				<?php 
					$args = array( 'post_type' => 'staff', 'posts_per_page' => 100, 'orderby' => 'ID', 'order' => 'asc' );

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<li>
						<figure role="thumb">
							<img src="<?php echo get('photo');?>" title="<?php echo get('name');?> - <?php echo get('position');?>" alt="<?php echo get('name');?>" />
						</figure>
						<h4>
							<?php echo get('name');?>

						</h4>
						<p class="staff-position"><?php echo get('position');?></p>
					</li>
				<?php endwhile;?>

			
		</ul>	
	</section>
</section>		

<section id="brands" class="clearfix">
	<?php
		$post_id = 27;
		$queried_post = get_post($post_id);
	?>
	<div class="brands-wrap clearfix">
		
		<h1 class="brandsCopy"><?php echo $queried_post->post_content; ?></h1>
		<ul class="brands-list clearfix">
			<?php 
				$args = array( 'post_type' => 'brands', 'posts_per_page' => 100, 'orderby' => 'ID', 'order' => 'asc' );

				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<li>

					<figure role="thumb">
						<a target="_blank" href="<?php echo get('company_link');?>" title="<?php echo get('brand_name');?> ">
							<img src="<?php echo get('brandlogo');?>" title="<?php echo get('brand_name');?> " alt="<?php echo get('brand_name');?> " />
						</a>
					</figure>
					
				</li>
			<?php endwhile;?>
		</ul>
	</div>
</section>
<section id="services" class="clearfix">
	
	<div class="services-wrap">
		<h1>Services</h1>
		<ul class="services-wrap-list" class="clearfix">
			<?php 
				$args = array( 'post_type' => 'service', 'posts_per_page' => 100, 'orderby' => 'ID', 'order' => 'asc' );

				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<li class="services-wrap-list-item service-<?php the_ID(); ?>">
					<div class="services-wrap-list-item-container clearfix">
						<div class="area">
							<div class="title-wrap">
								<h2><?php the_title();?></h2>
							</div>
						</div>
						<div class="area">
							<div class="fine-print-wrap">
								<?php echo get('fine_print');?>
							</div>
						</div>
						<h1><?php echo get('price');?></h1>
					</div>
					
				</li>
			<?php endwhile;?>
		</ul>
		<h3>Outspokin cycles is a full services repair shop. <br/> If the service you need is not listed, please contact us!</h3>
		<div class="button"><a href="#contact-us">get in touch</a></div>
	</div>
</section>

<section id="bike-blog" class="clearfix">
	<div class="bike-blog-wrap ">
		<div class="bike-blog-wrap-left">
		 <?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

			<?php if( have_posts() ): ?>

	        <?php while( have_posts() ): the_post(); ?>
	        	<div class="bike-blog-wrap-list-item-container clearfix">
					 <!--<figure class="bike-blog-wrap-list-item-container-thumb">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(300,300) ); ?></a>
					</figure>-->
					<div id="post-<?php get_the_ID(); ?>" class="bike-blog-wrap-list-item-container-copy">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<small>
							<?php the_time('F j, Y'); ?>

						</small><br/>

						<?php the_excerpt();?>
						<div class="button"><a rel="<?php the_permalink();?>" href="<?php the_permalink();?>">Read More</a></div>
						 <?php the_category( 'Tags: ', ', ', '<br />' ); ?> 
					</div>
				</div>
	        <?php endwhile; ?>
		<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>
	<div class="button"><a href="./blog/" target="_blank">LAUNCH OUTSPOKIN CYCLES BLOG</a></div>
</div>
		<div class="featured-item">
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				$args = array( 'post_type' => 'featured_gear', 'posts_per_page' => 1);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<h4>Feature of the Month</h4>
				<p class="originalPrice">Original Price: $<?php echo get('original_price');?></p>
				<p class="salePrice">Sale Price: $<?php echo get('sale_price');?></p>
				
					<a data-rel="lightbox" href="<?php echo get('featured_gear_image'); ?>" target="_blank"><?php echo get_image('featured_gear_image');?></a>
				
				<?php the_content();?>
			<?php endwhile;?>
		</div>
	</div>
</section>

<section id="events">
	<div class="events-wrap clearfix">
		<h1>Events</h1>
			
		<ul class="events-wrap-list" class="clearfix">
			<li class="events-wrap-list-item sticky-date">
					<div class="events-wrap-list-item-container clearfix">
						<strong>Weekly Fanshawe Ride</strong><br/>
						<div class="date-header" style="background:url(<?php bloginfo('template_directory');?>/images/navLogo.png) center center no-repeat;">
							
							
						</div>
						<div class="event-info">
						<small>
							<strong>Date:</strong> Wednesday Night Rides<br/>
							<strong>Location:</strong> Fanshawe Lake, London<br>
							<strong>Starts At:</strong> 6:30 p.m.<br>
							<strong>Ends At: </strong><br>
						</small>
						</div>
					</div>
					
				</li>
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				$args = array( 'post_type' => 'event', 'posts_per_page' => 50);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<li class="events-wrap-list-item generated event-<?php the_ID(); ?>">
					<a rel="<?php the_permalink();?>" href="<?php the_permalink();?>">
						<div class="events-wrap-list-item-container clearfix">
							<strong><?php the_title();?></strong><br/>
							<div class="date-header" style="background:url(<?php bloginfo('template_directory');?>/images/navLogo.png) center center no-repeat;"><img src="<?php echo get('event_image');?>" title="<?php echo get('the_title');?>" />
							
							</div>
							<div class="event-info">
							<small>
							
								<strong>Date:</strong> <?php echo get('the_title'); ?>
								<strong>Location:</strong> <?php echo get('location');?><br/>
								<strong>Starts At:</strong> <?php echo get('time_start');?><br/>
								<strong>Ends At:</strong> <?php echo get('time_end');?><br/>
							</small>
							</div>
						</div>
					</a>
				</li>
			<?php endwhile;?>
		</ul>
		
	</div>
</section>

<section id="contact-us" class="clearfix">

	<div class="map-wrap">
		<div class="map-wrap-contain">
			<h1>Contact Us</h1>
			<p>994 Huron St. Unit #9. <br/>
				London, ON<br/>
				N5Y 4K6 
				<br/>
				TELEPHONE: 519-933-2953</p>

				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
		</div>
	</div>
  </body>
</section>
<?php endwhile; ?>
<?php endif; ?>	


<?php get_footer();?>