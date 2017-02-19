
		<footer class="clearfix">
			<div class="footer-wrap">
				<div class="footer-wrap-logo">
					<img src="<?php bloginfo('template_url');?>/images/outspokinHero.png" title="Outspokin Cycles - London, Ontario" alt="Outspokin Cycles" />
				</div>
				<div class="footer-nav clearfix">
					<?php
						wp_nav_menu(
						    array(
							'menu' => 'footer',
							// do not fall back to first non-empty menu
							'theme_location' => '__no_such_location',
							// do not fall back to wp_page_menu()
							'fallback_cb' => false
						  )
						);
					?>
				</div>
				<p><small>994 Huron St. Unit #9. London, ON  - 519-933-2953<br/>
				&copy; <?php echo date("o");?> Outspokin cycles. </small></p>
			</div>
		</footer>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		    <!-- Uses the built in easing capabilities added In jQuery 1.1 to offer multiple easing options -->
	    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing-1.3.pack.js"></script>
	    <!-- Mobile touch events for jQuery -->
	    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mobile.just-touch.js"></script>
	    <!-- mightySlider captions animation engine -->
	    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tweenlite.js"></script>
	    <!-- Main slider JS script file -->
	    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mightyslider.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.aw-showcase.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		    g.src='//www.google-analytics.com/ga.js';
		    s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		<?php wp_footer();?>
	</body>
</html>
