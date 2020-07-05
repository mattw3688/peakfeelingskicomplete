<div class="customer-section childcare__module">

    <?php
    $products = get_sub_field('product_post');
    $information = get_sub_field('information');
    $price = get_sub_field('price');
    ?>


    <?php foreach ($products as $post):?>
    <?php setup_postdata($post); ?>

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


            <div class="container col-lg-6">

                <div class="description text-center">

                    <?php echo $information?>
                    <br/>
                    <h6>Total Price €<?php echo $price?></h6>
                    <input type="checkbox" id="checkbox_accommodation">
                    <label for="checkbox_accommodation">Tick here to confirm</label>

                </div>
                <div class="container-fluid gallery col-lg-9 justify-content-center">


                </div>



            </div>

            <?php wp_reset_postdata(); endforeach; ?>


        </div>

        <script>



        </script>