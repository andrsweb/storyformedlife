<?php
$perks = get_field('perks_copy', 'options');
if ($perks) {
   ?>
   <section class="perks">
      <div class="content">
         <?php
         $i = 0;
         foreach ($perks as $perk) {
            ?>
            <div class="item"   data-sal="fup" data-sal-delay="<?=$i*200?>">
                  <div class="icon">
                    <div class="icon-inset">
                      <img src="<?= $perk['icon'] ?>" alt="">
                    </div>
                  </div>
                  <div class="info">
                     <h4>
                        <?= $perk['title'] ?>
                     </h4>
                     <h5>
                        <?= $perk['subtitle'] ?>
                     </h5>
                  </div>
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