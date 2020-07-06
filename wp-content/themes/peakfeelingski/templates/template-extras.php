<div id="extras-page">

    <?php

    /* Template Name: Extra Activities */

    get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent">


            <h1> <?php the_title(); ?></h1>

            <?php if( have_posts() ): while ( have_posts() ): the_post();?>

                <?php the_content()?>

            <?php  endwhile; else: endif;  ?>




        </div>
    </section>

    <?php get_footer(); ?>
</div>
