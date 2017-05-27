<?php
/**
 * Default Content Template
 */ 
?>

<?php if( is_single() ): ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if( has_post_thumbnail() && !post_password_required() && !is_attachment() ) : ?>
      <?php include('inc/featured_image_bkg.php'); ?>
    <?php endif; ?>
    <div class="news-title-meta">
      <h1 class="page-title"><?php the_title(); ?></h1>

      <?php k_post_meta(); // print date, author and comments number ?>

      <div class="content">
        <?php if( has_excerpt() ) : ?><div class="call-out"><?php the_excerpt(); ?></div><?php endif; ?>
        <?php the_content(); // full content ?>
      </div>
      
      <?php k_post_tags(); // print post tags if any ?>
    </div>
  </article>
  
<?php elseif(is_category()): ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('category-list-item row'); ?>>
    <div class="featured-image col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <?php include('inc/featured_image_bkg.php'); ?>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
      <h1 class="h2">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a>
      </h1>
      
      <?php k_post_meta(); // print date, author and comments number ?>
      <div class="category-item-summary">
        <?php
        // print excerpt - if any, otherwise trim it up automatically
        if( has_excerpt() ) echo '<p>' . get_the_excerpt() . '</p>';
        else echo '<p>' . wp_trim_excerpt() . '</p>';
        ?>
      </div>
    </div>
  </article><!-- ./category-list-item -->
<?php else : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="page-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a>
    </h1>
    <?php
      if( get_post_type() == 'post' ) k_post_meta(); // print date, author and comments number
      elseif( get_post_type() == 'event' || get_post_type() == 'course' || get_post_type() == 'gallery' ) echo k_cpt_meta(); // print info
    ?>
    <div class="news-summary">
      <?php
        // print excerpt - if any, otherwise trim it up automatically
        if( has_excerpt() ) the_excerpt();
        else echo '<p>' . wp_trim_excerpt() . '</p>';
      ?>
    </div>
  </article>
<?php endif; ?>