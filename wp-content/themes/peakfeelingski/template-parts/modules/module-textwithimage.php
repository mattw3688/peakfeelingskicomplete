<div class=textwithimage__module">
    <?php
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $side = get_sub_field('image_side');
    $picture = $image['sizes']['large'];

    ?>

    <div class="row mt-5" >

        <?php if ($side == 'left'): ?>

            <div class="col-lg-6">

                <img src="<?php echo $picture ?> " alt="<?php echo $image['alt'] ?> " class="img-fluid">

            </div>

            <div class="col-lg-6">

                <h4><?php echo $title; ?></h4>

                <?php echo $content; ?>

            </div>

        <?php else: ?>

            <div class="col-lg-6">

                <h4><?php echo $title; ?></h4>

                <?php echo $content; ?>

            </div>

            <div class="col-lg-6">

                <img src="<?php echo $picture ?> " alt="<?php echo $image['alt'] ?> " class="img-fluid">

            </div>


        <?php endif; ?>


    </div>





</div>
