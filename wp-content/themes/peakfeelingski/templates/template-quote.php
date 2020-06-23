
<?php
/**
 * Template Name: Customer Quote Page
 *
 */
get_header();
?>

<?php

$loop = new WP_Query( array(
    'post_type' => 'Product',
    'posts_per_page' => -1
  )
);
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();

    get_template_part('/template-parts/modules/product-module');

    echo the_content();
    endwhile; wp_reset_query(); ?>

<?php get_footer();