<?php
/**
 * Theme Footer
 */
?>
    </div><!-- /.container -->
</div><!-- /[role=main] -->

<footer>
    <div class="container">
        <?php if (is_front_page()) : ?>
            <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Home Page Footer', 'kazaz' ) ) ) : ?><?php endif; ?>
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
    </div>
    
    <div role="contentinfo" class="container">
        <?php if( vp_option( 'vpt_option.footer_logo' ) ) : ?>
            <img
                src="<?php echo vp_option( 'vpt_option.footer_logo' ); ?>"
                alt="<?php echo vp_option( 'vpt_option.footer_logo_text' ); ?>"
                class="footer-logo"
            />
        <?php endif; ?>

        <?php if( vp_option( 'vpt_option.footer_message' ) ) : ?>
            <small><?php echo vp_option( 'vpt_option.footer_message' ); ?></small>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>
<!-- Analytics -->
<?php k_google_analytics(); ?>
</body>
</html>
