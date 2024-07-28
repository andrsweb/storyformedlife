<?php
/* Template Name: Join */
get_header();
?>


<main class="join">
   <?= get_template_part('parts/hero') ?>
   <?= get_template_part('parts/navigate') ?>
   <?= get_template_part('parts/questions-columns') ?>
   <?= get_template_part('parts/content-rows', null, ['class' => 'even'])?>
    <?php // get_template_part('parts/full-section') ?>
   <?= get_template_part('parts/mobile') ?>
</main>

<?php get_footer() ?>