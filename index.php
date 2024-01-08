<?php

get_header(); ?>

<main class="content">

	<?php if ( have_rows( 'flexible_content' ) ): ?>

		<?php while ( have_rows( 'flexible_content' ) ): the_row(); ?>

			<?php get_template_part( 'template-parts/flexible/flexible', get_row_layout() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer();
