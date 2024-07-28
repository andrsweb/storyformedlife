<section class="hero <?=$args['class']?>">
   <div class="background">
      <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
   </div>
   <div class="info">
      <div class="content">
         <div class="content-wrapper">
            <h1><?php the_title() ?></h1>
         </div>
      </div>
   </div>
</section>