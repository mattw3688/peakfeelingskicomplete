<header class="header__module">



    <div class="header-bg">
        <div class="header-inner">
            <div class="contact-info float-lg-right">
                <a href="mailto:info@peakfeelingski.com" id="email"><h6>info@peakfeelingski.com</h6></a>
                <a href="tel:+33275894759" id="phone"><h6>+33 275 894 759</h6></a>

            </div>
            <div class="container  col-lg-4">

            </div>

            <div class="container col-xs-6 col-lg-4" id="header-logo">`

<!--                <a href="--><?php //echo home_url(); ?><!--">-->
<!--                    <img class="img-fluid  " id="main-logo" src="--><?php //echo home_url();?><!--/wp-content/uploads/2020/07/PeakLogoSlogan_Aqua.png" alt="Peak Feeling Ski Logo">-->
<!--                </a>-->

            </div>
            <div class="container col-lg-4 ">



            </div>



        </div>

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" role="navigation">
        <div class="container-fluid " id="nav-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-menu"  aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'top-menu',
                'depth'             => 1,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'top-menu',
                'menu_class'        => 'nav navbar-nav navbar-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </nav>

</header>