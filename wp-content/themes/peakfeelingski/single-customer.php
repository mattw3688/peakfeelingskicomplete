<?php

get_header(); ?>

    <section class="page card card-body mt-2">
        <div class="container ">


            <?php if (have_rows('product_block')): ?>

                <?php while (have_rows('product_block')): the_row(); ?>



                    <?php if (get_row_layout() == 'lift_passes'): ?>
                        <h2>Lift Passes</h2>
                        <?php get_template_part('template-parts/modules/module', 'passes');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'tuition'):?>
                        <h2>Tuition</h2>
                        <?php get_template_part('template-parts/modules/module', 'tuition');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </section>


    <script>


        function lift_pass_calculator($value) {

            console.log('within selected products');
            $('.total').val( $value );
        }

        $( document ).ready(function() {

            console.log( "Look I'm in your console...." );


            // this is watching ALL select elements... you can use classes or ID's instead..
            $( ".liftpass__module select, .dog__module select" ).on( "click keyup change", function() {

                console.log('Oh wow you clicked a select within lift passes...');

                lift_pass_calculator( $(this).val() );

                //$(this).css('background','red');
                // bubbling! dom travelsal
                $('.status').toggleClass('active');

            });



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