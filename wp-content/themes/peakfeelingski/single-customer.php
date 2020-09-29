<div class="customer-page">
    <?php get_header(); ?>
    <div class="page-wrapper">

        <div class="container col-lg-12 text-center mt-2" id="customer-page">
            <h1><?php the_field('top_heading') ?></h1>
        </div>
        <br/>


        <?php if (have_rows('product_block')): ?>

            <?php while (have_rows('product_block')): the_row(); ?>

<!--                --><?php //if (get_row_layout() == 'category_heading'): ?>
<!--                    <br/>-->
<!--                    <div class="container-fluid text-left ml-3">-->
<!--                        <h2>--><?php //echo get_sub_field('heading') ?><!--</h2>-->
<!--                    </div>-->
<!--                    <br/>-->
<!---->
<!---->
<!--                --><?php //endif; ?>

                <?php if (get_row_layout() == 'accommodation'): ?>

                    <?php get_template_part('template-parts/modules/module', 'accommodation'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="accommodation-box" name="'accomodation-box" value="<?php get_sub_field('price') ?>">
                            <label for="accommodation-box"><h5>Check the box to select this accommodation and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>

                <?php endif; ?>

                <?php if (get_row_layout() == 'transport'): ?>

                    <?php get_template_part('template-parts/modules/module', 'transport'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="transport-box" name="'transport-box" value="<?php get_sub_field('price') ?>">
                            <label for="transport-box"><h5>Check the box to select this transport option and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (get_row_layout() == 'equipment_hire'): ?>

                    <?php get_template_part('template-parts/modules/module', 'equipment'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="equipment-box" name="equipment-box" value="<?php get_sub_field('price') ?>">
                            <label for="equipment-box"><h5>Check the box to select this equipment and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>

                <?php endif; ?>

                <?php if (get_row_layout() == 'child_care'): ?>

                    <?php get_template_part('template-parts/modules/module', 'childcare'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="childcare-box" name="childcare-box" value="<?php get_sub_field('price') ?>">
                            <label for="childcare-box"><h5>Check the box to select this childcare and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (get_row_layout() == 'massage_and_spa'): ?>

                    <?php get_template_part('template-parts/modules/module', 'massage'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="spa-box" name="spa-box" value="<?php get_sub_field('price') ?>">
                            <label for="spa-box"><h5>Check the box to select this option and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>


                <?php endif; ?>

                <?php if (get_row_layout() == 'extra_activities'): ?>

                    <?php get_template_part('template-parts/modules/module', 'extras'); ?>

                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="extras-box" name="extras-box" value="<?php get_sub_field('price') ?>">
                            <label for="extras-box"><h5>Check the box to select this option and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if (get_row_layout() == 'lift_passes'): ?>

                    <?php get_template_part('template-parts/modules/module', 'passes'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="liftpass-box" name="liftpass-box" value="<?php get_sub_field('price') ?>">
                            <label for="liftpass-box"><h5>Check the box to select these lift passes and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (get_row_layout() == 'tuition'): ?>

                    <?php get_template_part('template-parts/modules/module', 'tuition'); ?>
                    <div class="container text-center">
                        <div class="form-row mt-2">
                            <input class="mt-1 mr-2" type="checkbox" id="accommodation-box" name="'accomodation-box" value="<?php get_sub_field('price') ?>">
                            <label for="accommodation-box"><h5>Check the box to select this accommodation and confirm you have read and accept the terms and conditions associated with it.</h5></label>
                        </div>
                    </div>
                <?php endif; ?>


            <?php endwhile; ?>

        <?php endif; ?>


    </div>


    <script>

        var sum = 0

        function lift_pass_calculator($value) {

            console.log('within selected products');
            $('.total').val($value);
        }

        $(".liftpass__module select").each(function (index) {
            console.log(index + ": " + $(this).text());
        });


        // this is watching ALL select elements... you can use classes or ID's instead..
        $(".liftpass__module select").on("click keyup change", function () {

            console.log('Oh wow you clicked a select within lift passes...');

            lift_pass_calculator($(this).val());

            //$(this).css('background','red');
            // bubbling! dom travelsal
            // $('.status').toggleClass('active');

        });

        $(document).ready(function () {

            console.log("Look I'm in your console....");


            //$jquery_variable = <?php //echo $count; ?>;

            //}

            //  $( "select" ).on( "click keyup change", function() {

            //     total();

            //  });


            // function total() {
            //     $total = '';
            //     // for all selects on page $('select').val(); .. in a loop
            //     foreach($selects as $select)
            //     {
            //
            //         // is this select a number or a positive number! if ( selec > 0 )
            //         $total. = lift_pass_calculator($select.val());
            //         $total = $total + lift_pass_calculator($select.val());
            //
            //     }
            //
            //     console.log($total);
            // }

        });

    </script>

    <input type="text" class="total">
    <?php get_footer(); ?>
</div>
