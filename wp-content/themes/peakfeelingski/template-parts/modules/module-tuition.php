<?php
    $products = get_sub_field('product_post');
    $customer_price = get_sub_field('price');
?>

<?php foreach ($products as $post):?>

<?php 
    $terms_and_conditions_text = '<p>' . get_field('terms_and_conditions') . '</p>';
?>
    

<div class="customer-section tuition__module">


        <div class="container-fluid text-center">

            <div class="row content">

                <div class="container-fluid  col-lg-5" id="thumbnail-box">

                    <div class="text-block">
                        <h3 class=>
                            <?php echo the_title(); ?>
                        </h3>
                        <h6> <?php echo get_sub_field('image_overlay_text') ?> </h6>
                    </div>
                    <a href="

">
                        <img class="img-fluid main-image " src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >
                    </a>
                </div>

                <div class="container-fluid col-lg-6">

                    <div class="description">

                        <?php echo the_field('product_description')?>
                        <br/>
                        <h6>Total Price €<?php echo the_field('price')?></h6>
                        <input type="checkbox" id="checkbox_tuition">
                        <label for="checkbox_tuition">Tick here to confirm</label>

                    </div>
                    <div class="container-fluid gallery col-lg-9 justify-content-center">


                        <?php $images = get_field('gallery');?>

                        <?php if ($images): ?>

                            <?php foreach ($images as $image): ?>

                                <a href="<?php echo $image['sizes']['large']?>" title="<?php echo $image['caption'] ?>">
                                    <img src=" <?php echo $image['sizes']['thumbnail']?>"
                                         title="<?php echo $image['caption'] ?>" class="img-fluid">
                                </a>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>


</div>


<div class="container text-center">
    <div class="form-row mt-2">
        <input class="mt-1 mr-2 price-checkbox" type="checkbox" data-customer-price="<?php echo $customer_price; ?>" data-product-name="<?php the_title(); ?>">

        <label for="accommodation-box"><h5>Check the box to select this tuition and confirm you have read and accept the <a href="#" data-featherlight="<?php echo $terms_and_conditions_text; ?>">terms and conditions</a> associated with it.</h5></label>
    </div>
</div>

<?php wp_reset_postdata(); endforeach; ?>