<?php

get_header(); ?>

    <section class="page card card-body mt-2">
        <div class="container ">


            <?php if (have_rows('product-block')): ?>

                <?php while (have_rows('product-block')): the_row(); ?>

                    <?php if (get_row_layout() == 'lift-passes'): ?>

                        <?php get_template_part('template-parts/modules/module', 'columns');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'text_area_with_image'):?>

                        <?php get_template_part('template-parts/modules/module', 'textwithimage');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>