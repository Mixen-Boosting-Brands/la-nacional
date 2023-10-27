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
				<ul>
					<?php
					$tags = get_tags();
					if ( $tags ) :
						foreach ( $tags as $tag ) : ?>
							<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
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
									<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
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
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span class="badge text-bg-danger">-50%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Chihuahua 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <span class="badge text-bg-primary">-10%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Goudá 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Oaxaca 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="400"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Manchego 227 g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-chihuahua" role="tabpanel" aria-labelledby="nav-chihuahua-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span class="badge text-bg-danger">-50%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Chihuahua 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <span class="badge text-bg-primary">-10%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Chihuahua 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Chihuahua 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="400"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Chihuahua 227 g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-gouda" role="tabpanel" aria-labelledby="nav-gouda-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span class="badge text-bg-danger">-50%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Goudá 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <span class="badge text-bg-primary">-10%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Goudá 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Goudá 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="400"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Goudá 227 g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-oaxaca" role="tabpanel" aria-labelledby="nav-oaxaca-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span class="badge text-bg-danger">-50%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Oaxaca 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <span class="badge text-bg-primary">-10%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Oaxaca 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Oaxaca 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="400"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Oaxaca 227 g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-manchego" role="tabpanel" aria-labelledby="nav-manchego-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span class="badge text-bg-danger">-50%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Manchego 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <span class="badge text-bg-primary">-10%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Manchego 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Manchego 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="400"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Manchego 227 g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-panela" role="tabpanel" aria-labelledby="nav-panela-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span class="badge text-bg-danger">-50%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                          <p class="card-text">Panela 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        <span class="badge text-bg-primary">-10%</span>
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Panela 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Panela 227 g</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div
                                        class="card"
                                        data-aos="fade-up"
                                        data-aos-delay="400"
                                    >
                                        <div class="card-img-top">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumb-producto-4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Panela 227 g</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
