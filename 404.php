<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php esc_html_e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php get_header(); ?>

	<section class="py-60">
		<div class="container text-center">
			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
			<div class="row">
				<div class="col">
					<?php the_post_thumbnail(array('class' => 'img-fluid')); ?>
				</div>
			</div>
			<?php endif; ?>
			<div class="row">
				<div class="col">
					<h1><?php esc_html_e( 'Error 404: Página no encontrada', 'html5blank' ); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p>La página que solicitas no existe o probablemente cambió de lugar.</p>
					<a href="<?php echo esc_url( home_url() ); ?>" class="btn btn-primary">
						Regresar al inicio	
					</a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>