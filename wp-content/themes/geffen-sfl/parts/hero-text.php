<?php

/**
 * Hero text part.
 */

$hero_text = get_field( 'text_under_the_title' );
?>

<section class="hero <?= $args['class'] ?? '' ?>">
	<div class="background">
		<img src="<?= get_the_post_thumbnail_url() ?>" alt="">
	</div>
	<div class="info">
		<div class="content">
			<div class="content-wrapper">
				<h1><?php the_title() ?></h1>

				<?php if( $hero_text ) echo $hero_text ?>
			</div>
		</div>
	</div>
</section>