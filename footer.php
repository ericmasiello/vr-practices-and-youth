<?php
/**
 * Theme Footer
 */
?>
    </div><!-- /.page-container -->
</div><!-- /[role=main] -->

<footer>
    <div class="page-container">
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
    
    <div role="contentinfo" class="page-container">
        <div class="footer-logos">
            <?php
            $logo_iterator = 0;
            while($logo_iterator <= 5) {
                if( vp_option( 'vpt_option.footer_logo_link_' . $logo_iterator ) ) :?>
                    <a
                        href="<?php echo vp_option( 'vpt_option.footer_logo_link_' . $logo_iterator ); ?>"
                        target="_blank"
                        class="footer-logo-link"
                    >
                <?php
                endif;
                if( vp_option( 'vpt_option.footer_logo_' . $logo_iterator ) ) :?>
                    <img
                        src="<?php echo vp_option( 'vpt_option.footer_logo_'  . $logo_iterator ); ?>"
                        alt="<?php echo vp_option( 'vpt_option.footer_logo_text_'  . $logo_iterator ); ?>"
                        class="footer-logo"
                    />
                <?php endif;
                if( vp_option( 'vpt_option.footer_logo_link_' . $logo_iterator ) ) :?>
                    </a>
                <?php
                endif;
                $logo_iterator++;
            }
            ?>
        </div>

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
