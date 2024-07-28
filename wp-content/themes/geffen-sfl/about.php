<?php
/* Template Name: About */
get_header();
?>


<main class="home">

  <?= get_template_part('parts/hero') ?>
  <div class="content">
    <section class="page-wrapper">

      <div class="text-view">
        <?php the_field('text_content'); ?>
      </div>

    </section>
  </div>
  <?= get_template_part('parts/content-rows') ?>
  <?= get_template_part('parts/full-section') ?>

</main>

<?php get_footer() ?>