<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title><?php wp_title('&laquo;', true, 'right');?> <?php bloginfo('name');?></title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

		    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		    <script>
		     
		var map;
		function initialize() {

		  	map = new google.maps.Map(document.getElementById('map-canvas'), {
		    	 zoomControl: false,
		    	zoom: 16,
		    	center: {lat: 43.0168691, lng: -81.2213631}
		  	});
		}

		google.maps.event.addDomListener(window, 'load', initialize);




		    </script>
	    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "79e35ecd-687a-4be3-b29e-27e54b966f4a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	    <?php wp_head(); ?>
	</head>
	<body <?php body_class($class); ?>>
		<div id="main" class="">
			<div id="home">
			<div id="showcase" class="showcase ">
				<!-- Each child div in #showcase represents a slide -->
				<?php 
					$args = array( 'post_type' => 'header_slide', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				?>
					<div class="showcase-slide" > 
						<!-- Put the slide content in a div with the class .showcase-content -->
						<div class="showcase-content" style="background: url(<?php echo get('header_image'); ?> ) center center !important; background-size:cover !important;">
							<!-- If the slide contains multiple elements you should wrap them in a div with the class .showcase-content-wrapper. 
							We usually wrap even if there is only one element, because it looks better. :-) -->
							
							<div class="showcase-content-wrapper">
								
								<div class="showcase-content-wrapper-container">
									<div class="showcase-content-wrapper-container-copy">
										<img src="<?php bloginfo('template_url');?>/images/outspokinHero.png" title="Outspokin Cycles - London, Ontario" alt="Outspokin Cycles" />
										<div class="main-header-times-wrap">
											<ul class="main-header-times">
												<li><strong>MON</strong><br/>10-6</li>
												<li><strong>TUE</strong><br/>10-6</li>
												<li><strong>WED</strong><br/>10-6</li>
												<li><strong>THU</strong><br/>10-6</li>
												<li><strong>FRI</strong><br/>10-6</li>
												<li><strong>SAT</strong><br/>10-4</li>
												<li><strong>SUN</strong><br/>---</li>
											</ul>
											<div class="main-header-social-wrap">
												<ul class="main-header-social">
													<li class="facebook"><a href="https://www.facebook.com/outspokin.cycles">Facebook</a></li>
													<li class="twitter"><a href="https://twitter.com/outspokincycles">Twitter</a></li>
													<li class="insta"><a href="https://instagram.com/outspokin_ben/">Instagram</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;?>
			</div>
		</div>