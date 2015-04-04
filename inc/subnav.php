<?php
// Set up the objects needed
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'page'
);

$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query($args);

//echo '<pre>Total pages ' . print_r( count($all_wp_pages), true ) . '</pre>';
//echo '<pre>Total pages ' . print_r( $all_wp_pages, true ) . '</pre>';

// Grab all child pages of the current page
$page_children = get_page_children( $post->ID, $all_wp_pages );

//echo '<pre>ID ' . $post->ID . '</pre>';

//echo '<pre>Children ' . print_r( count($page_children), true ) . '</pre>';

//echo '<pre>' . print_r( $post->post_parent, true ) . '</pre>';


if( count($page_children) > 0 ) {

    //Add existing "parent page" to list
    $page_ids = array($post->ID);

} elseif( $post->post_parent > 0 ){


    $page_children = get_page_children( $post->post_parent, $all_wp_pages );
    $page_ids = array($post->post_parent);
}

//Add child pages to list
foreach ($page_children as &$value) {
    array_push($page_ids,$value->ID);
}

// echo what we get back from WP to the browser
//echo '<pre>' . print_r( $page_children, true ) . '</pre>';

//echo '<pre>' . print_r( count($page_children), true ) . '</pre>';
//echo '<pre>' . print_r( $page_ids, true ) . '</pre>';

//Only output sub menu if there's stuff to list. Otherwise you'll get EVERY page
if( count($page_ids) > 0 ) {

    //fetch siblings
    $page_list_args = array(
        'title_li' => '',
        'include' => $page_ids,
        'echo' => 0
    );

    $list_pages = wp_list_pages( $page_list_args );

    if ($list_pages): ?>
        <ul class="page-list"><?php echo $list_pages; ?></ul>
    <?php endif;
}
?>