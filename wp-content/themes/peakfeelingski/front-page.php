<?php get_header();

$title = get_field('page_title');
$description = get_field('description');
$my_number = (int)get_field('my_number');
?>

<div class="container">



    <?php if( have_posts() ): while ( have_posts() ): the_post();?>

        <?php the_content()?>

    <?php  endwhile; else: endif;  ?>

    <?php if($title):?>
    <h1><?php echo $title ?></h1>
    <?php endif;?>

    <?php if($description):?>
        <?php echo nl2br($description) ?>
    <?php endif;?>

    <?php if($my_number):?>
        <h1><?php var_dump($my_number);  ?></h1>
    <?php endif;?>


</div>

<?php get_footer(); ?>