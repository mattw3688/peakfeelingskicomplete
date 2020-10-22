<div class="customer-page">
    <div class="container" style="display: none">
        <?php get_header(); ?>
    </div>
    <div class="page-wrapper">
    </div>
    <div class="container  col-lg-4">

    </div>

    <div class="container col-xs-6 col-lg-4 text-center" id="header-logo">`

        <!--                --><?php //if (is_front_page()): ?>
        <a href="<?php echo home_url(); ?>">
            <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/peakpack-logo.svg" alt="Peak Feeling Ski Logo" style="width: 45vw">
        </a>
        <!--                --><?php //endif; ?>
    </div>
    <div class="container col-lg-4 ">



    </div>

        <div class="container-fluid text-center mt-2" id="customer-page">
            <h1><?php the_field('top_heading') ?></h1>
        </div>
        <br/>


        <?php 

        if (have_rows('product_block')): 
            while (have_rows('product_block')): the_row(); 

                if (get_row_layout() == 'accommodation'): 
                    get_template_part('template-parts/modules/module', 'accommodation'); 
                endif; 

                if (get_row_layout() == 'transport'): 
                    get_template_part('template-parts/modules/module', 'transport'); 
                endif; 

                if (get_row_layout() == 'equipment_hire'): 
                    get_template_part('template-parts/modules/module', 'equipment'); 
                endif; 

                if (get_row_layout() == 'child_care'): 
                    get_template_part('template-parts/modules/module', 'childcare'); 
                endif; 

                if (get_row_layout() == 'massage_and_spa'): 
                    get_template_part('template-parts/modules/module', 'massage'); 
                endif; 

                if (get_row_layout() == 'extra_activities'): 
                    get_template_part('template-parts/modules/module', 'extras'); 
                endif; 

                if (get_row_layout() == 'lift_passes'): 
                    get_template_part('template-parts/modules/module', 'passes'); 
                endif; 

                if (get_row_layout() == 'tuition'): 
                    get_template_part('template-parts/modules/module', 'tuition'); 
                endif; 

            endwhile; 
        endif; 

        ?>


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



        <div class="container client-selection__module">
            <div class="row">
                    
                <div class="column col-md-6">

                   <h2>Your Selection:</h2>
                   <div class="dynamic-client-summary">
                        <!-- replaced automatically -->
                   </div>  

                </div>            
                <div class="column col-md-6">
                    <?php 
                        echo do_shortcode('[gravityform id="5" title="false" description="false"]');
                     ?>
                </div>

            </div>
        </div>




    <script>

        function single_customer() {

            // setup clean variables
            var $client_total = 0;
            var $client_summary = '';

            // for all checkboxes on the page
            $('input[type=checkbox]').each(function () {

                // if they are checked 
                if(this.checked) {

                    // add to total
                    $client_total = $client_total + $(this).data('customer-price');

                    // add to summary 
                    $client_summary += '<li>' + $(this).data('product-name') + ' - €' + $(this).data('customer-price') + '</li>';

                }
            });

            // create html summary
            $html_summary =  '<ul>' + $client_summary + '</ul>' +'<h3>Total €' +$client_total + '</h3>';

            // populate clients view
            $('.dynamic-client-summary').html($html_summary); 

            // populate form
            $('.total-price input').val($client_total);
            $('.summary textarea').val($html_summary);

        }

        // once the page is loaded
        $(document).ready(function() {

            // if any checkboxes on the page change
            $('input:checkbox').change(function() {
               
                // run function
                single_customer();
                
            });

        });


    </script>        
        


</div>
<div class="container" style="display: none">
    <?php get_footer(); ?>
</div>
