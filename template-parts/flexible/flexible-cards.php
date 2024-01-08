<?php
$title = get_sub_field( 'cards_title' );
$cards = get_sub_field( 'cards_list' );
if ( ! $title && ! $cards ) :
	return;
endif;
?>

<section class="cards">
	<div class="container">
		<div class="cards__row">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="cards__title h2"><?php echo $title; ?></h2>
			<?php endif ?>
			<?php if ( $cards ): ?>
				<div class="cards__list js-cards-list">
					<?php foreach ( $cards as $item ):
						$title = $item['item_title'];
						$title_with_font_weight = $item['item_font_weight'] == 'bold'
							? '<strong>' . $item['item_title'] . '</strong>'
							: $item['item_title'];
						$description = $item['item_text'];
						$image = $item['item_image'];
						$link = $item['item_link'];
						if ( ! $title && ! $description && ! $image && ! $link ) :
							continue;
						endif; ?>
						<div class="cards__item js-cards-item">

							<?php if ( $image ): ?>
								<div class="cards__item-image">
									<img src="<?php echo $image['url']; ?>"
									     alt="<?php echo $image['alt']; ?>"
									     width="68"
									     height="56">
								</div>
							<?php endif; ?>

							<?php if ( ! empty( $title ) ) : ?>
								<h3 class="cards__item-title h3"><?php echo $title_with_font_weight; ?></h3>
							<?php endif ?>

							<?php if ( ! empty( $description ) ) : ?>
								<div class="cards__item-description"><?php echo $description; ?></div>
							<?php endif ?>

							<?php if ( ! empty( $link ) ) : ?>
								<a class="cards__item-link btn btn-link"
								   href="<?php echo esc_url( $link ); ?>"
								   target="_blank">
									<?php _e( 'Learn more', 'theme' ); ?>
									<img src="<?php echo get_theme_file_uri() . '/assets/img/link.svg'; ?>"
									     alt="link">
								</a>
							<?php endif ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
</section>
