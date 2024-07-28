<?php
$rows = get_field('columns');
if ($rows) {
   ?>
   <section class="columns">
      <div class="content">
         <?php

         foreach ($rows as $row) {
            ?>
            <div class="column">
               <?=$row['content']?>
            </div>
            <?php
         }
         ?>
      </div>
   </section>
   <?php
}
?>