<?php get_header(); ?>

	<section class="py-60">
		<div class="container">
			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
			<div class="row">
				<div class="col">
					<?php the_post_thumbnail(array('class' => 'img-fluid')); ?>
				</div>
			</div>
			<?php endif; ?>
			<div class="row">
				<div class="col">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<?php esc_html_e( 'Por', 'html5blank' ); ?> <?php the_author_posts_link(); ?> <?php esc_html_e( 'a la(s)', 'html5blank' ); ?> <time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>"><?php the_date(); ?> <?php the_time(); ?></time>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<?php the_content(); // Dynamic Content. ?>

					<?php the_category( ', ' ); // Separated by commas. ?> <?php the_tags( __( 'Etiquetas: ', 'html5blank' ), ', ', '<br>' ); // Separated by commas with a line break at the end. ?>

					<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>

					<?php comments_template(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
