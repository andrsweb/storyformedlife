<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

 <?= get_template_part('parts/hero-text', null, ['class' => 'min']) ?>
   <div class="content">
      <section class="page-wrapper">

         <div class="text-view">
            <?php the_content(); ?>
         </div>

      </section>
   </div>

<?php get_footer(); ?>

