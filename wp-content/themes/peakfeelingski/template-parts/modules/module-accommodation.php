<div class="customer-section accommodation__module">

    <?php
    $products = get_sub_field('product_post');
    $price = get_sub_field('price');
    $totalaccomprice = 0;
    $accomlabel = "";
    ?>

    <?php foreach ($products as $post):?>
        <div class="row justify-content-center">
            <div class="card col-lg-10 align-self-center " >
                <div class="card-body " >

                    <div class="row content">

                        <div class="container-fluid  col-lg-5" id="thumbnail-box">

                            <div class="text-block ">
                                <h3 class=>
                                    <?php echo the_title(); ?>
                                </h3>
                                <h6> <?php echo get_field('image_overlay_text') ?> </h6>
                            </div>

                            <img class="img-fluid main-image rounded-corners" src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >

                        </div>

                        <div class="container-fluid col-lg-6 justify-content-center">

                            <div class="container d-flex flex-row ">

                                <div class="container col-lg-2" id="icons">
                                    <div class="icon">
                                        <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Sleep-Capacity.svg" alt="Sleep Capacity" ></i>
                                        <p class="bottom-center"><?php echo get_field('capacity') ?></p>
                                    </div>
                                </div>
                                <div class="container col-lg-2" id="icons">
                                    <div class="icon">
                                        <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Nearest-Gondola-Lift-distance.svg" alt="Nearest Lift" ></i>
                                        <p class="bottom-center"><?php echo get_field('distance_to_lift')?>m</p>
                                    </div>
                                </div>
                                <div class="container col-lg-2" id="icons">
                                    <div class="icon">
                                        <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Chalet-Size.svg" alt="Chalet Size" ></i>
                                        <p class="bottom-center"><?php echo get_field('accommodation_size')?>m<sup>2</sup></p>
                                    </div>
                                </div>

                                <?php
                                $facilities = get_field('extra_facilities');
                                foreach ($facilities as $facility):
                                    if ($facility == 'catered'):?>
                                        <div class="container col-lg-2" id="icons">
                                            <div class="icon">
                                                <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Catered.svg" alt="Catered Accommodation" ></i>

                                            </div>
                                        </div>
                                    <?php elseif ($facility == 'hot-tub'): ?>
                                        <div class="container col-lg-2" id="icons">
                                            <div class="icon">
                                                <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Hot-Tub.svg" alt="Hot Tub" ></i>

                                            </div>
                                        </div>
                                    <?php elseif ($facility == 'wifi'): ?>
                                        <div class="container col-lg-2" id="icons">
                                            <div class="icon">
                                                <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Wifi.svg" alt="Hot Tub" ></i>

                                            </div>
                                        </div>
                                    <?php elseif ($facility == 'sauna'): ?>
                                        <div class="container col-lg-2" id="icons">
                                            <div class="icon">
                                                <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Sauna.svg" alt="Hot Tub" ></i>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach;
                                ?>



                            </div>
                            <div class="container  description ">
                                <p><?php echo get_field('product_description')?></p>


<!--                                <p>--><?php //echo get_field('terms_and_conditions')?><!--</p>-->
                            </div>



                            <div class="row justify-content-end ">

                                <div class="card card-body d-flex price-box justify-content-center align-items-center mb-2 id="accommodation-price">

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
            </div>



            <div>


            </div>


        </div>

        <?php wp_reset_postdata(); endforeach; ?>

</div>

<script>

    $(" .accommodation__module select ").on( "click keyup change", function() {

        console.log('Oh wow you clicked a select within Accommodation...');

        // lift_pass_calculator( $(this).val() );
        //
        // //$(this).css('background','red');
        // // bubbling! dom travelsal
        // $('.status').toggleClass('active');

    });

</script>
