

<?php  if (is_page('accommodation')): ?>
    <?php get_template_part('template-parts/footer/footer', 'home');?>

<?php elseif ((is_page('child-care'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'childcare');?>

<?php elseif ((is_page('additional-treats'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'treats');?>

<?php elseif ((is_page('extra-activities'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'extras');?>

<?php elseif ((is_page('massage-spa'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'massage');?>

<?php elseif ((is_page('ski-hire'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'equipment');?>

<?php elseif ((is_page('ski-school'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'tuition');?>

<?php elseif ((is_page('transport'))): ?>
    <?php get_template_part('template-parts/footer/footer', 'transport');?>

<?php else: ?>

        <?php get_template_part('template-parts/footer/footer', 'home');?>

<?php endif; ?>


<?php wp_footer(); ?>
<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>