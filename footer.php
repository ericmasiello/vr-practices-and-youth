<?php
/**
 * Theme Footer
 */
?>

        </div><!-- container end -->

    </div><!-- content wrapper end -->

    <footer id="k-subfooter" class="site-footer  text-center  container"><!-- subfooter -->
        <?php if (is_front_page()) : ?>
            <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Home Page Footer', 'kazaz' ) ) ) : ?>
                <!-- footer widgets -->
            <?php endif; ?>
        <?php endif; ?>
        <?php if( vp_option( 'vpt_option.contact_form_id' ) ) : ?>
            <div id="contactus">
                <?php echo do_shortcode( '[contact-form-7 id="' . vp_option( 'vpt_option.contact_form_id' ) . '" title="Contact form"]' ); ?>            
            </div>
        <?php endif; ?>

        <ul class="footer-widgets">
            <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Widget', 'kazaz' ) ) ) : ?>
            <!-- footer widgets -->
            <?php endif; ?>
        </ul>

        <div class="container" role="contentinfo"><!-- container -->

            <div class="row"><!-- row -->

                <div class="col-xs-12">

                    <div class="col-padded">

                        

                        <?php if( vp_option( 'vpt_option.footer_logo' ) ) : ?>
                            <p>
                                <img src="<?php echo vp_option( 'vpt_option.footer_logo' ); ?>" alt="<?php echo vp_option( 'vpt_option.footer_logo_text' ); ?>" class="footer-logo" />
                            </p>
                        <?php endif; ?>

                        <?php if( vp_option( 'vpt_option.footer_message' ) ) : ?>
                            <small><?php echo vp_option( 'vpt_option.footer_message' ); ?></small>
                        <?php endif; ?>

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
