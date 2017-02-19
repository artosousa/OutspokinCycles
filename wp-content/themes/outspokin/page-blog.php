


<?php
/*
Template Name: blog Page
*/ get_header('news');
?>
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
	<section id="bike-blog" class="clearfix">
	<div class="bike-blog-wrap ">
		<div class="bike-blog-wrap-left">
		 <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

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
						 <?php wp_list_categories ?>
					</div>
				</div>
				
	        <?php endwhile; ?>
<div class="navigation">
			<span class="newer"><?php previous_posts_link(__('« View Newer Posts','example')) ?></span> <span class="older"><?php next_posts_link(__('View Older Posts »','example')) ?></span>
		</div><!-- /.navigation -->
		<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>
	
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
	</div


	>
</section>

<?php get_footer(); ?>