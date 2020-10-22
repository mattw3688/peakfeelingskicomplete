<?php
    $products = get_sub_field('product_post');
    $customer_price = get_sub_field('price');
?>

<?php foreach ($products as $post):?>

<div class="customer-section massage__module">

    <?php
    $term_id = 'term' . '-' . $post->ID;
    ?>

    <div id="<?php echo $term_id; ?>" style="display:none;">
        <div class="content">
            <h3>Terms and Conditions</h3>
                <?php echo get_field('terms_and_conditions'); ?>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="card col-lg-10 align-self-center " >

            <div class="card-body " >

                <div class="row content">

                    <div class="container-fluid  col-lg-5" id="thumbnail-box">

                        <div class="text-block text-center">
                            <h3 class=>
                                <?php echo the_title(); ?>
                            </h3>
                            <h6> <?php echo get_sub_field('image_overlay_text') ?> </h6>
                        </div>
                        <a href="">
                            <img class="img-fluid main-image " src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >
                        </a>
                    </div>

                    <div class="container-fluid col-lg-6 justify-content-center">

                        <div class="container d-flex flex-row ">

                            <?php
                            $facilities = get_field('extra_facilities');
                            foreach ($facilities as $facility):
                                if ($facility == 'hot-tub-spa'):?>
                                    <div class="container col-lg-2" id="icons">
                                        <div class="icon">
                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Hot-Tub-Spa.svg" alt="Hot Tub" ></i>

                                        </div>
                                    </div>
                                <?php elseif ($facility == 'sauna-spa'): ?>
                                    <div class="container col-lg-2" id="icons">
                                        <div class="icon">
                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Sauna-Spa.svg" alt="Sauna" ></i>

                                        </div>
                                    </div>
                                <?php elseif ($facility == 'massage-spa'): ?>
                                    <div class="container col-lg-2" id="icons">
                                        <div class="icon">
                                            <i><img class="info-icon" src="../../../../../wp-content/themes/peakfeelingski/assets/images/icons/Massage.svg" alt="Massage" ></i>

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

                            <div class="card card-body d-flex price-box justify-content-center align-items-center mb-2 id="accommodation-price">

                            <h5 style="padding-top: 6px"><?php echo $customer_price?></h5>

                            <!--                                <input type="checkbox" id="checkbox_accommodation">-->
                            <!--                                <label for="checkbox_accommodation">Tick here to confirm</label>-->
                        </div>

                    </div>
                    <div class="container text-center align-self-baseline gallery col-lg-12 ">


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
</div>


<div class="container text-center">
    <div class="form-row mt-2">
        <input class="mt-1 mr-2 price-checkbox" type="checkbox" data-customer-price="<?php echo $customer_price; ?>" data-product-name="<?php the_title(); ?>">

        <label for="spa-box"><h5 class="terms">Check the box to select this option and confirm you have read and accept the <a href="#" data-featherlight="#<?php echo $term_id; ?> .content">terms and conditions</a> associated with it.</h5></label>
    </div>
</div>

<?php wp_reset_postdata(); endforeach; ?>

<?php
$term_id = 'term' . '-' . $post->ID;
?>

<div id="<?php echo $term_id; ?>" style="display:none;">
    <div class="content">
        <h3>Terms and Conditions</h3><p>
            <?php echo get_field('terms_and_conditions'); ?>
    </div>
</div>

<a href="#" data-featherlight="#<?php echo $term_id; ?> .content">
