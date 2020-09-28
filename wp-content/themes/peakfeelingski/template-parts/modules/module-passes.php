<div class="customer-section liftpass__module">

    <?php
    $products = get_sub_field('product_post');
    $information = get_sub_field('information');
    $price = get_sub_field('price');
    ?>


        <?php foreach ($products as $post):?>
            <?php setup_postdata($post); ?>

    <div class="row justify-content-center">

        <div class="card col-lg-10 align-self-center " >

            <div class="card-body " >

                <div class="row content">

                    <div class="container-fluid  col-lg-5" id="thumbnail-box">



                            <img class="img-fluid main-image " src="<?php the_post_thumbnail_url('small'); ?>" alt="" style="width: 100%;" >

                    </div>


                    <div class="container col-lg-6">

                        <div class="description text-center">

                            <?php echo $information?>
                            <br/>
                            <h6>Total Price €<?php echo $price?></h6>
                            <input type="checkbox" id="checkbox_passes">
                            <label for="checkbox_passes">Tick here to confirm</label>

                        </div>
                        <div class="container-fluid gallery col-lg-9 justify-content-center">


                    </div>
                </div>

            </div>

        </div>

        <?php wp_reset_postdata(); endforeach; ?>
    </div>

</div>

<script>



</script>

