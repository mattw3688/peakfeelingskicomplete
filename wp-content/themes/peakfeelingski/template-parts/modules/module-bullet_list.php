<div class="bullet-list__module">
    <div class="row d-flex d-inline">
        <div class="container col-lg-6">


<!--            Check rows exists.-->
            <?php if (have_rows('left_list')):

                // Loop through rows.
                while (have_rows('left_list')) : the_row();
                    echo '<ul class="left-list" id="left-list">';

                    // Load sub field value.
                    $sub_value = get_sub_field('list_item');
                    // Do something...

                    echo '<li>';
                    echo $sub_value;
                    echo '</li>';


                    echo '</ul>';    // End loop.
                endwhile;


                // Do something...
            endif; ?>

        </div>
        <div class="container col-lg-6">


<!--            Check rows exists.-->
            <?php if (have_rows('right_list')):

                // Loop through rows.
                while (have_rows('right_list')) : the_row();
                    echo '<ul class="right-list" id="right-list">';

                    // Load sub field value.
                    $sub_value = get_sub_field('list_item');
                    // Do something...

                    echo '<li>';
                    echo $sub_value;
                    echo '</li>';


                    echo '</ul>';    // End loop.
                endwhile;


                // Do something...
            endif; ?>

        </div>
    </div>

</div>
