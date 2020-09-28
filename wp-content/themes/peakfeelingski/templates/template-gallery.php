<?php

/* Template Name: Gallery */
$images = get_field('gallery');

get_header(); ?>

<section class="page">
    <div class="container">


        <h1> <?php the_title(); ?></h1>

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

            <?php the_content() ?>

        <?php endwhile; else: endif; ?>

        <!--        --><?php //var_dump($images) ?>
        <?php if ($images): ?>

        <div class="gallery">
            <div class="row">
                <?php $count = 1 ?>
                <?php foreach ($images as $image):?>

                    <?php if($count == 1 || $count == 2 || $count == 3): ?>

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
            </div>
        </div>

    <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

