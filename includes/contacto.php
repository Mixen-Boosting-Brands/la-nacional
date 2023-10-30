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