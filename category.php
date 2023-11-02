<?php get_header(); ?>

	<section id="productos-header" class="category py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1
                        data-aos="fade-up"
                    >
                        Nuestros <span class="texto-rojo">productos.</span>
                    </h1>
                    <p
                        class="fondo-azul my-4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        La razón de nuestra alta calidad
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <nav>
                        <div class="nav nav-pills" id="nav-tab" role="tablist">
                            <button
                                class="nav-link active"
                                id="nav-todos-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-todos"
                                type="button"
                                role="tab"
                                aria-controls="nav-todos"
                                aria-selected="true"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                Todos los productos
                            </button>
							<?php
								$tags = get_tags();
								if ( $tags ) :
							?>
								<?php $i = 3; foreach ( $tags as $tag ): ?>
									<button
										class="nav-link"
										id="nav-<?php echo esc_attr( $tag->slug ); ?>-tab"
										data-bs-toggle="tab"
										data-bs-target="#nav-<?php echo esc_attr( $tag->slug ); ?>"
										type="button"
										role="tab"
										aria-controls="nav-<?php echo esc_attr( $tag->slug ); ?>"
										aria-selected="false"
										data-aos="fade-up"
										data-aos-delay="<?php echo $i ?>00"
									>
										<?php echo esc_attr( $tag->name ); ?>
									</button>
								<?php $i++; endforeach; ?>
							<?php endif; ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

	<section id="productos" class="py-60">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="tab-content py-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-todos" role="tabpanel" aria-labelledby="nav-todos-tab" tabindex="0">
                            <div class="row">
                            <?php
                                // Argumentos
                                $args = array(
                                    'cat' => get_query_var('cat'),
                                    'post_type' => 'post',
                                    'posts_per_page' => -1
                                );

                                // Custom query
                                $custom_query = new WP_Query($args);
                            ?>
                            <?php if ($custom_query->have_posts()): $i = 1; while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="<?php echo $i; ?>00"
                                    >
                                    <?php if( have_rows('detalles_del_producto') ): while( have_rows('detalles_del_producto') ): the_row(); ?>
                                        <?php if( get_sub_field('indicador_de_descuento') ): ?>
                                        <span class="badge <?php if( get_sub_field('color_del_indicador_de_descuento') === 'Azul' ): ?>text-bg-primary<?php elseif( get_sub_field('color_del_indicador_de_descuento') === 'Rojo' ): ?>text-bg-danger<?php endif; ?>">
                                            <?php echo get_sub_field('descuento'); ?>
                                        </span>
                                        <?php endif; ?>
                                        <div class="card-img-top">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal" data-bs-titulo="<?php the_title(); ?>" data-bs-thumbnail="<?php the_post_thumbnail('thumb-producto', array('class' => 'img-fluid')); ?>" data-bs-gramaje="<?php if( get_sub_field('peso_del_producto') ): ?><?php echo get_sub_field('gramaje'); ?><?php endif; ?>" data-bs-ingredientes="<?php if( get_sub_field('ingredientes_del_producto') ): ?><?php echo get_sub_field('ingredientes'); ?><?php endif; ?>">
                                                <?php the_post_thumbnail('thumb-producto', array('class' => 'img-fluid')); ?>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                    <?php endwhile; endif; ?>
                                    </div>
                                </div>
                            <?php $i++; endwhile; ?>
                            <?php else : ?>
                                <div class="col text-center">
                                   <p>Lo sentimos, no hay nada para mostrar aquí todavía.</p>
                                </div>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                <?php
                    $tags = get_tags();
                    if ( $tags ) :
                ?>
                    <?php $i = 3; foreach ( $tags as $tag ): ?>
                        <div class="tab-pane fade" id="nav-<?php echo esc_attr( $tag->slug ); ?>" role="tabpanel" aria-labelledby="nav-<?php echo esc_attr( $tag->slug ); ?>-tab" tabindex="0">
                            <div class="row">
                            <?php
                                // Nombre de la etiqueta por la cual filtrar
                                $tag_name = $tag->slug;

                                // Argumentos
                                $args = array(
                                    'cat' => get_query_var('cat'),
                                    'post_type' => 'post',
                                    'posts_per_page' => -1,
                                    'tag' => $tag_name
                                );

                                // Custom query
                                $custom_query = new WP_Query($args);
                            ?>
                            <?php if ($custom_query->have_posts()): $i = 1; while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="<?php echo $i; ?>00"
                                    >
                                    <?php if( have_rows('detalles_del_producto') ): while( have_rows('detalles_del_producto') ): the_row(); ?>
                                        <?php if( get_sub_field('indicador_de_descuento') ): ?>
                                        <span class="badge <?php if( get_sub_field('color_del_indicador_de_descuento') === 'Azul' ): ?>text-bg-primary<?php elseif( get_sub_field('color_del_indicador_de_descuento') === 'Rojo' ): ?>text-bg-danger<?php endif; ?>">
                                            <?php echo get_sub_field('descuento'); ?>
                                        </span>
                                        <?php endif; ?>
                                        <div class="card-img-top">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal" data-bs-titulo="<?php the_title(); ?>" data-bs-thumbnail="<?php the_post_thumbnail('thumb-producto', array('class' => 'img-fluid')); ?>" data-bs-gramaje="<?php if( get_sub_field('peso_del_producto') ): ?><?php echo get_sub_field('gramaje'); ?><?php endif; ?>" data-bs-ingredientes="<?php if( get_sub_field('ingredientes_del_producto') ): ?><?php echo get_sub_field('ingredientes'); ?><?php endif; ?>">
                                                <?php the_post_thumbnail('thumb-producto', array('class' => 'img-fluid')); ?>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                    <?php endwhile; endif; ?>
                                    </div>
                                </div>
                            <?php $i++; endwhile; ?>
                            <?php else : ?>
                                <div class="col text-center">
                                   <p>Lo sentimos, no hay productos para mostrar aquí.</p>
                                </div>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php $i++; endforeach; ?>
                <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nuestros-productos" class="py-100">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1
                        data-aos="fade-up"
                    >
                        Nuestros <span class="texto-rojo">productos.</span>
                    </h1>
                    <p
                        class="fondo-azul my-4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        Explora nuestros demás productos
                    </p>
                </div>
            </div>
            <div class="row text-center">
            <?php if( is_category( '3' ) ): ?>
                <div class="col-12 my-auto">
                    <a href="<?php echo get_category_link( 2 ); ?>#productos-header">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-la-nacional.png"
                            alt=""
                            class="img-fluid"
                            data-aos="fade-right"
                            data-aos-delay="400"
                        >
                    </a>
                </div>
            <?php elseif( is_category( '2' ) ): ?>
                <div class="col-12 my-auto">
                    <a href="<?php echo get_category_link( 3 ); ?>#productos-header">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-proti.png"
                            alt=""
                            class="img-fluid"
                            data-aos="fade-left"
                            data-aos-delay="400"
                        >
                    </a>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include get_template_directory() . '/includes/contacto.php'; ?>

<?php get_footer(); ?>