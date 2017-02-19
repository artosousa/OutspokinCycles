
		<?php get_header('news'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section id="nav-accet">
			</section>
			<section id="navigation">
				<div class="navigation-wrap">
					<?php
						wp_nav_menu(
						    array(
							'menu' => 'blog menu',
							// do not fall back to first non-empty menu
							'theme_location' => '__no_such_location',
							// do not fall back to wp_page_menu()
							'fallback_cb' => false
						  )
						);
					?>
				</div>
			</section>
			<div class="article-item ">
				<div class="article-item-copy">
					<h1><strong><?php echo the_title(); ?></strong></h1>
					
					<div class="line clearfix"></div>
					<?php 
			
				echo get_image('event_image');
								
				echo '<p><strong>Event Date: </strong>';
						echo get('event_date');
						
				echo '</p>';
				
				echo '<p><strong>Starts At: </strong>';
						echo get('time_start');
				echo '</p>';

				echo '<p><strong>Starts At: </strong>';
						echo get('time_end');
				echo '</p>';
				
				echo '<p><strong>Event Location: </strong>';
						echo get('location');
				echo '</p>';
				
				/*$image_attribute = "w=1140&h=470&zc=c&q=90"; // 250x150px, crop to center, quality 90
				echo get_image('image',1,1,1,NULL,$image_attribute);*/
			
		?>
					<div style="border-bottom:1px solid #999; padding-top:25px; margin-bottom:25px;"></div>
					<div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
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
						<figure>
							<a data-rel="lightbox" href="<?php echo get('featured_gear_image'); ?>" target="_blank"><?php echo get_image('featured_gear_image');?></a>
						</figure>
						<?php the_content();?>
					<?php endwhile;?>
				</div>
			</div>


		<?php endwhile; endif; ?>

		<script>
			$(document).ready(function(){
				 $('img.close').click(function(){
        			$('.article-item').slideToggle();
    			});
			});

		</script>

		<?php get_footer();?>