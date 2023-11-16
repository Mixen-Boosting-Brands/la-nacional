	<footer class="py-100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-5">
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
                <div class="col-7 text-end">
                    <div class="row">
                        <div class="col-4 col-sm-6 col-md-3 offset-md-4 col-lg-3 offset-lg-5 col-xl-2 offset-xl-7 col-xxl-2 offset-xxl-6 my-auto text-end">
                            <p
                                class="mb-0"
                                data-aos="fade-up"
                                data-aos-delay="750"
                            >
                                Síguenos
                            </p>
                        </div>
                        <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 col-xxl-3 my-auto">
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
                                <li
                                    class="list-inline-item"
                                    data-aos="fade-up"
                                    data-aos-delay="1500"
                                >
                                    <a href="https://www.tiktok.com/@lanacionalcremeria" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
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
    <div class="modal modal-producto fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col mb-3">
                                <h3 class="modal-title text-uppercase"></h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <img alt="" class="thumbnail img-fluid">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="gramaje"></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Ingredientes: <span class="ingredientes"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-video fade" id="modal-video" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="ratio ratio-16x9">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/XEpKKUTVHX8?si=oTGeYijaOYW0jop-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php wp_footer(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/3f523b35138bc009c0e0.app.bundle.js"></script>

	<script>
        $("#modal-video").on('hidden.bs.modal', function (e) {
            $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));
        });
    </script>
    
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
