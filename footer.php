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
        <?php include_once('inc/footer_contact_form.php'); ?>

        <div class="footer-widgets">
            <?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( __( 'Footer Widget', 'kazaz' ) ) ) : ?>
            <!-- footer widgets -->
            <?php endif; ?>
        </div>
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
            <div class="footer-message">
                <?php echo vp_option( 'vpt_option.footer_message' ); ?>
            </div>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>
<!-- Analytics -->
<?php k_google_analytics(); ?>
</body>
</html>
