<?php

/* Template Name: Options */

$colour = get_field('choose_your_colour');
$flavours = get_field('choose_a_flavour');
$consent = get_field('do_you_consent');
$destination = get_field('where_do_you_want_to_go');
$sure = get_field('are_you_sure');

get_header(); ?>

<section class="page">
    <div class="container">


        <h1> <?php the_title(); ?></h1>

<!--        --><?php //  var_dump($colour); ?>
        <?php if($colour): ?>

            <strong>Colour:</strong><?php echo $colour['value']; ?>

        <?php endif; ?>

        <br/> <br/>

        <?php echo implode($flavours, ',')?>

        <br/> <br/>

        <?php echo $consent;?>

        <br/> <br/>

        <?php echo $destination; ?>

        <br/> <br/>

        <?php if($sure):?>
        Yes I'm Sure
        <?php else: ?>
        Nope not sure

    <?php endif;?>





    </div>
</section>

<?php get_footer(); ?>