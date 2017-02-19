<?php
/*
Template Name: Portfolio Page
*/ get_header();
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
	
		<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div id="hero" style="background: url(<?php echo $src[0]; ?> ) center center !important; background-size:cover !important;">
				<div class="hero-circle">
					<h1><?php the_title();?></h1>
				</div>
			</div>
			
			<div class="services-body" class="clearfix">
				<div class="wrapper" class="clearfix">
					<ul id="recent-projects" class="clearfix">
						<?php 
							$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 100 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
		    			<li>
		    				
		    				<figure role="thumb">
		    					<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
		    						<h3><?php the_title();?></h3>
		    						<img src="<?php echo get('portfolio_image');?>" alt="<?php the_title(); ?>" />
		    					</a>
		    				</figure>
		    			</li>
		    			<?php endwhile;?>
		    		</ul>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>	
<?php get_footer();?>