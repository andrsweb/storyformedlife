<?php
/* Template Name: Home */
get_header();
?>


<main class="home">

   
   <?= get_template_part('parts/hero') ?>
   <?= get_template_part('parts/topics') ?>
   <?= get_template_part('parts/questions-columns') ?>
   <?= get_template_part('parts/perks') ?>
   <?=get_template_part('parts/content-rows', null, ['class' => 'even'])?>
   <?= get_template_part('parts/organizations') ?>
   <?= get_template_part('parts/testimonials') ?>
   <?= get_template_part('parts/mobile') ?>

</main>

<?php get_footer() ?>