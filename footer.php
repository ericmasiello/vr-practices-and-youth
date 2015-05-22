<?php
/**
 * Theme Footer
 */
?>

        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    
    <footer id="k-subfooter" class="site-footer  text-center  container"><!-- subfooter -->

        <ul class="footer-widgets">
            <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Widget', 'kazaz' ) ) ) : ?>
            <!-- footer widgets -->
            <?php endif; ?>
        </ul>
    
    	<div class="container" role="contentinfo"><!-- container -->
        
        	<div class="row"><!-- row -->

        	    <div class="col-xs-12">

        	        <div class="col-padded">

                    <p>
                        <a href="tel:<?php echo vp_option( 'vpt_option.contact_phone_1' ); ?>">(Phone) <?php echo vp_option( 'vpt_option.contact_phone_1' ); ?></a> or
                        <a href="mailto:<?php echo get_option( 'admin_email' ); ?>"><?php echo get_option( 'admin_email' ); ?></a>
                    </p>


                    </div>
        	    </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </footer><!-- subfooter end -->
    
	<?php wp_footer(); ?>

    <!-- Begin Analytics -->
    <?php k_google_analytics(); ?>
    <!-- End Analytics -->

  </body>
  
</html>