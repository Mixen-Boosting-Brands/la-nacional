<?php get_header(); ?> 

    <section id="nosotros" class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h1
                        data-aos="fade-right"
                    >
                        <?php bloginfo( 'name' ); ?>; <span class="texto-secundario">Tradición.</span>
                    </h1>
                    <p
                        data-aos="fade-right"
                        data-aos-delay="100"
                    >
                        Cada uno de nuestros productos ofrece un sabor que nos enorgullece y hace una invitación a descubrir una tradición chihuahuense.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 my-auto">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/foto-nosotros.jpg"
                        alt=""
                        class="img-fluid"
                        data-aos="fade-right"
                        data-aos-delay="200"
                    >
                </div>
                <div class="col-xl-4 my-auto">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                <p
                                    class="fondo-azul d-block"
                                    data-aos="zoom-in"
                                    data-aos-delay="800"
                                >
                                    <?php bloginfo( 'name' ); ?> Alimentos es creada por una familia apasionada por su país y por su tierra. Dedicada durante más de 40 años a la producción de leche y al cultivo de cereales para la alimentación de su ganado criado con el más meticuloso cuidado, convirtiéndolo en el primer eslabón de una cadena que celebra la excelencia y dedicación en cada paso.
                                </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a
                                        href="javascript:void(0)"
                                        class="btn btn-primary mt-4 mb-0 my-xl-4"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-video"
                                        data-aos="zoom-in"
                                        data-aos-delay="900"
                                    >
                                        Conoce la esencia de La Nacional Alimentos
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="esto-es-la-nacional" class="descanso-1">
        <div
            class="video-container"
            data-aos="zoom-in"
            data-aos-delay="250"
        >
            <video class="object-fit-contain" autoplay muted loop>
                <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/descanso.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay">
                <!-- h1>Esto es <?php bloginfo( 'name' ); ?></h1 -->
            </div>
        </div>
    </section>

    <section id="nuestros-productos" class="pt-100 pb-30">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1
                        data-aos="fade-up"
                    >
                        Nuestras <span class="texto-secundario">marcas.</span>
                    </h1>
                    <p
                        class="fondo-azul my-4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        Elige la marca de tu preferencia
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-6 my-auto">
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
                <div class="col-6 my-auto">
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
            </div>
        </div>
    </section>

    <section id="encuentranos" class="pt-30 pb-100">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 my-auto text-center">
                    <h1
                        data-aos="fade-up"
                    >
                        Encuéntranos <span class="texto-secundario">aquí.</span>
                    </h1>
                    <p
                        class="fondo-azul my-4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        Sucursales que han confiado en nosotros
                    </p>
                </div>
                <div class="col-lg-8 my-auto text-center">
                    <div class="row">
                        <div class="col-12">
                            <!-- Slider main container -->
                            <div class="swiper swiper-encuentranos-top">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">Slide 1</div>
                                    <div class="swiper-slide">Slide 2</div>
                                    <div class="swiper-slide">Slide 3</div>
                                    <div class="swiper-slide">Slide 4</div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                </div>

                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Slider main container -->
                            <div class="swiper swiper-encuentranos-bottom">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">Slide 1</div>
                                    <div class="swiper-slide">Slide 2</div>
                                    <div class="swiper-slide">Slide 3</div>
                                    <div class="swiper-slide">Slide 4</div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                </div>

                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8953.811618197215!2d-106.51169491559878!3d30.486066645294017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e801e20241dd77%3A0x497ea7a4ea56fab5!2sLecher%C3%ADa%20KM222!5e0!3m2!1ses!2smx!4v1697831127045!5m2!1ses!2smx"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            data-aos="flip-up"
            data-aos-delay="250"
        ></iframe>
    </section>

    <?php include get_template_directory() . '/includes/contacto.php'; ?>

    <!-- section
        id="tradicion-chihuahuense"
        class="descanso-1"
        data-aos="fade-up"
    >
        <div class="overlay">
            <h1>
                <?php bloginfo( 'name' ); ?> es<br>
                <span class="texto-secundario">Tradición Chihuahuense</span>
            </h1>
        </div>
    </section -->

    <section class="descanso-2">
        <!-- img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sello.png"
            alt=""
            class="sello img-fluid"
            data-aos="flip-up"
            data-aos-delay="800"
        -->
        <div class="overlay">
            <div>
                <h1
                    data-aos="fade-right"
                >
                    <?php bloginfo( 'name' ); ?><br>
                    <!-- strong>
                        es <span>Nutrición.</span>
                    </strong -->
                </h1>
                <a href="#">
                    <p 
                        class="fondo-blanco"
                        data-aos="fade-left"
                    >
                        Más de 40 años de tradición
                    </p>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
