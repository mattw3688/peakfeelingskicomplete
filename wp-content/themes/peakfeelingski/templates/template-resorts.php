<div class="page-wrapper" id="resorts-page">

    <?php

    /* Template Name: Resorts */

    get_header(); ?>
    <?php $piste_map = get_field( 'piste_map' ); ?>


    <section class="container-fluid bg-transparent justify-content-center">
        <div class="container bg-transparent text-center" id="resorts-heading">

            <h1><?php echo get_field('text');?></h1>

        </div>

        <div class="row sign-row d-flex flex-row justify-content-center text-center">


            <div class="container col-4" style="margin: 0">
                <a class="lolly-link" href="<?php echo get_home_url('','/tignes') ?>"><img class="img" id="tignes-lolly" src="../../../wp-content/themes/peakfeelingski/assets/images/icons/lolly-tignes.svg" alt="Tignes sign" style="float: right"></a>
            </div>



            <div class="container col-4" style="margin: 0">
                <?php if ( $piste_map ) : ?>
                <a class="lolly-link" href="<?php echo esc_url( $piste_map['url'] ); ?>" target="_blank"><img class="img" id="espace-lolly" src="../../../wp-content/themes/peakfeelingski/assets/images/icons/lolly-espace.svg" alt="Espace killy ski area sign" ></a>
                <?php endif; ?>
            </div>

            <div class="container col-4" style="margin: 0">
                <a class="lolly-link" href="<?php echo get_home_url('','/val-disere') ?>"><img class="img" id="val-lolly" src="../../../wp-content/themes/peakfeelingski/assets/images/icons/lolly-val.svg" alt="Val d'isere sign" style="float: left; z-index: 2 " ></a>
            </div>


        </div>




    </section>

    <?php get_footer(); ?>
</div>
