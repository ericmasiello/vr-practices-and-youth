<?php
// Only display if this is NOT the front page (aka home page) of the site
if(!is_front_page()) {
  $subnav_page_ids = array();
  /*
   * Query to to see if this page has any children
   */
  $query_for_child_pages_args = array(
    'post_parent' => $post->ID,
    'hierarchical' => 0,
    'sort_column' => 'menu_order',
    'sort_order' => 'asc',
    'post_type' => 'page'
  );

  $query_for_child_pages = new WP_Query();
  $child_pages_of_current_page = $query_for_child_pages->query($query_for_child_pages_args);

  // Current page has child pages if count > 0
  if(count($child_pages_of_current_page) > 0) {

    // If the current page has a parent page, put it at the beginning of the list
    if($post->post_parent > 0) {
      array_push($subnav_page_ids, $post->post_parent);
    }

    // Then, add the current page to the list
    array_push($subnav_page_ids, $post->ID);

    // Then add the child pages of the current page to the list
    foreach($child_pages_of_current_page as &$value) {
      array_push($subnav_page_ids, $value->ID);
    }

  } else { // Current page has no child pages

    // Instead we will query the parent page's children which will
    // rereive the current page and any its siblings

    $query_for_child_pages_of_parent_args = array(
      'post_parent' => $post->post_parent,
      'hierarchical' => 0,
      'sort_column' => 'menu_order',
      'sort_order' => 'asc',
      'post_type' => 'page'
    );

    $query_for_child_pages_of_parent = new WP_Query();
    $child_pages_of_parent_page = $query_for_child_pages->query($query_for_child_pages_of_parent_args);

    // Make the parent page first in the list
    array_push($subnav_page_ids, $post->post_parent);
    // Then add the child pages of the parent to the list
    foreach($child_pages_of_parent_page as &$value) {
      array_push($subnav_page_ids, $value->ID);
    }
  }

  // Generate list of pages based on $subnav_page_ids compiled above
  $page_list_args = array(
    'title_li' => '',
    'include' => $subnav_page_ids,
    'echo' => 0
  );
  $subnav_pages = wp_list_pages($page_list_args);

  // Display the list
  if ($subnav_pages):
    ?><ul class="page-list"><?php
      echo $subnav_pages;
    ?></ul><?php
  endif;
}
?>
