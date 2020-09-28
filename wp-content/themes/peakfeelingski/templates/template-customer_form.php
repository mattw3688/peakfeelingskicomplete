<div class="page-wrapper" id="customer-details">

<?php

/* Template Name: Customer Details */

get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent ">
            <div class="continer text-center">
                <h1>Please enter your details below and a member of our team will be in touch as soon as possible</h1>
            </div>
            <raw>
            <?php gravity_form( 4, false, false, false, '', true); ?>
            </raw>
<!--            --><?php //if (have_rows('content')): ?>
<!---->
<!--                --><?php //while (have_rows('content')): the_row(); ?>
<!---->
<!--                    --><?php //if (get_row_layout() == 'bold_text'): ?>
<!---->
<!--                        --><?php //get_template_part('template-parts/modules/module', 'bold_text');?>
<!---->
<!--                    --><?php //endif; ?>
<!---->
<!--                    --><?php //if (get_row_layout() == 'paragraph_text'):?>
<!---->
<!--                        --><?php //get_template_part('template-parts/modules/module', 'paragraph_text');?>
<!---->
<!--                    --><?php //endif; ?>
<!---->
<!--                --><?php //endwhile; ?>
<!---->
<!--            --><?php //endif; ?>



        </div>
    </section>
    <?php get_footer(); ?>



</div>