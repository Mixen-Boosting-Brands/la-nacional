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