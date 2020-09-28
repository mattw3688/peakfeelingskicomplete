<div class="page-wrapper" id="basic-template">

<?php
/* Template Name: Basic Text Page */
get_header();
$title = get_field('text');
$content = get_field('main_content')
?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent text-center">

            <h3><?php echo $title ?></h3>

        </div>
        <div class="container bg-transparent text-center">

            <p><?php echo $content ?></p>

        </div>
    </section>



<?php get_footer() ?>
</div>


