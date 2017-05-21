<?php
/**
 * Theme's generic Page
 */
?>

<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'col-padded' ); ?>><!-- inner custom column -->
  <?php while( have_posts() ) : the_post(); ?>
    <article>
      <?php include('inc/featured_image_bkg.php') ?>

      <h1 class="page-title">
        <?php if(get_field('custom_title') != '') { ?>
          <?php echo get_field('custom_title'); ?>
        <?php } else { ?>
          <?php if(get_field('prefix_with_parent_page') == true) { ?>
            <?php echo get_the_title($post->post_parent); ?> - 
          <?php } ?>
          <?php the_title(); ?>
        <?php } ?>
      </h1>

      <div class="content  clearfix">
        <?php the_content(); ?>
      </div>
      <?php k_paging(); ?>
    </article>
  <?php endwhile; ?>
</div><!-- inner custom column end -->
<?php get_footer(); ?>
