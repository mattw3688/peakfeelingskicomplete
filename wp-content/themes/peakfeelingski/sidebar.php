<!--Sidebar If Statement to use on a specific page-->
<!--index is the sidebar index from functions.php-->
<?php if( is_active_sidebar('page-sidebar')): ?>

    <?php dynamic_sidebar('page-sidebar') ?>

<?php endif; ?>
