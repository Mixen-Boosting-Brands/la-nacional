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

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css?ver=<?php echo rand(111, 999); ?>">
</head>
<body>
    <div class="redes-sociales">
        <ul class="list-unstyled mb-0">
            <li
                data-aos="fade-up"
                data-aos-delay="250"
            >
                <a href="https://www.instagram.com/lanacionalcremeria" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li
                data-aos="fade-up"
                data-aos-delay="500"
            >
                <a href="https://www.facebook.com/LaNacionalCremeria" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li
                data-aos="fade-up"
                data-aos-delay="750"
            >
                <a href="https://www.tiktok.com/@lanacionalcremeria" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </li>
        </ul>
    </div>

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
                            Inicio
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-2" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nosotros">
                            Nosotros
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-3" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#esto-es-la-nacional">
                            Experiencia
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-4" href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nuestros-productos">
                            Productos
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="btn-nav-5" href="#contacto">
                            Contacto
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
                    <nav class="d-none d-lg-block">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="<?php echo esc_url( home_url() ); ?>">
                                    Inicio
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nosotros">
                                    Nosotros
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#esto-es-la-nacional">
                                    Experiencia
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#nuestros-productos">
                                    Productos
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="anchor" href="#contacto">
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <a id="mburger" class="d-lg-none" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

	<section id="jumbotron">
        <!-- Slider main container -->
        <div class="swipers swiper-jumbotron">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <video id="video-quesos" class="object-fit-contain" autoplay playsinline muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/jumbotron-1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="swiper-slide">
                    <video id="video-leches" class="object-fit-contain" playsinline muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/jumbotron-2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
