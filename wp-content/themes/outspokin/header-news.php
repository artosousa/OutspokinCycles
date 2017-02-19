<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title><?php wp_title('&laquo;', true, 'right');?> <?php bloginfo('name');?></title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
	
	    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mightyslider.css"/>

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
		