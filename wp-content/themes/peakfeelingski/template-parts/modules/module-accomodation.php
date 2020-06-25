<div class="accomodation__module">

    <?php $products = get_field('accommodation');
    $total = 0
    ?>
    <h3>Accommodation</h3>
    <ul class="list-group">

        <?php foreach ($products as $post): ?>
            <?php ?>
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

                    <!--                    --><?php //$total = $total + $price ?>

                </li>

                <div class=" col-lg-4 ">

                    <div class="custom-control custom-checkbox mt-auto mb-auto ml-auto mr-auto ">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Select this product</label>
                    </div>

                </div>

            </div>

            <?php wp_reset_postdata(); endforeach; ?>
    </ul>
</div>






