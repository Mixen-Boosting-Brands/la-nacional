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
					<?php the_content(); // Dynamic Content. ?>

					<?php the_category( ', ' ); // Separated by commas. ?> <?php the_tags( __( 'Etiquetas: ', 'html5blank' ), ', ', '<br>' ); // Separated by commas with a line break at the end. ?>

					<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
