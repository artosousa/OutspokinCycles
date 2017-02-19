<?php
/*
Template Name: Services Page
*/ get_header();
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
	
		<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div id="hero" style="background: url(<?php echo $src[0]; ?> ) center center !important; background-size:cover !important;">
				<div class="hero-circle">
					<h1><?php the_title();?></h1>
					<p>Exterior restorations. Kitchen renovations. Complete rebuilds or add-ons. All you have to do is make one call to Dezine Guy and I'll see your project through from planning to design to construction. </p>
				</div>
			</div>
			
			<div class="services-body">
				<div class="wrapper">
					<div class="right-content">
						<?php the_content();?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>	
<?php get_footer();?>