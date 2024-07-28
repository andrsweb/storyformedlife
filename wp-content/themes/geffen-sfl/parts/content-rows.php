<?php
$rows = get_field('content_rows');
if ($rows) {
   ?>
   <section class="content-rows <?=$args['class']?>">
      <?php

      foreach ($rows as $row) {

         $class = '';
         if (!$row['image_2']) {
            $class = 'single-image';
         }

         ?>
         <div class="row">
            <div class="content">
               <div class="images <?=$class?>">
                  <div class="image1 image" data-aos="fade-right" >
                     <img src="<?= $row['image_1'] ?>" alt="">
                  </div>
                  <?php
                  if ($row['image_2']) {
                     ?>
                     <div class="image2 image"  data-aos="fade-right" data-aos-delay="300">
                        <img src="<?= $row['image_2'] ?>" alt="">
                     </div>
                     <?php
                  }
                  ?>
               </div>
               <div class="inset-content" data-sal="fade">
                  <?=$row['content']?>
               </div>
            </div>
         </div>
         <?php
      }
      ?>
   </section>
   <?php
}
?>