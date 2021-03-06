<?php
/**
 * "Nothing found" content
 */
?>

<div class="col-lg-12">

  <div>

    <?php if( vp_option( 'vpt_option.404_image' ) ) : ?>
    <figure class="thumb-404">
      <img src="<?php echo vp_option( 'vpt_option.404_image' ); ?>" alt="<?php _e( 'NOTHING FOUND!', 'kazaz' ); ?>" class="aligncenter img-responsive" />
    </figure>
    <?php endif; ?>

    <?php if( is_home() && current_user_can( 'publish_posts' ) ) : ?>

      <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'kazaz' ), admin_url( 'post-new.php' ) ); ?></p>

    <?php elseif( is_search() ) : ?>

      <p><?php _e( 'Sorry, but nothing matched search criteria. Please try again with different search terms.', 'kazaz' ); ?></p>

    <?php else : ?>

      <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Maybe searching can help a bit.', 'kazaz' ); ?></p>

    <?php endif; ?>

  </div>

    
</div>