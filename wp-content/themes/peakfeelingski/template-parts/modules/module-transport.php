<div class="customer-section transport__module">

    <?php
    $products = get_sub_field('product_post');
    $price = get_sub_field('price');
    ?>

    <?php foreach ($products as $post):?>

    <div class="row justify-content-center">

        <div class="card col-lg-10 align-self-center " >

            <div class="card-body " >

                <div class="row content">

                    <div class="container-fluid  col-lg-5" id="thumbnail-box">

                        <div class="text-block">
                            <h3 class=>
                                <?php echo the_title(); ?>
                            </h3>
                            <h6> <?php echo get_sub_field('image_overlay_text') ?> </h6>
                        </div>

                            <img class="img-fluid main-image " src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >

                    </div>

                    <div class="container-fluid col-lg-6 justify-content-center">

                        <div class="container d-flex flex-row ">

                            <div class="container col-lg-2" id="icons">
                                <div class="icon">
                                    <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Vehicle-Capacity.svg" alt="Vehicle Capacity" ></i>
                                    <p class="bottom-center"><?php echo get_field('capacity') ?></p>
                                </div>
                            </div>

                            <?php $facilities = get_field('extra_facilities');
                            foreach ($facilities as $facility):
                                if ($facility == 'wifi'):?>
                                    <div class="container col-lg-2" id="icons">
                                        <div class="icon">
                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Wifi.svg" alt="Wifi Available" ></i>

                                        </div>
                                    </div>

                                <?php endif; ?>
                            <?php endforeach;
                            ?>



                        </div>

                        <div class="description">
                            <p><?php echo the_field('product_description')?></p>
                            <br/>
                        </div>

                        <div class="row justify-content-end ">

                            <div class="card card-body d-flex price-box justify-content-center align-items-center mb-2 id="transport-price">

                            <h5 style="padding-top: 6px"><?php echo $price?></h5>

                            <!--                                <input type="checkbox" id="checkbox_accommodation">-->
                            <!--                                <label for="checkbox_accommodation">Tick here to confirm</label>-->
                        </div>

                    </div>

                    <div class="container justify-content-center align-self-baseline gallery col-lg-12 ">


                        <?php $images = get_field('gallery');

                        if ($images):
                            $count = 1;

                            foreach ($images as $image):

                                if($count < 4 ): ?>

                                    <a href="<?php echo $image['sizes']['large'] ?>" title="<?php echo $image['caption'] ?>">
                                        <img src=" <?php echo $image['sizes']['thumbnail'] ?>"
                                             title="<?php echo $image['caption'] ?>" class="img-fluid">
                                    </a>

                                <?php else:?>
                                    <a href="<?php echo $image['sizes']['large'] ?>" title="<?php echo $image['caption'] ?>">
                                    </a>

                                <?php endif; ?>
                                <?php $count++ ?>

                            <?php endforeach;?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

        <?php wp_reset_postdata(); endforeach; ?>
    </div>

</div>

