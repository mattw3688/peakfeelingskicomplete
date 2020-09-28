<div class="page-wrapper" id="contact-page">

    <?php

    /* Template Name: Contact */

    get_header(); ?>

    <section class="container-fluid bg-transparent ">
        <div class="container bg-transparent ">


            <?php if (have_rows('content')): ?>

                <?php while (have_rows('content')): the_row(); ?>

                    <?php if (get_row_layout() == 'bold_text'): ?>

                        <?php get_template_part('template-parts/modules/module', 'bold_text_central');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'paragraph_text'):?>

                        <?php get_template_part('template-parts/modules/module', 'paragraph_text');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif;



            get_template_part('template-parts/modules/module', 'contact_page');

            gravity_form( 3, false, false, false, '', false ); ?>


        </div>
    </section>

    <?php get_footer(); ?>
</div>

