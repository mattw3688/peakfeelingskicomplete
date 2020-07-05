<div class="customer-section accommodation__module">

    <?php
    $products = get_sub_field('product_post');
    $price = get_sub_field('price');
    $totalaccomprice = 0;
    $accomlabel = "";
    ?>

    <?php foreach ($products as $post):?>

        <div class="container-fluid text-center">

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

                <div class="container-fluid col-lg-6">

                    <div class="description">

                        <?php _e(); echo the_field('product_description')?>
                        <br/>
                        <h6>Total Price €<?php echo $price?></h6>
                        <input type="checkbox" id="checkbox_accommodation">
                        <label for="checkbox_accommodation">Tick here to confirm</label>

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

<script>

    $(" .accommodation__module input ").on( "click keyup change", function() {

        console.log('Oh wow you clicked a select within Accommodation...');

        // lift_pass_calculator( $(this).val() );
        //
        // //$(this).css('background','red');
        // // bubbling! dom travelsal
        // $('.status').toggleClass('active');

    });

</script>
