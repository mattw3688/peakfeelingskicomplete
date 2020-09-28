<div class="page-wrapper" id="transport-page">

    <?php

    /* Template Name: Transport */

    get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent ">

            <div class="d-flex flex-row" id="bold_text">

                <?php
                $bold_text = get_field('bold_text')
                ?>
                <div class="col-lg-1 d-none d-lg-block">

                </div>

                <div class="container col-lg-9 col-xl-10 text-center">

                    <h3>
                        <?php echo $bold_text ?>
                    </h3>

                </div>

                <div class="col-lg-2  d-none d-lg-block "></div>

            </div>

            <div class="d-flex flex-row mt-1" id="list_title">

                <?php
                $list_title = get_field('list_title')
                ?>
                <div class="col-lg-1 d-none d-lg-block">

                </div>

                <div class="container ml-4 col-lg-9 col-xl-10 text-left">

                    <p>
                        <?php echo $list_title ?>
                    </p>

                </div>

                <div class="col-lg-2  d-none d-lg-block "></div>

            </div>

            <div class="d-flex flex-row" id="list_items">

                <div class="col-lg-1 d-none d-lg-block">

                </div>

                <div class="container-fluid col-lg-4 text-left">

                    <ul>

                        <li><h4>A shared transfer</h4></li>
                        <li><h4>A private minibus for your group</h4></li>

                    </ul>

                </div>

                <div class="container-fluid col-lg-5  text-left">
                    <ul>
                        <li><h4>A private taxi</h4></li>
                        <li><h4>A helicopter ride over the mountains</h4></li>
                    </ul>

                </div>

                <div class="col-lg-1  d-none d-lg-block "></div>

            </div>

            <div class="d-flex flex-row top_paragraph__module">

                <?php
                $text = get_field('top_paragraph')
                ?>
                <div class="col-lg-1 d-none d-lg-block">

                </div>

                <div class="container col-lg-9 text-left">

                    <p>
                        <?php echo $text ?>
                    </p>

                </div>

            </div>

            <div class="d-flex flex-row bottom_paragraph__module">

                <?php
                $text = get_field('bottom_paragraph')
                ?>
                <div class="col-lg-1 d-none d-lg-block">

                </div>

                <div class="container col-lg-9 text-left">

                    <p>
                        <?php echo $text ?>
                    </p>

                </div>

            </div>

        </div>
    </section>

    <?php get_footer(); ?>
</div>

