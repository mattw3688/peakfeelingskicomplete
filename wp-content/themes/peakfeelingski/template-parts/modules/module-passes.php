<div class="liftpass__module">

    <?php
    $products = get_sub_field('product_post');
    $information = get_sub_field('information');
    $price = get_sub_field('price');


    ?>

<!--    <ul class="list-group">-->

        <?php foreach ($products as $post):?>



            <section class="row mt-5">
                <div class="d-flex">

<!--                <li class="list-group-item col-lg-10">-->
                    <!--                allow you to use post data-->
                    <?php setup_postdata($post); ?>
                    <!--                    --><?php //$price = get_field('price');  ?>

                    <div class="container-fluid col-lg-5">
                        <h3>
                            <a href="<?php echo get_page_link() ?>" class=""><?php echo the_title(); ?></a>
                        </h3> <br/>
                        <p><?php echo $information?></p>
                        <h6 class="align-self-baseline" >Total price €<?php echo $price?></h6>

                    </div>

                    <div class="containercol-lg-4">
                        <div class="gallery">
                            <?php $images = get_field('gallery');?>

                            <?php if ($images): ?>

                                <?php foreach ($images as $image): ?>

                                    <a href="<?php echo $image['sizes']['large']?>" title="<?php echo $image['caption'] ?>">
                                        <img src=" <?php echo $image['sizes']['thumbnail']?>"
                                             title="<?php echo $image['caption'] ?>" class="img-fluid">
                                    </a>

                                <?php endforeach; ?>

                            <?php endif; ?>

                    <div class="price-box">

                    </div>



                        </div>
<!--                        <img src="--><?php //the_post_thumbnail_url('thumbnail'); ?><!--" alt="">-->
                    </div>

<!--                    <div class="align-self-center  col-lg-2">-->
<!---->
<!--                        <select name="test" >-->
<!--                            <option value="1">Value of 1</option>-->
<!--                            <option value="2">Value of 2</option>-->
<!--                            <option value="3">Value of 3</option>-->
<!--                        </select>-->
<!---->
<!---->
<!---->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div class="align-self-center col-lg-2">-->
<!---->
<!--                        <select name="test2" >-->
<!--                            <option value="5">Value of 5</option>-->
<!--                            <option value="6">Value of 6</option>-->
<!--                            <option value="7">Value of 7</option>-->
<!--                        </select>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                    </div>-->

                </div>

<!--                </li>-->

            </section>

        <?php wp_reset_postdata(); endforeach; ?>
<!--    </ul>-->

</div>

