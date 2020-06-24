<div class="product__module">

    <?php $products = get_field('products');
    $total = 0
    ?>

    <ul class="list-group">
        <?php foreach ($products as $post): ?>
            <li class="list-group-item">
                <!--                allow you to use post data-->
                <?php setup_postdata($post); ?>
                <?php $price = get_field('price');  ?>


                <h3>
                    <a href="<?php echo get_page_link() ?>" class=""><?php echo the_title(); ?></a>
                </h3>

                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">

                <?php the_field('product_description'); ?>

                <?php $total = $total + $price ?>
            </li>

        <?php wp_reset_postdata(); endforeach; ?>
    </ul>
    <br/>

    £<?php echo $total ?> Is the total price




</div>
