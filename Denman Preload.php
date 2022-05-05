<?php
function preload_featured_image() {
    $post_type = get_post_type();
    if ( $post_type == 'post' ) {
        ?>
          <link rel="preload" as="image" href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>">
        <?php
    }
}
add_action('wp_head', 'preload_featured_image');
?>
