<?php
$topics = get_field('topics');
if ($topics) {
   ?>
   <section class="topics">
      <div class="space-holder">
         <div class="sticky">
            <div class="horizontal">
               <div class="topic-list">
                  <?php
                  foreach ($topics as $item) {
                     ?>
                     <div class="topic" data-sal="fade" data-sal-duration="500">
                        <div class="image">
                           <img src="<?= $item['image'] ?>" alt="">
                        </div>
                        <div class="info">
                           <div class="info-inset">
                              <?= $item['content'] ?>
                           </div>
                        </div>
                     </div>
                     <?php
                  }
                  ?>
                  <div class="last-spacer"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php
}
?>