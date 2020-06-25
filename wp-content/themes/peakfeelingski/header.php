<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	</head>

<body <?php body_class();?>>


<header class = "main">
    <?php wp_nav_menu(array(

            'theme_location' => 'primary-menu',
            'menu_class' => 'primary-menu',
        ));
    ?>
</header>

