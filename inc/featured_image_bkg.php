<?php if( has_post_thumbnail() ) { ?>
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
  <div class="hero  hero-image" style="background-image: url('<?php echo $backgroundImg[0] ?>')"></div>
<?php } else { ?>
  <div class="hero"></div>
<?php } ?>