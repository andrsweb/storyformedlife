<?php
$rows = get_field('content_rows');
if ($rows) {
   ?>
   <section class="content-rows <?=$args['class']?>">
      <?php
      foreach ($rows as $row) {
         ?>
         <div class="row">
            <div class="content">
               <div class="images">
                  <div class="image1">
                     <img src="<?= $row['image_1'] ?>" alt="">
                  </div>
                  <?php
                  if ($row['image_2']) {
                     ?>
                     <div class="image2">
                        <img src="<?= $row['image_2'] ?>" alt="">
                     </div>
                     <?php
                  }
                  ?>
               </div>
               <div class="inset-content">
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