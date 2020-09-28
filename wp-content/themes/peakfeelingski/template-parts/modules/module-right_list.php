<div class="right-list__module">
    <div class="container-fluid col-4 ">
        <?php

        // Check rows exists.
        if( have_rows('bullet_point_items') ):

            // Loop through rows.
            while( have_rows('bullet_point_items') ) : the_row();
                echo '<ul class="bullet-list" id="bullet-list">';

                // Load sub field value.
                $sub_value = get_sub_field('list_item');
                // Do something...

                echo '<li>';
                echo $sub_value;
                echo '</li>';


                echo '</ul>';    // End loop.
            endwhile;


            // Do something...
        endif;?>
    </div>

</div>



