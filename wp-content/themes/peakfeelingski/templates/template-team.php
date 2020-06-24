<?php

/* Template Name: Team */

get_header(); ?>

<section class="page">
    <div class="container">


        <h1> <?php the_title(); ?></h1>


        <?php if(have_rows('team')): ?>

            <ul class="list-group">

                <?php while(have_rows('team')):the_row();
                $name =  get_sub_field('name');
                $bio =  get_sub_field('bio');
                $image = get_sub_field('profile_picture');
                $picture = $image['sizes']['thumbnail'];
                $link = get_sub_field('link');
                $hourly_rate = get_sub_field('hourly_rate');



                ?>

                    <li class="list-group-item" >
                        <h4><?php echo $name ?></h4>
                        <br/>

                        <?php echo $bio ?>
                        <br/>

                        <?php if($image): ?>
                            <img src="<?php echo $picture; ?>" alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>
                        <br/>

                        <?php if($link): ?>
                        <a href="<?php echo $link['url']; ?>">
                           View Profile
                        </a>
                        <?php endif; ?>

                        £<?php echo $hourly_rate?>


                    </li>


                <?php  endwhile;  ?>

            </ul>
        <?php endif; ?>






    </div>
</section>

<?php get_footer(); ?>
