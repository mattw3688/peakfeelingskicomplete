<div class="phone__module">
    <div class="d-flex flex-row">

        <?php
        $pretext = get_sub_field('before_text');
        $number = get_sub_field('number');

        ?>


        <div class="container col-lg-9 col-xl-10 text-center" id="calltoaction-container">

            <h3>
                <?php echo $pretext?> <a href="tel:<?php echo $number?>"><?php echo $number?></a>
            </h3>

        </div>



    </div>

</div>
