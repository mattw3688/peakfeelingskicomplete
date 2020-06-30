<?php
$images = get_field('gallery'); ?>

<?php if($images):?>

    <section class="gallery">
        <div class="row">

            <?php foreach ($images as $image):?>

                <div class="col-lg-3">

                    <a href="<?php echo $image['sizes']['large']?>" title="<?php echo $image['caption'] ?>">
                        <img src=" <?php echo $image['sizes']['thumbnail']?>"
                             title="<?php echo $image['caption'] ?>" class="img-fluid">
                    </a>

                </div>

            <?php endforeach;?>
        </div>
    </section>

<?php endif;?>