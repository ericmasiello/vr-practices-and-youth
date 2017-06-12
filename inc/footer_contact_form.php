<?php if( vp_option( 'vpt_option.contact_form_id' ) ) : ?>
  <aside id="contactus" class="footer-contact-form">
    <header class="footer-contact-form__header">
      <?php if( vp_option('vpt_option.footer_contact_title')) : ?>
        <h1 class="footer-contact-form__title">
          <?php echo vp_option('vpt_option.footer_contact_title'); ?>
        </h1>
      <?php endif; ?>
      <?php if( vp_option('vpt_option.footer_contact_instructions')) : ?>
        <p class="footer-contact-form__instructions">
          <?php echo vp_option('vpt_option.footer_contact_instructions'); ?>
        </p>
      <?php endif; ?>
    </header>
    <?php echo do_shortcode( '[contact-form-7 id="' . vp_option( 'vpt_option.contact_form_id' ) . '" title="Contact form"]' ); ?>            
  </aside>
<?php endif; ?>