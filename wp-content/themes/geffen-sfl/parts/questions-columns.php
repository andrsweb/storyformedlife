<?php
$columns = get_field('columns', 'options');
if ($columns) {
   ?>
   <section class="question-columns">
      <div class="content">
         <?php
         $i=0;
         foreach ($columns as $item) {
            ?>
            <div class="item"  data-sal="zoom-in" data-sal-duration="500">
               <h4>
                  <?= $item['title'] ?>
               </h4>
               <span> <?= $item['text'] ?></span>
               <?php
                  if($item['button']) {
                     ?>
                        <a href="<?=$item['button']['url']?>" class="button"><?=$item['button']['text']?></a>
                     <?php
                  }
               ?>
            </div>
            <?php
            $i++;
         }
         ?>
      </div>
   </section>
   <?php
}
?>