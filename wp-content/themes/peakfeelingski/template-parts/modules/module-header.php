<header class="header__module">



    <div class="header-bg fixed">
        <div class="header-inner">
            <div class="contact-info float-lg-right">
                <a href="mailto:info@peakfeelingski.com" id="email"><h6>info@peakfeelingski.com</h6></a>


            </div>
            <div class="container  col-lg-4">

            </div>

            <div class="container col-xs-6 col-lg-4 text-center" id="header-logo">`

<!--                --><?php //if (is_front_page()): ?>
                    <a href="<?php echo home_url(); ?>">
                        <?php if (is_page('accommodation')): ?>

                                <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/Accom-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('transport')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/Transport-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('ski-hire')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/SkiHire-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('child-care')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/Childcare-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('extras')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/Extras-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('resorts')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/Resorts-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('meet-the-team')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/MeetTeam-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('contact')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/ContactUs-logo.svg" alt="Peak Feeling Ski Logo" style="">

                                <?php elseif (is_page('ski-school')): ?>
                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/SkiSchool-logo.svg" alt="Peak Feeling Ski Logo" style="">


                        <?php else: ?>

                                    <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/logos/Intro-logo.svg" alt="Peak Feeling Ski Logo" style="">
                             <?php endif;

                        ?>
<!--                        <img class="img-fluid mt-3 " id="main-logo" src="../../../wp-content/themes/peakfeelingski/assets/images/peakslogan.svg" alt="Peak Feeling Ski Logo" style="">-->
                    </a>
<!--                --><?php //endif; ?>
            </div>
            <div class="container col-lg-4 ">



            </div>



        </div>

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="main-nav" role="navigation">
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