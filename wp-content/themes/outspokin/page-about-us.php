<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content();?>
				<?php get_the_ID(); ?> 
		<?php endwhile; ?>
		<?php endif; ?>	
<?php get_footer();?>

 <?php echo $post->ID ?>