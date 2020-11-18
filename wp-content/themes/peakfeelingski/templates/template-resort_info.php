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
    <div class="row text-center justify-content-center" >
        <div class="card col-11 col-sm-10" id="resort-card" >
            <div class="card-body ">
                <div class="row-content d-flex ">

                    <div class="container d-flex flex-wrap justify-content-center col-12 ">

                        <div class="container col-12 text-center">
                            <h1><?php echo $name?></h1>
                        </div>
                        <div class="container col-12 col-md-4">
                            <div class="container col-12">
                                <img src="<?php echo $logisticspicture ?>" alt="">
                            </div>
                            <div class="container col-12 mt-4 mb-2">
                                <img src="<?php echo $skipicture ?>" alt="">
                            </div>
                        </div>
                        <div class="container col-12 col-md-8 ">
                            <img class="img main-image rounded-corners" id="resort-thumbnail" src="<?php the_post_thumbnail_url('large'); ?>" alt=""  >
                        </div>

                    </div>




                </div>



                </div>


                <div class="container justify-content-center d-flex gallery col-12 ">
                    <?php $topimages = get_field('top_gallery');

                     if ($topimages):
                        $count = 1;

                        foreach ($topimages as $topimage):

                            if($count < 5 ): ?>

                                <a class="mr-2" href="<?php echo $topimage['sizes']['large'] ?>" title="<?php echo $topimage['caption'] ?>">
                                    <img src=" <?php echo $topimage['sizes']['thumbnail'] ?>"
                                         title="<?php echo $topimage['caption'] ?>" class="img-fluid">
                                </a>

                            <?php else:?>
                                <a href="<?php echo $image['sizes']['large'] ?>" title="<?php echo $image['caption'] ?>">
                                </a>

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
                <div class="container justify-content-center d-flex gallery col-12 mb-4">


                    <?php if ($bottomimages):
                    $count = 1;

                    foreach ($bottomimages as $bottomimage):

                        if($count < 5 ): ?>

                            <a class="mr-2" href="<?php echo $bottomimage['sizes']['large'] ?>" title="<?php echo $bottomimage['caption'] ?>">
                                <img src=" <?php echo $bottomimage['sizes']['thumbnail'] ?>"
                                     title="<?php echo $bottomimage['caption'] ?>" class="img-fluid">
                            </a>

                        <?php else:?>
                            <a href="<?php echo $bottomimage['sizes']['large'] ?>" title="<?php echo $bottomimage['caption'] ?>">
                            </a>

                        <?php endif; ?>
                        <?php $count++ ?>

                    <?php endforeach;?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>
