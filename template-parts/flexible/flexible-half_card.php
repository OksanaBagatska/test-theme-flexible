<?php
$title            = get_sub_field( 'half_card_title' );
$text             = get_sub_field( 'half_card_text' );
$image            = get_sub_field( 'half_card_image' );
$image_position   = get_sub_field( 'half_card_position' ) == 'left' ? '' : 'half-card__row--left';
$primary_button   = get_sub_field( 'half_card_primary_button' );
$secondary_button = get_sub_field( 'half_card_second_button' );
if ( $primary_button ):
	$primary_button_url    = $primary_button['url'];
	$primary_button_title  = $primary_button['title'];
	$primary_button_target = $primary_button['target'] ? $primary_button['target'] : '_self';
endif;
if ( $secondary_button ):
	$secondary_button_url    = $secondary_button['url'];
	$secondary_button_title  = $secondary_button['title'];
	$secondary_button_target = $secondary_button['target'] ? $secondary_button['target'] : '_self';
endif;
if ( ! $title && ! $text && ! $image ) :
	return;
endif;
?>

<section class="half-card">
	<div class="container">
		<div class="half-card__row <?php echo $image_position; ?>">
			<div class="half-card__content">
				<?php if ( ! empty( $title ) ) : ?>
					<h2 class="half-card__title h2"><?php echo $title; ?></h2>
				<?php endif ?>

				<?php if ( ! empty( $text ) ) : ?>
					<div class="half-card__description"><?php echo $text; ?></div>
				<?php endif ?>

				<div class="half-card__navigation">
					<?php if ( ! empty( $primary_button ) ) : ?>
						<a class="half-card__button btn btn-primary"
						   href="<?php echo esc_url( $primary_button_url ); ?>"
						   target="<?php echo esc_attr( $primary_button_target ); ?>">
							<?php echo esc_html( $primary_button_title ); ?>
						</a>
					<?php endif ?>
					<?php if ( ! empty( $secondary_button ) ) : ?>
						<a class="half-card__button btn btn-secondary"
						   href="<?php echo esc_url( $secondary_button_url ); ?>"
						   target="<?php echo esc_attr( $secondary_button_target ); ?>">
							<?php echo esc_html( $secondary_button_title ); ?>
						</a>
					<?php endif ?>
				</div>
			</div>
			<div class="half-card__img">
				<?php if ( $image ): ?>
					<img src="<?php echo $image['url']; ?>"
					     alt="<?php echo $image['alt']; ?>"
					     width="555"
					     height="418">
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
