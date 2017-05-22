<?php
/**
 * Theme's generic Search page
 */
?>

<?php
// print site header
get_header();
?>

	<div class="row gutter"><!-- row -->

		<div class="col-lg-12 col-md-12">
			<div>
				<h1 class="title-widget">
					<?php echo __( 'Search results for:', 'kazaz' ) . ' <em>' . esc_attr( $_GET[ 's' ] ) . '</em>'; ?>
				</h1>
			</div>
		</div>
	</div><!-- row end -->

<?php if( have_posts() ) : ?>

	<div class="row gutter"><!-- row -->

		<?php
			// main loop start
			while( have_posts() ) : the_post();
				// include template for different post formats correspondingly
				get_template_part( 'content', get_post_format() );
			endwhile;
		?>

	</div><!-- row end -->

	<?php k_pagination(); // pagination ?>

<?php else : ?>

	<div class="row gutter"><!-- row -->

		<?php get_template_part( 'content', 'none' ); ?>

	</div><!-- row end -->

<?php endif; ?>

<?php
// print site footer
get_footer();
?>