<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' - '; } ?><?php bloginfo( 'name' ); ?></title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/safari-pinned-tab.svg" color="#0c3556">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="msapplication-TileColor" content="#0c3556">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">
</head>
<body>
    <div id="backdrop"></div>
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fa-solid fa-xmark"></i>
        </a>
        <div class="menu-contenido">
            <a class="anchor" id="btn-logo" href="<?php echo esc_url( home_url() ); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="">
            </a>
            <nav class="mt-5">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a id="btn-nav-1" href="<?php echo esc_url( home_url() ); ?>">
                            <span>01</span> Inicio
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-2" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nosotros">
                            <span>02</span> Nosotros
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-3" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#esto-es-la-nacional">
                            <span>03</span> Experiencia Nacional
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-4" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nuestros-productos">
                            <span>04</span> Productos
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-5" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#contacto">
                            <span>05</span> Contacto
                        </a>
                    </li>
                </ul>
            </nav>
            <div id="divisor">
                <hr>
            </div>
            <div id="contacto-menu">
                <address
                    data-aos="fade-up"
                >
                    Carretera Panamericana Km. 222<br>
                    Ahumada, Chihuahua, México<br>
                    C.P. 32800
                </address>
                <ul class="list-unstyled mt-1 mb-5 my-lg-1">
                    <li
                        data-aos="fade-up"
                        data-aos-delay="250"
                    >
                        <a href="tel:+526566820414">
                            <i class="fa-solid fa-phone"></i> +52 (656) 682 0414
                        </a>
                    </li>
                    <li
                        data-aos="fade-up"
                        data-aos-delay="500"
                    >
                        <a href="mailto:ventas@lanacional.me">
                            <i class="fa-solid fa-envelope"></i> ventas@lanacional.me
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-4 my-auto">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="" class="logo img-fluid" id="logo-navbar">
                    </a>
                </div>
                <div class="col-8 my-auto text-end">
                    <a id="mburger" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

	<section id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Slider main container -->
                    <div class="swipers swiper-jumbotron">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
						<?php for($i = 1; $i <= 3; $i++): if( have_rows('slide_' . $i, 2) ): while( have_rows('slide_' . $i, 2) ): the_row(); ?>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="slide slide-<?php echo $i; ?>" style="background: url('<?php echo get_sub_field('imagen'); ?>');">
                                    <div class="overlay">
                                        <div>
                                            <h1
                                                data-aos="fade-right"
                                            >
                                                <?php echo get_sub_field('texto_renglon_1'); ?><br>
                                                <strong>
													<?php echo get_sub_field('texto_renglon_2'); ?>
                                                </strong>
                                            </h1>
                                            <p
                                                class="fondo-azul"
                                                data-aos="fade-left"
                                            >
												<?php echo get_sub_field('texto_renglon_3'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; endif; endfor; ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
