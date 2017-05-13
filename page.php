<?php
/**
 * Theme's generic Page
 */
?>

<?php get_header(); ?>
<div class="row no-gutter fullwidth"><!-- row -->
  <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
    <div id="post-<?php the_ID(); ?>" <?php post_class( 'col-padded' ); ?>><!-- inner custom column -->
      <?php while( have_posts() ) : the_post(); ?>
        
        <?php if( has_post_thumbnail() ) { ?>
          <figure class="news-featured-image">
            <?php the_post_thumbnail(); ?>
          </figure>
        <?php } ?>

        <h1 class="page-title">
          <?php if( get_field('prefix_with_parent_page') == true ) { ?>
            <?php echo get_the_title($post->post_parent); ?> - 
          <?php } ?>
          <?php the_title(); ?>
        </h1>

        <div class="news-body  clearfix">
          <?php the_content(); ?>
        </div>
        <?php k_paging(); ?>
      <?php endwhile; ?>
    </div><!-- inner custom column end -->
  </div><!-- doc body wrapper end -->
</div><!-- row end -->
<?php get_footer(); ?>
