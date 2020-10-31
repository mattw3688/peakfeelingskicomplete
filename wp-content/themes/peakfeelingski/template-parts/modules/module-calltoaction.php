<div class="calltoaction__module">
    <div class="d-flex flex-row">

        <?php
        $pretext = get_sub_field('before_text');
        $link = get_sub_field('link');
        $endtext = get_sub_field('after_text')
        ?>


        <div class="container col-lg-9 col-xl-10 text-center" id="calltoaction-container">

            <p>
                <?php echo $pretext?> <a href="<?php echo get_home_url('contact', '/contact') ?>"><?php echo $link?></a> <?php echo $endtext?>
            </p>

        </div>



    </div>

</div>
