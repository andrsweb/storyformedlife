<?php
$navigate = get_field('navigate_items');
if ($navigate) {
   ?>
   <section class="navigate">

      <div class="space-holder">

         <div class="sticky">

            <?php
            if (get_field('content_rows_background')) {
               ?>
               <div class="background" style="background: url(<?= get_field('content_rows_background') ?>)"></div>
               <?php
            }
            ?>

            <div class="content">
               <div class="info-inset">

                  <div class="info">
                     <div class="info-wrapper">
                        <?= get_field('navigate_content') ?>
                     </div>
                  </div>
                  <div class="stacks" id="stacks-view">
                     <div class="stacks-inset">
                        <?php
                        foreach ($navigate as $item) {
                           ?>
                           <div class="item">
                              <h4>
                                 <?= $item['title'] ?>
                              </h4>
                              <?= $item['text'] ?>
                           </div>
                           <?php
                        }
                        ?>
                     </div>
                  </div>

               </div>
            </div>

         </div>
      </div>
   </section>
   <?php
}
?>