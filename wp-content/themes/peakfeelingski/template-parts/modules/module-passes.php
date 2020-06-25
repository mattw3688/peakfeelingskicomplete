<div class="liftpass__module">

    <?php
    $products = get_sub_field('product_post');
    $selector = get_sub_field('selector');
    $quantity = get_sub_field('quantity');


    ?>

    <ul class="list-group">

        <?php foreach ($products as $post):?>



            <div class="row justify-content-center">

                <li class="list-group-item col-lg-8">
                    <!--                allow you to use post data-->
                    <?php setup_postdata($post); ?>
                    <!--                    --><?php //$price = get_field('price');  ?>


                    <h3>
                        <a href="<?php echo get_page_link() ?>" class=""><?php echo the_title(); ?></a>
                    </h3>

                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">



                    <?php the_field('product_description'); ?>





                </li>
                <div class="align-self-center  col-lg-2">

                    <select name="test" >
                        <option value="1">Value of 1</option>
                        <option value="2">Value of 2</option>
                        <option value="3">Value of 3</option>
                    </select>




                </div>

                <div class="align-self-center col-lg-2">

                    <select name="test2" >
                        <option value="5">Value of 5</option>
                        <option value="6">Value of 6</option>
                        <option value="7">Value of 7</option>
                    </select>

                </div>


            </div>

        <?php wp_reset_postdata(); endforeach; ?>
    </ul>

</div>
