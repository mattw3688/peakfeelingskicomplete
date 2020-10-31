<div class="page-wrapper" id="resort_info-page">
    <?php

    /* Template Name: Resort Info Page */
    get_header();


    $name = get_field('resort_name');
    $logisticsimage = get_field('resort_logistics_info');
    $logisticspicture = $logisticsimage['sizes']['large'];
    $skisimage = get_field('resort_ski_info');
    $skipicture = $skisimage['sizes']['large'];
    $topimages = get_field('top_gallery');
    $bottomimages= get_field('bottom_gallery');


    ?>
    <div class="container text-center justify-content-center" >
        <div class="card" id="resort-card" style="padding-bottom: 5vh">
            <div class="card-body ">
                <div class="row-content d-flex ">

                    <div class="container col-lg-4 ">

                        <h1><?php echo $name?></h1>
                        <div class="container-fluid">
                            <img src="<?php echo $logisticspicture ?>" alt="">
                        </div>
                        <div class="container-fluid mt-4">
                            <img src="<?php echo $skipicture ?>" alt="">
                        </div>

                    </div>

                    <div class="container col-lg-8 ">
                        <img class="img main-image rounded-corners" id="resort-thumbnail" src="<?php the_post_thumbnail_url('large'); ?>" alt="" " >
                    </div>


                </div>



                </div>


                <div class="container-fluid text-center align-self-center gallery col-lg-12 ">
                    <?php $topimages = get_field('top_gallery');

                     if ($topimages):
                        $count = 1;

                        foreach ($topimages as $topimage):

                            if($count < 7): ?>


                                    <img src=" <?php echo $topimage['sizes']['thumbnail'] ?>"
                                         title="<?php echo $topimage['caption'] ?>" class="img-fluid">



                            <?php endif; ?>
                            <?php $count++ ?>

                        <?php endforeach;?>

                    <?php endif;?>
                </div>

                <div class="text text-left" style="padding: 2vh 2vw 2vh 2vw">
                    <?php
                    // Check rows exists.
                        if( have_rows('paragraph_with_heading') ):

                            // Loop through rows.
                            while( have_rows('paragraph_with_heading') ) : the_row();

                                // Load sub field value.
                                $heading = get_sub_field('heading');
                                $paragraph = get_sub_field('paragraph');?>

                                <h3><?php echo $heading ?></h3>
                                <p><?php echo $paragraph ?></p>

                            <?php endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;?>
                </div>
                <div class="container-fluid  align-self-baseline gallery col-lg-12 mb-4">


                    <?php if ($bottomimages):
                    $count = 1;

                    foreach ($bottomimages as $bottomimage):

                    if($count < 7): ?>

                    <img src=" <?php echo $bottomimage['sizes']['thumbnail'] ?>"
                         title="<?php echo $bottomimage['caption'] ?>" class="img-fluid">



                    <?php endif; ?>
                    <?php $count++ ?>

                    <?php endforeach;?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer() ?>

</div>

