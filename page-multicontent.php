<?php
/**
 * Template Name: Multicontent page
 */
?>

<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'col-padded' ); ?>><!-- inner custom column -->
    <?php while( have_posts() ) : the_post(); ?>
        <?php if( has_post_thumbnail() ) { ?>
            <figure class="news-featured-image">
                <?php the_post_thumbnail(); ?>
            </figure>
        <?php } ?>

        <?php if( get_field('display_page_title') == true ) { ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h1 class="page-title  sr-only"><?php the_title(); ?></h1>
        <?php } ?>

        <div class="news-body">
            <?php the_content(); ?>
        </div>

        <section>
            <div>
                <?php if(get_field('column-one')){ //if the field is not empty
                    echo get_field('column-one'); //display it
                } ?>
            </div>
            <div>
                <?php if(get_field('resources')){ //if the field is not empty
                    echo get_field('resources'); //display it
                } ?>
            </div>
            <div>
                <?php if(get_field('training_&_ta')){ //if the field is not empty
                    echo get_field('training_&_ta'); //display it
                } ?>
            </div>
        </section>
        <?php k_paging(); ?>
    <?php endwhile; ?>
</div><!-- inner custom column end -->
<?php get_footer(); ?>