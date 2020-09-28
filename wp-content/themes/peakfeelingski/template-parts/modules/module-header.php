<header class="header__module">



    <div class="header-bg fixed">
        <div class="header-inner">
            <div class="contact-info float-lg-right">
                <a href="mailto:info@peakfeelingski.com" id="email"><h6>info@peakfeelingski.com</h6></a>
                <a href="tel:+33275894759" id="phone"><h6>+33 275 894 759</h6></a>

            </div>
            <div class="container  col-lg-4">

            </div>

            <div class="container col-xs-6 col-lg-4 text-center" id="header-logo">`

<!--                --><?php //if (is_front_page()): ?>
                    <a href="<?php echo home_url(); ?>">
                        <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/peakslogan.svg" alt="Peak Feeling Ski Logo" style="fill: #102143">
                    </a>
<!--                --><?php //endif; ?>
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