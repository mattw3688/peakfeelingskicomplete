<div class="textwheading__module">
    <div class="d-flex flex-row">

        <?php
        $header = get_sub_field('header');
        $text = get_sub_field('text')
        ?>
        <div class="col-lg-1 d-none d-lg-block">

        </div>

        <div class="container col-lg-10 ">

            <h1>
                <?php echo $header ?>
            </h1>

            <p>
                <?php echo $text ?>
            </p>

        </div>

        <div class="col-lg-1 d-none d-lg-block"></div>

    </div>


</div>
