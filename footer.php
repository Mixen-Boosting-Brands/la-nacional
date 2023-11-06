	<footer class="py-100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <address
                        data-aos="fade-up"
                    >
                        Carretera Panamericana Km. 222<br>
                        Ahumada, Chihuahua, México<br>
                        C.P. 32800
                    </address>
                    <ul class="list-unstyled my-5">
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
                <div class="col-6 text-end">
                    <div class="row">
                        <div class="col-5 col-sm-6 col-md-3 offset-md-5 col-lg-3 offset-lg-6 col-xl-2 offset-xl-7 col-xxl-2 offset-xxl-7 my-auto text-end">
                            <p
                                class="mb-0"
                                data-aos="fade-up"
                                data-aos-delay="750"
                            >
                                Síguenos
                            </p>
                        </div>
                        <div class="col-7 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 my-auto">
                            <ul class="social list-inline mb-0">
                                <li
                                    class="list-inline-item"
                                    data-aos="fade-up"
                                    data-aos-delay="1000"
                                >
                                    <a href="https://www.instagram.com/lacteoslanacional" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li
                                    class="list-inline-item"
                                    data-aos="fade-up"
                                    data-aos-delay="1250"
                                >
                                    <a href="https://www.facebook.com/lacteoslanacional" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6 mb-4 my-sm-auto text-center text-sm-start">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png"
                            alt=""
                            class="img-fluid"
                            data-aos="zoom-in"
                            data-aos-delay="1500"
                        >
                    </a>
                </div>
                <div class="col-sm-6 my-auto text-center text-sm-end">
                    <p
                        class="mb-0"
                        data-aos="zoom-in"
                        data-aos-delay="1500"
                    >
                        &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados. | <a href="<?php echo esc_url( get_page_link( 3 ) ); ?>">Aviso de Privacidad</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a -->

    <!-- Modales -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3 class="modal-title text-uppercase"></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img alt="" class="thumbnail img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <p class="gramaje"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <p class="ingredientes"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php wp_footer(); ?>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.bundle.js"></script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XRNLKGCQF1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-XRNLKGCQF1');
	</script>
</body>
</html>
