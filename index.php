<?php get_header(); ?> 

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

    <!-- section
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
