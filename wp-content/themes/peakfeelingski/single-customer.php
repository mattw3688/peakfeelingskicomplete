<?php

get_header(); ?>

    <section class="page">
        <div class="container">


            <h1> <?php the_title(); ?></h1>

            <?php if(have_rows('products')): ?>


                <?php get_template_part('template-parts/modules/module', 'products');?>


            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>