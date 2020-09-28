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
                        <a href="">
                            <img class="img-fluid main-image " src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >
                        </a>
                    </div>

                    <div class="container-fluid col-lg-6">

                        <div class="description">

                            <?php echo the_field('product_description')?>
                            <br/>
                            <h6>Total Price €<?php echo the_field('price')?></h6>
                            <input type="checkbox" id="checkbox_transport">
                            <label for="checkbox_transport">Tick here to confirm</label>

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

        <?php wp_reset_postdata(); endforeach; ?>
    </div>

</div>
</div>
