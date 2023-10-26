<?php get_header(); ?>

    <section class="category py-60">
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
                            <button
                                class="nav-link"
                                id="nav-chihuahua-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-chihuahua"
                                type="button"
                                role="tab"
                                aria-controls="nav-chihuahua"
                                aria-selected="false"
                                data-aos="fade-up"
                                data-aos-delay="300"
                            >
                                Chihuahua
                            </button>
                            <button
                                class="nav-link"
                                id="nav-gouda-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-gouda"
                                type="button"
                                role="tab"
                                aria-controls="nav-gouda"
                                aria-selected="false"
                                data-aos="fade-up"
                                data-aos-delay="400"
                            >
                                Goudá
                            </button>
                            <button
                                class="nav-link"
                                id="nav-oaxaca-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-oaxaca"
                                type="button"
                                role="tab"
                                aria-controls="nav-oaxaca"
                                aria-selected="false"
                                data-aos="fade-up"
                                data-aos-delay="500"
                            >
                                Oaxaca
                            </button>
                            <button
                                class="nav-link"
                                id="nav-manchego-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-manchego"
                                type="button"
                                role="tab"
                                aria-controls="nav-manchego"
                                aria-selected="false"
                                data-aos="fade-up"
                                data-aos-delay="600"
                            >
                                Manchego
                            </button>
                            <button
                                class="nav-link"
                                id="nav-panela-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-panela"
                                type="button"
                                role="tab"
                                aria-controls="nav-panela"
                                aria-selected="false"
                                data-aos="fade-up"
                                data-aos-delay="700"
                            >
                                Panela
                            </button>
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

    <section id="nosotros" class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h1
                        data-aos="fade-right"
                    >
                        <?php bloginfo( 'name' ); ?> es <span class="texto-rojo">Tradición.</span>
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
                <div class="col-xl-4 my-auto position-relative">
                    <p
                        class="fondo-azul d-block"
                        data-aos="zoom-in"
                        data-aos-delay="800"
                    >
                        <?php bloginfo( 'name' ); ?> Alimentos es creada por una familia apasionada por su país y por su tierra. Dedicada durante más de 40 años a la producción de leche y al cultivo de cereales para la alimentación de su ganado criado con el más meticuloso cuidado, convirtiéndolo en el primer eslabón de una cadena que celebra la excelencia y dedicación en cada paso.
                    </p>
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
                        Elige el producto de tu preferencia
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-6 my-auto">
                    <a href="<?php echo get_category_link( 2 ); ?>">
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
                    <a href="<?php echo get_category_link( 3 ); ?>">
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

    <section id="contacto" class="py-60">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h1
                        data-aos="fade-up"
                    >
                        Estamos para <span class="texto-rojo">ayudarte.</span>
                    </h1>
                    <p
                        class="fondo-azul my-4"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        Déjanos tus datos, te contactaremos pronto
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                    <div id="form-messages"></div>
                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                    <form 
                        action="mailer.php"
                        method="POST"
                        class="row g-3 needs-validation"
                        id="ajax-contact"
                        novalidate
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >
                        <div class="col-md-6 form-floating">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="nombre"
                                name="nombre"
                                placeholder="Nombre*"
                                pattern=".{5,50}"
                                required
                            >
                            <label for="nombre" class="form-label">Nombre*</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu nombre completo.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="email"
                                class="form-control shadow-none"
                                id="correo"
                                name="correo"
                                placeholder="Correo electrónico*"
                                required
                            >
                            <label for="correo" class="form-label">Correo electrónico*</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce un correo electrónico válido.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input
                                type="tel"
                                class="form-control shadow-none"
                                id="telefono"
                                name="telefono"
                                placeholder="Teléfono"
                                pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                            >
                            <label for="correo" class="form-label">Teléfono</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor escribe un número de teléfono válido (Ej: 6141234567).
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <select class="form-control form-select" id="asunto" name="asunto" aria-label="Selecciona una opción*" required onchange="otroCheck(this);">
                                <option selected disabled value="">Seleccionar</option>
                                <option value="Recursos humanos">Recursos humanos</option>
                                <option value="Ventas">Ventas</option>
                                <option value="Comentarios y sugerencias">Comentarios y sugerencias</option>
                            </select>
                            <label for="asunto">Selecciona una opción</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor selecciona una opción.
                            </div>
                        </div>
                        <div class="col-12 form-floating">
                            <textarea
                                class="form-control shadow-none"
                                id="mensaje"
                                name="mensaje"
                                placeholder="Mensaje*"
                                style="height: 100px"
                                required
                            ></textarea>
                            <label for="mensaje">Mensaje*</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu mensaje.
                            </div>
                        </div>
                        <div class="col-12">
                            <button
                                type="submit"
                                class="btn btn-primary btn-block mb-4 mb-lg-0"
                            >
                                Envía tu mensaje
                            </button>
                            <div id="hold-on-a-sec">
                                <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> Espera un momento por favor...
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 my-auto text-center">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-la-nacional.png"
                        alt=""
                        class="img-fluid my-4 my-lg-0"
                        data-aos="fade-up"
                        data-aos-delay="800"
                    >
                </div>
            </div>
        </div>
    </section>

    <section
        id="tradicion-chihuahuense"
        class="descanso-1"
        data-aos="fade-up"
    >
        <div class="overlay">
            <h1>
                <?php bloginfo( 'name' ); ?> es<br>
                <span class="texto-rojo">Tradición Chihuahuense</span>
            </h1>
        </div>
    </section>

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
                    <strong>
                        es <span>Nutrición.</span>
                    </strong>
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
