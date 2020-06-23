<?php

/* Template Name: Content Page */

$image = get_field('feature_image');
$picture = $image['sizes']['large'];
$alt = $image['alt'];
$title = $image['title'];
get_header(); ?>

<section class="page" xmlns="http://www.w3.org/1999/html">
    <div class="container">


        <h1> <?php the_title(); ?></h1>

        <?php if( have_posts() ): while ( have_posts() ): the_post();?>

            <?php the_content()?>

        <?php  endwhile; else: endif;  ?>

        <?php if($image):?>
        <img src="<?php echo $picture; ?>" class="img-fluid" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
        <?php endif; ?>


    </div>
</section>

<?php get_footer(); ?>
