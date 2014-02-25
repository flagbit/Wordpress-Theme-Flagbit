<?php get_header(); ?>

<div class="content-wrapper">

    <h2><?php _e('Nicht zu finden'); ?></h2>

    <p><?php _e('Sorry, aber die angeforderte Seite war nicht aufzufinden.'); ?></p>

    <h3><?php _e('Suchen'); ?></h3>

    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
