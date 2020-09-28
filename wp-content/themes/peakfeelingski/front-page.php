<div class="page-wrapper" id="intro-page">

    <?php



    get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container-fluid bg-transparent ">


            <?php if (have_rows('content')): ?>

                <?php while (have_rows('content')): the_row(); ?>

                    <?php if (get_row_layout() == 'bold_text'): ?>

                        <?php get_template_part('template-parts/modules/module', 'bold_text');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'paragraph_text'):?>

                        <?php get_template_part('template-parts/modules/module', 'paragraph_text_central');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php get_template_part('template-parts/modules/module', 'contact_line_intro'); ?>

        </div>
    </section>

    <?php get_footer(); ?>
</div>