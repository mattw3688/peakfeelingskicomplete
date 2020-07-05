<div class="header__module header-box ">


    <div class="header-bg">
        <div class="header-inner">
            <div class="container  col-lg-4">

            </div>

            <div class="container col-xs-6 col-lg-4" id="header-logo">`

                <a href="<?php echo home_url(); ?>">
                    <img class="img-fluid  " id="main-logo" src="<?php echo home_url();?>/wp-content/uploads/2020/07/PeakLogoSlogan_Aqua.png" alt="Peak Feeling Ski Logo">
                </a>

            </div>
            <div class="container col-lg-4 ">



            </div>
            <nav class="navbar navbar-expand-lg bg-transparent">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="top-menu d-inline">

                        <?php wp_nav_menu(array(

                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu',
                        ));
                        ?>

                    </ul>
                </div>
            </nav>

        </div>

    </div>

</div>