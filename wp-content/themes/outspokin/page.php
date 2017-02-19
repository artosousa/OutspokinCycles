
	
		<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div id="hero">
				<div class="hero-circle">
					<h1><?php the_title();?></h1>
				</div>
			</div>
			
			<div class="services-body">
				<?php the_content();?>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>	