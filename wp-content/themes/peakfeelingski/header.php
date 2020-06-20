<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Peak Feelings Ski</title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class();?>>
<header>


<nav class="navbar navbar-expand-sm  navbar-light sticky-top row">
    <a class="navbar-brand ml-5 " href="<?php echo get_home_url();?>">
        <img src="<?php echo theme_img_path;?>/Logo.png>" width="30" height="30" class="d-inline-block align-bottom" >
    </a>

<!--Toggler-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

<!--Navbar Links-->
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php wp_nav_menu(

                array(

                    'theme_location' => 'primary-menu',
                    'menu_class' => 'primary-menu'

                )

            );?>
        </ul>
    </div>


</nav>
</header>