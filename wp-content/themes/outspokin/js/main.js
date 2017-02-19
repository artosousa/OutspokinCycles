$(document).ready(function(){
	
	var str=$(".generated").text();
	var str2=   str.replace(",", "")

	var $example = $('#example'),
                $frame = $('.frame', $example);

            // Calling mightySlider via jQuery proxy
            $frame.mightySlider({
            	 cycling: {
				    cycleBy:       'slides', // Enable automatic cycling by 'slides' or 'pages'.
				    pauseTime:     5000, // Delay between cycles in milliseconds.
				    loop:          1,    // Repeat cycling when last slide/page is activated.
				    pauseOnHover:  0,    // Pause cycling when mouse hovers over the FRAME.
				    startPaused:   0     // Whether to start in paused sate.
				  },
                speed: 1000,
                easing: 'easeOutExpo',
                viewport: 'fill',
                
                // Navigation options
                navigation: {
                    slideSize: '100%',
                    keyboardNavBy: 'slides'
                },

                // Dragging options
                dragging: {
                    swingSpeed:    0.1
                },

                // Pages options
                pages: {
                    activateOn: null
                },

                // Commands options
                commands: {
                    pages: 0,
                    buttons: 0
                }
            });
});
if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 		$(document).on('click', 'a[href^="#"]', function(e) {
		    // target element id
		    var id = $(this).attr('href');

		    // target element
		    var $id = $(id);
		    if ($id.length === 0) {
		        return;
		    }

		    // prevent standard hash navigation (avoid blinking in IE)
		    e.preventDefault();

		    // top position relative to the document
		    var pos = $(id).offset().top - 98;

		    // animated top scrolling
		    $('body, html').animate({scrollTop: pos});
		});
	}else{
		(document).on('click', 'a[href^="#"]', function(e) {
		    // target element id
		    var id = $(this).attr('href');

		    // target element
		    var $id = $(id);
		    if ($id.length === 0) {
		        return;
		    }

		    // prevent standard hash navigation (avoid blinking in IE)
		    e.preventDefault();

		    // top position relative to the document
		    var pos = $(id).offset().top;

		    // animated top scrolling
		    $('body, html').animate({scrollTop: pos});
		});
	}



// Create a clone of the menu, right next to original.

$('#navigation').addClass('original').clone().insertAfter('#navigation').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

scrollIntervalID = setInterval(stickIt, 10);


function stickIt() {

  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() >= (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.
    //console.log('atTop');
    // Cloned element should always have same left position and width as original element.     
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();

    $('.original').css('visibility','hidden');

  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').hide();
    $('.original').css('visibility','visible');
  }
}

