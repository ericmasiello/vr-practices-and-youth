<?php
/**
 * Theme's generic Category page
 */
?>

<?php get_header(); ?>

<section>
  <h1 class="page-title"><?php single_cat_title(); ?></h1>
  <?php if( category_description() ) : ?>
    <div class="category-description">
      <?php echo category_description(); ?>
    </div>
  <?php endif; ?>

  <?php if(have_posts()): ?>
    <?php while( have_posts() ) : the_post();
      // include template for different post formats correspondingly
      get_template_part('content', get_post_format());
    endwhile; ?>

    <?php k_pagination(); // pagination ?>
  <?php else: ?>
    <div>
      <?php get_template_part('content', 'none'); ?>
    </div><!-- ./row -->
  <?php endif; ?>
</section>

<?php get_footer(); ?>