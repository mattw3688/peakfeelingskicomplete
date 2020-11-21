<div class="customer-section container col-12 accommodation__module">

    <?php
        $products = get_sub_field('product_post');
        $customer_price = get_sub_field('price');
        $information = get_sub_field('information');
        $dates = get_sub_field('dates');
        $totalaccomprice = 0;
        $accomlabel = "";

    ?>

    <?php foreach ($products as $post):
    $post = get_post($post);
    ?>


    <?php
    $term_id = 'term' . '-' . $post->ID;
    $id_target = get_the_ID();

    ?>

    <div id="<?php echo $term_id; ?>" style="display:none;">
        <div class="content">
            <h3>Terms and Conditions</h3>
                <?php echo get_field('terms_and_conditions'); ?>
        </div>
    </div>


        <div class="row justify-content-center">
            <div class="card col-11 align-self-center " >
                <div class="card-body " >

                    <div class="row content product-card">
<!--                        left column-->
                        <div class="container-fluid col-12 col-sm-5" id="thumbnail-box">

                            <div class="text-block text-left">
                                <h3 class=>
                                    <?php echo the_title(); ?>
                                </h3>
                                <h6> <?php echo get_field('image_overlay_text') ?> </h6>
                            </div>

                            <img class="main-image rounded-corners" src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >

                            <div class="container-fluid mt-2 col-12" id="icon-container">

                                <div class="container  col-2" id="icons">

                                    <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Sleep-Capacity.svg" alt="Sleep Capacity" ></i>
                                    <p class="bottom-center"><?php echo get_field('capacity') ?></p>

                                </div>
                                <div class="container col-2" id="icons">

                                    <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Nearest-Gondola-Lift-distance.svg" alt="Nearest Lift" ></i>
                                    <p class="bottom-center"><?php echo get_field('distance_to_lift')?></p>

                                </div>
                                <div class="container col-2" id="icons">

                                    <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Chalet-Size.svg" alt="Chalet Size" ></i>
                                    <p class="bottom-center"><?php echo get_field('accommodation_size')?></p>

                                </div>

                                <?php
                                $facilities = get_field('extra_facilities');
                                foreach ($facilities as $facility):
                                    if ($facility == 'catered'):?>
                                        <div class="container col-2" id="icons">

                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Catered.svg" alt="Catered Accommodation" ></i>


                                        </div>
                                    <?php elseif ($facility == 'hot-tub'): ?>
                                        <div class="container col-2" id="icons">

                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Hot-Tub.svg" alt="Hot Tub" ></i>


                                        </div>

                                    <?php elseif ($facility == 'sauna'): ?>
                                        <div class="container col-2" id="icons">

                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Sauna.svg" alt="Hot Tub" ></i>


                                        </div>
                                    <?php elseif ($facility == 'pet-friendly'): ?>
                                        <div class="container  col-2" id="icons">

                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Pet-Friendly-Accom.svg" alt="Pet Friendly" ></i>


                                        </div>
                                    <?php elseif ($facility == 'wifi'): ?>
                                        <div class="container col-2" id="icons">

                                            <i><img class="info-icon" id="wifi-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Wifi-Accom.svg" alt="Wifi Available" ></i>


                                        </div>
                                    <?php elseif ($facility == 'parking'): ?>
                                        <div class="container col-2" id="icons">

                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Parking-Accom.svg" alt="Parking Available" ></i>

                                        </div>
                                    <?php elseif ($facility == 'swimming-pool'): ?>
                                        <div class="container col-2" id="icons">

                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Swimming-Pool-Accom.svg" alt="Swimming Pool" ></i>


                                        </div>
                                    <?php endif; ?>
                                <?php endforeach;
                                ?>



                            </div>

                        </div>

<!--                        right column-->
                        <div class="container col-12 col-sm-7 justify-content-center" style="padding-left: 3vw">


                            <div class="container-fluid  description " >

                                <h3><?php echo $dates ?></h3>
                                <p><?php echo get_field('product_description')?></p>

                                <p><?php echo $information?></p>
                            </div>

                            <div class="<?php echo $id_target?> container-fluid d-flex justify-content-end align-self-baseline col-12 " >


                                <?php $images = get_field('gallery');


                                 if ($images):
                                    $count = 1;

                                    foreach ($images as $image):

                                        if($count < 5 ): ?>

                                            <a class="mr-3" href="<?php echo $image['sizes']['large'] ?>" title="<?php echo $image['caption'] ?>">

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

                            <div class="row justify-content-end mt-4 mr-2" style="padding-right: 5px">

                                <div class="card card-body d-flex price-box justify-content-center align-items-center mb-2 id="accommodation-price">

                                <h5 style="padding-top: 6px"><?php echo $customer_price?></h5>

                            </div>

                            <div class="container d-flex align-items-baseline justify-content-end">
                                <div class="form-row mt-2" >



                                    <label for="_checkbox"><div id="tick_mark"></div></label>

                                    <label for="accommodation-box"><h5 class="terms  ">I confirm this choice and accept the <a href="#" data-featherlight="#<?php echo $term_id; ?> .content">terms and conditions</a></h5></label>
                                    <input class="mt-1 ml-2 price-checkbox" type="checkbox" id="_checkbox" data-customer-price="<?php echo $customer_price; ?>" data-product-name="<?php the_title(); ?>">
                                </div>
                            </div>






                        </div>

                        </div>



                    </div>



                </div>



            </div>



            <div>


            </div>


        </div>


</div>



<!--<div class="container text-center">-->
<!--    <div class="form-row mt-2">-->
<!--        <input class="mt-1 mr-2 price-checkbox" type="checkbox" data-customer-price="--><?php //echo $customer_price; ?><!--" data-product-name="--><?php //the_title(); ?><!--">-->
<!--        <label for="accommodation-box"><h5 class="terms">I confirm this choice and accept the <a href="#" data-featherlight="#--><?php //echo $term_id; ?><!-- .content">terms and conditions</a>.</h5></label>-->
<!--    </div>-->
<!--</div>-->


<script>


    $('.<?php echo $id_target?>').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled:true,
            navigateByImgClick: true,
        },
        image:{
            titleSrc: 'title'
        }
        // other options
    });

</script>

<?php wp_reset_postdata(); endforeach; ?>
