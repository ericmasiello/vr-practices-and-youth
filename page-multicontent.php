<?php
/**
 * Template Name: Multicontent page
 */
?>

<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- inner custom column -->
    <?php while( have_posts() ) : the_post(); ?>
        <?php include('inc/featured_image_bkg.php') ?>

        <?php if( get_field('display_page_title') == true ) { ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h1 class="page-title  sr-only"><?php the_title(); ?></h1>
        <?php } ?>

        <div class="content center">
            <?php the_content(); ?>
        </div>

        <hr />

        <section class="featured">
            <div>
                <?php if(get_field('column-one')) {
                    echo get_field('column-one');
                } ?>
            </div>
            <div>
                <?php if(get_field('resources')) {
                    echo get_field('resources');
                } ?>
            </div>
            <div>
                <?php if(get_field('training_&_ta')) {
                    echo get_field('training_&_ta');
                } ?>
            </div>
        </section>
        <?php k_paging(); ?>
        <hr />
    <?php endwhile; ?>
</div><!-- inner custom column end -->
<?php get_footer(); ?>