<?php
/**
 * Template Name: Multicontent page
 */
?>

<?php
// print site header
get_header();
?>

    <div class="row no-gutter fullwidth"><!-- row -->

        <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->

            <div id="post-<?php the_ID(); ?>" <?php post_class( 'col-padded' ); ?>><!-- inner custom column -->

				<?php
				// main loop start
				while( have_posts() ) : the_post();
				?>

				<?php if( has_post_thumbnail() ) { ?>

                    <figure class="news-featured-image">
                        <?php the_post_thumbnail(); ?>
                    </figure>

				<?php } ?>

				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php include("inc/subnav.php"); ?>


				<div class="news-body  clearfix">
					<?php the_content(); ?>
				</div>

				<div>
					<?php if(get_field('research')){ //if the field is not empty
                        echo get_field('research'); //display it
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

				<?php
				// paging
				k_paging();

				// allow page comments?
				// komments...

				// main loop end
				endwhile;
				?>

			</div><!-- inner custom column end -->

		</div><!-- doc body wrapper end -->
		
	</div><!-- row end -->

<?php
// print site footer
get_footer();
?>