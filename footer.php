<?php
/**
 * Theme Footer
 */
?>

        </div><!-- container end -->
    
    </div><!-- content wrapper end -->

    <?php if( function_exists( 'dynamic_sidebar' ) && ( dynamic_sidebar( __( 'Footer Column Left', 'kazaz' ) ) || dynamic_sidebar( __( 'Footer Column Middle', 'kazaz' ) ) || dynamic_sidebar( __( 'Footer Column Right', 'kazaz' ) ) ) ) : ?>
        <div id="k-footer"><!-- footer -->

            <div class="container"><!-- container -->

                <div class="row no-gutter"><!-- row -->

                    <div class="col-lg-4 col-md-4"><!-- widgets column left -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Column Left', 'kazaz' ) ) ) : ?><?php endif; ?>

                            </ul><!-- widgets end -->

                        </div>

                    </div><!-- widgets column left end -->

                    <div class="col-lg-4 col-md-4"><!-- widgets column center -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Column Middle', 'kazaz' ) ) ) : ?><?php endif; ?>

                            </ul>

                        </div>

                    </div><!-- widgets column center end -->

                    <div class="col-lg-4 col-md-4"><!-- widgets column right -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Column Right', 'kazaz' ) ) ) : ?><?php endif; ?>

                            </ul>

                        </div>

                    </div><!-- widgets column right end -->

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- footer end -->
    <?php endif; ?>
    
    <footer id="k-subfooter" class="site-footer  text-center"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->

        	    <div class="col-xs-12">

        	        <div class="col-padded">

        	            <p><?php bloginfo( 'name' ); ?>: <?php bloginfo( 'description' ); ?></p>

        	            <p>Phone: <a href="tel:<?php echo vp_option( 'vpt_option.contact_phone_1' ); ?>"><?php echo vp_option( 'vpt_option.contact_phone_1' ); ?></a> or <a href="mailto:<?php echo vp_option( 'vpt_option.contact_email' ); ?>"><?php echo vp_option( 'vpt_option.contact_email' ); ?></a></p>

                        <p class="copy-text"><?php echo vp_option( 'vpt_option.theme_copyright' ); ?></p>

                    </div>
        	    </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </footer><!-- subfooter end -->
    
	<?php wp_footer(); ?>

    <!-- Begin Analytics -->
    <?php k_google_analytics(); ?>
    <!-- End Analytics -->


    <script>

    	(function($){

    	    $(document).ready(function(){

                    	var myVar;//will be interval timer
                    	var  transition_time = 1000, // 1 second
                     	time_between_slides = 4000, // 4 seconds
                     	currentslide = 1,
                     	numslides = 3; //put how many slides you have here.

                    	myVar=setInterval(function(){$("button#next").click()},time_between_slides); // every 4 secs next slide

                    	function showcurrent(){
                			$("li.carousel-item").attr("aria-hidden","true");
                			$("li.carousel-item").addClass("hidden");
                			if (currentslide > numslides) {
                				currentslide=1;}
                			if (currentslide === 0) {
                				currentslide=numslides;}

                			 var slide= currentslide-1;
                			$("li.carousel-item:eq("+slide+")").attr("aria-hidden","false");
                			$("li.carousel-item:eq("+slide+")").removeClass("hidden");
                    	}

                		$("button#next").click(function(){
                			currentslide=currentslide+1;
                			showcurrent();
                		});

                		$("button#prev").click(function(){
                			currentslide=currentslide-1;
                			showcurrent();
                		});


                		$("button#pause").click(function(){
                			myVar=window.clearInterval(myVar);
                			ev.preventDefault();
                			return (false);
                		});

                		$("button#go").click(function(){
                			myVar=window.setInterval(function(){$("button#next").click()},time_between_slides);
                		});

                		// add keyboard accessibility for all buttons, enter makes it click...
                		$("button").keypress(function(ev) {
                			if (ev.which ==13)  {
                			$(this).click();
                			ev.preventDefault();
                			return (false);
                		}
                	});

                	});

    	})(jQuery);




    	</script>
    
  </body>
  
</html>