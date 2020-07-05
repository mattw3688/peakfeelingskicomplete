
<div id="home-page" >

<?php

get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent ">


            <?php if (have_rows('content')): ?>

                <?php while (have_rows('content')): the_row(); ?>

                    <?php if (get_row_layout() == 'top_content'): ?>

                        <?php get_template_part('template-parts/modules/module', 'toptext');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'text_with_heading'):?>

                        <?php get_template_part('template-parts/modules/module', 'textwheading');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </section>
    <?php get_footer(); ?>
</div>


