<div class="email__module">
    <div class="d-flex flex-row">

        <?php
        $pretext = get_sub_field('before_text');
        $email = get_sub_field('email');

        ?>


        <div class="container col-lg-9 col-xl-10 text-center" id="calltoaction-container">

            <h3>
                <?php echo $pretext?> <a href="mailto:<?php echo $email?>"><?php echo $email?></a>
            </h3>

        </div>



    </div>

</div>
