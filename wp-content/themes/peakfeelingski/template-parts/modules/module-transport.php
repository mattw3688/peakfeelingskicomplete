<?php
    $products = get_sub_field('product_post');
    $information = get_sub_field('information');
    $customer_price = get_sub_field('price');
?>

<?php foreach ($products as $post):?>

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

<div class="customer-section transport__module">

    <div class="row justify-content-center">

        <div class="card col-11 align-self-center " >

            <div class="card-body " >

                <div class="row content">

                    <div class="container-fluid col-12  col-sm-5" id="thumbnail-box">

                        <div class="text-block text-left">
                            <h3 class=>
                                <?php echo the_title(); ?>
                            </h3>
                            <h6> <?php echo get_field('image_overlay_text') ?> </h6>
                        </div>

                            <img class="img-fluid main-image " src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >

                    </div>

                    <div class="container col-12 col-sm-7 justify-content-center" style="padding-left: 3vw">

                        <div class="container-fluid  description ">
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

                            <div class="card card-body d-flex price-box justify-content-center align-items-center mb-2 id="transport-price">

                            <h5 style="padding-top: 6px"><?php echo $customer_price?></h5>

                        </div>

                        <div class="container d-flex align-items-baseline justify-content-end">
                            <div class="form-row mt-2">

                                <label for="transport-box"><h5 class="terms">I confirm this choice and accept the <a href="#" data-featherlight="#<?php echo $term_id; ?> .content">terms and conditions</a></h5></label>
                                <input class="mt-1 ml-2 price-checkbox" type="checkbox" data-customer-price="<?php echo $customer_price; ?>" data-product-name="<?php the_title(); ?>">

                            </div>
                        </div>



                    </div>



                </div>

            </div>

        </div>

    </div>

</div>




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

