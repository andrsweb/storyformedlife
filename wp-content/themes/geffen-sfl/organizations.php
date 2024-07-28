<?php
/* Template Name: Organizations */
get_header();
?>


<main class="home">


  <?= get_template_part('parts/hero') ?>

  <?= get_template_part('parts/content-rows') ?>
  <?= get_template_part('parts/perks') ?>
  <?php
  get_template_part(
    'parts/testimonials',
    null,
    array(
      'testimonials_slug' => 'organizations'
    )
  )
    ?>
  <?= get_template_part('parts/mobile') ?>

</main>

<?php get_footer() ?>