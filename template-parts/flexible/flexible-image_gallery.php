<?php
$text   = get_sub_field( 'image_gallery_text' );
$title  = get_sub_field( 'image_gallery_title' );
$images = get_sub_field( 'image_gallery_list' );
if ( ! $title && ! $text ) :
	return;
endif;
?>

<section class="gallery">
	<div class="container">
		<div class="gallery__row js-gallery-row">
			<div class="gallery__content">
				<?php if ( ! empty( $title ) ) : ?>
					<h2 class="gallery__title h2"><?php echo $title; ?></h2>
				<?php endif ?>

				<?php if ( ! empty( $text ) ) : ?>
					<div class="gallery__text"><?php echo $text; ?></div>
				<?php endif ?>

				<?php if ( $images ): ?>
					<div class="gallery__navigation">
						<button class="swiper-button-prev">
							<img src="<?php echo get_theme_file_uri() . '/assets/img/left.svg'; ?>"
							     alt="left">
						</button>
						<button class="swiper-button-next">
							<img src="<?php echo get_theme_file_uri() . '/assets/img/right.svg'; ?>"
							     alt="right">
						</button>
					</div>
				<?php endif ?>
			</div>
			<?php
			if ( $images ): ?>
				<div class="gallery__slider js-slider-gallery swiper">
					<div class="swiper-wrapper" centered-slides="true" navigation="true">
						<?php foreach ( $images as $image ): ?>
							<div class="gallery__slider-item swiper-slide">
								<div class="gallery__item">
									<img src="<?php echo esc_url( $image['url'] ); ?>"
									     alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
