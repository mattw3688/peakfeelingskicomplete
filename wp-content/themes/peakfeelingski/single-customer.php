<?php
get_header();?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {


        get_template_part('/template-parts/modules/customer-module');
    } // end while
} // end if
?>

<?php echo $price ?>

<?php
get_footer();