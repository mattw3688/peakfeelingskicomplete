<div class="tuition__module">

    <?php
    $products = get_sub_field('product_post');


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




            </div>

            <?php wp_reset_postdata(); endforeach; ?>
    </ul>
</div>
