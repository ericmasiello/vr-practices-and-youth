<?php
/**
 * Theme's generic Single post page
 */
?>

<?php
// print site header
get_header();
?>

<?php if( have_posts() ): ?>
  <?php 
  while( have_posts() ) : the_post();
    // include template for different post formats correspondingly
    get_template_part( 'content', get_post_format() );
    // main loop end
  endwhile;
  ?>
  
  <?php k_paging(); //post paging ?>
  <?php comments_template(); // post comments ?>
  
<?php else : ?>
  <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php
// print site footer
get_footer();
?>