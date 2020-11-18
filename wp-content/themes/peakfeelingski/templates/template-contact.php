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

                        <div class="container-fluid text-center" id="calltoaction-container">

                            <h3 class="white-text" style="font-size: 2.2rem" >Click <a class="white-text" style="font-size: 2.2rem" href="<?php echo get_home_url('customer-details', '/customer-details') ?>">here</a> to fill out a few basic details</h3>

                        </div>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'phone_link'): ?>

                        <?php get_template_part('template-parts/modules/module', 'phone');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'email_link'): ?>

                        <?php get_template_part('template-parts/modules/module', 'email');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>



                <div class="container-fluid text-center" >

                    <h3 >Alternatively submit your details below and we'll get back to you ASAP</h3>

                </div>



                <?php gravity_form( 3, false, false, false, '', false ); ?>




        </div>
    </section>

    <?php get_footer(); ?>
</div>

