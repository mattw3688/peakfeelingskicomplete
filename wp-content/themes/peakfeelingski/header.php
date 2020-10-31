<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<title><?php bloginfo('name');?></title>
        <?php gravity_form_enqueue_scripts( 1); ?>
        <?php gravity_form_enqueue_scripts( 3); ?>
        <?php gravity_form_enqueue_scripts( 4); ?>
		<?php wp_head(); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
        <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="../../../wp-content/themes/peakfeelingski/assets/css/magnific.css">
        <script src="../../../wp-content/themes/peakfeelingski/assets/js/magnific.js"></script>
	</head>

<body <?php body_class();?>>


<?php get_template_part('template-parts/modules/module', 'header');?>
