<?php
/* Template Name: Contact */
get_header();
?>


<main class="home">

   <?= get_template_part('parts/hero', null, ['class' => 'min']) ?>
   <div class="content">
      <section class="page-wrapper">

         <div class="contact-view">
            <div class="info">
               <?=get_field('contact_content')?>
            </div>
           <?php /* <div class="form">
               <?=get_field('form')?>
            </div> */ ?>
         </div>

      </section>
   </div>

</main>

<?php get_footer() ?>