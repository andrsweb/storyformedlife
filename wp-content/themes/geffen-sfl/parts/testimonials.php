<?php

$query = [
   'post_type' => 'testimonial',
   'posts_per_page' => -1
];

if (get_field('testimonials_category', get_the_ID())) {
   $query['tax_query'] = array(
      array(
         'taxonomy' => 'testimonial_category',
         'field' => 'id',
         'terms' => get_field('testimonials_category', get_the_ID()),
      )
   );
}

// The Query
$the_query = new WP_Query($query);

// The Loop
if ($the_query->have_posts()) {
   ?>
   <section class="testimonials">

      <div class="content">
         <h4>
            <?php
               $title = 'What they say';
               if(get_field('testimonials_title', get_the_ID())) {
                  $title = get_field('testimonials_title');
               }
               echo $title;
            ?>
         </h4>


         <div class="slider">

            <?php
               if($the_query->found_posts > 3) {
            ?>
            <i class="icon-arrow-left"></i>
            <i class="icon-arrow-right"></i>

            <?php } ?>

            <div class="swiper-container">


               <div class="swiper-wrapper">

                  <?php
                  while ($the_query->have_posts()) {
                     $the_query->the_post();
                     ?>
                     <div class="swiper-slide">
                        <div class="item">

                           <?php
                           if (get_field('picture')) {
                              $avatar = get_field('picture');
                              ?>
                              <div class="avatar-wrapper">
                                 <div class="avatar">
                                    <img src="<?= $avatar['sizes']['thumbnail'] ?>" alt="">
                                 </div>
                              </div>
                              <?php
                           }
                           ?>

                           <blockquote>
                              <?php the_content() ?>
                           </blockquote>
                           <h5>
                              <?php the_title() ?>
                           </h5>
                           <?php
                           if (get_field("role")) {
                              ?>
                              <span>
                                 <?= get_field('role') ?>
                              </span>
                              <?php
                           }
                           ?>
                        </div>
                     </div>
                     <?php
                  }
                  ?>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </section>
   <?php
}
wp_reset_postdata();
?>