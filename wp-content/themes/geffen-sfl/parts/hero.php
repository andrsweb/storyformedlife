<section class="hero <?=$args['class']?>">
   <div class="background">
      <img src="<?= get_field('hero_background') ?>" alt="">
   </div>
   <div class="info">
      <div class="content">
         <div class="content-wrapper" data-sal="fup" data-sal-duration="500">
            <?= get_field('hero_content') ?>
         </div>
      </div>
   </div>
</section>