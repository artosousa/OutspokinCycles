<?php
/*
Template Name: brands Page
*/ get_header();
?>
<?php get_the_ID(); ?> 
<ul class="brand-list">
	<p>Post Number: <?php the_ID(); ?></p>
			<?php if(have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_title();?>
				<?php the_content();?>
				

			<?php endwhile; ?>
			<?php endif; ?>
		</ul>	
<?php get_footer();?>