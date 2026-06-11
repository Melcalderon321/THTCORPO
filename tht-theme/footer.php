<!-- Footer -->
<footer class="py-20 px-6 footer-bg-wrapper relative text-white font-poppins text-center md:text-left">
    <div class="footer-wing-accent left-wing"></div>
    <div class="footer-wing-accent right-wing"></div>

    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-20 items-start justify-items-center text-left">

            <!-- Column 1: Description -->
            <div class="space-y-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-footer.png" alt="THT Corporation"
                    class="h-20 w-auto mb-4 object-contain">
                <p class="text-sm leading-relaxed text-white/90">
                    Somos pioneros en la industria digital, y nuestro know-how es el resultado de dos décadas de
                    experiencia, dedicación y evolución constante.
                </p>
                <p class="text-sm leading-relaxed text-white/90">
                    THT Corporation es un ecosistema donde la sinergia entre nuestras marcas genera un valor que va
                    más allá de lo convencional.
                </p>
            </div>

            <!-- Column 2: Contact -->
            <div>
                <h4 class="font-bold mb-6 text-sm">Contáctanos</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span>+54 9 2612712289</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>info@thtcorporation.com</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Workplace Palmares <br> Ruta Panamericana 2650, <br> Godoy Cruz, Mendoza,
                            Argentina.</span>
                    </li>
                </ul>
                <div class="flex gap-4 mt-6">
                    <a href="#" class="hover:text-blue-200 transition-colors"><svg class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg></a>
                    <a href="#" class="hover:text-blue-200 transition-colors flex items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-instagram.png" alt="Instagram"
                            class="w-5 h-5 object-contain">
                    </a>
                    <a href="#" class="hover:text-blue-200 transition-colors flex items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-facebook.png" alt="Facebook"
                            class="w-5 h-5 object-contain">
                    </a>
                </div>
            </div>

            <!-- Column 3: Links -->
            <div>
                <h4 class="font-bold mb-6 text-sm">Caso de Éxito</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="#" class="hover:text-blue-200 transition-colors">Institucional</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors">Empresas</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors">Talento Humano</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition-colors">Contacto</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="text-center pt-8 mt-8 border-t border-white/10">
            <p class="text-xs text-white/60">Diseño y desarrollo web realizado por Tehuentec by THT Corporation</p>
        </div>
    </div>
</footer>

<!-- Modal de Postulación -->
<div id="join-modal" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300">
    <div class="glass-card max-w-lg w-full p-8 relative border-white/10 mx-4 transform scale-95 transition-all duration-300 overflow-y-auto max-h-[90vh]" id="join-modal-container">
        <!-- Botón Cerrar -->
        <button id="close-modal-btn" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors p-2" aria-label="Cerrar modal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Contenido Modal -->
        <div id="modal-form-content">
            <h3 class="text-3xl font-bold text-white mb-2 font-poppins">Únete al equipo</h3>
            <p class="text-gray-400 text-sm mb-6 font-inter">Completa tus datos para postularte a nuestras búsquedas activas y formar parte de THT Corporation.</p>
            
            <form id="join-team-form" class="space-y-6">
                <!-- Nombre y Apellido -->
                <div class="space-y-2">
                    <label class="text-xs font-medium uppercase tracking-widest text-gray-500 block">Nombre y apellido</label>
                    <input type="text" name="nombre" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-blue-500 outline-none transition-all font-inter placeholder-gray-600"
                        placeholder="Tu nombre completo">
                </div>

                <!-- Email -->
                <div class="space-y-2">
                    <label class="text-xs font-medium uppercase tracking-widest text-gray-500 block">Email</label>
                    <input type="email" name="email" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-blue-500 outline-none transition-all font-inter placeholder-gray-600"
                        placeholder="tu@correo.com">
                </div>

                <!-- Teléfono -->
                <div class="space-y-2">
                    <label class="text-xs font-medium uppercase tracking-widest text-gray-500 block">Teléfono</label>
                    <input type="tel" name="telefono" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-blue-500 outline-none transition-all font-inter placeholder-gray-600"
                        placeholder="Número de contacto">
                </div>



                <!-- Adjuntar CV -->
                <div class="space-y-2">
                    <label class="text-xs font-medium uppercase tracking-widest text-gray-500 block">Adjuntar CV</label>
                    <div id="cv-dropzone" class="border-2 border-dashed border-white/10 hover:border-blue-500 rounded-xl p-6 text-center cursor-pointer transition-all bg-white/5 flex flex-col items-center justify-center gap-2">
                        <input type="file" id="cv-file" name="cv" accept=".pdf,.doc,.docx" required class="hidden">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <div class="text-sm text-gray-300 font-inter">
                            <span class="font-semibold text-blue-500">Haz clic para subir</span> o arrastra tu archivo aquí
                        </div>
                        <p class="text-xs text-gray-500 font-inter">PDF, DOC, DOCX (Máx. 5MB)</p>
                        <!-- File preview display -->
                        <div id="file-preview" class="hidden mt-2 p-2 bg-white/10 border border-white/20 rounded-lg flex items-center justify-between gap-4 w-full">
                            <span id="file-name" class="text-xs text-white truncate max-w-[80%] font-inter"></span>
                            <button type="button" id="remove-file-btn" class="text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enviar -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium py-4 rounded-xl transition-all shadow-lg hover:shadow-blue-600/30 tracking-widest text-xs">
                    Enviar postulación
                </button>
            </form>
        </div>

        <!-- Pantalla de Éxito -->
        <div id="modal-success-content" class="hidden flex flex-col items-center justify-center text-center py-10">
            <div class="w-16 h-16 bg-blue-500/10 border border-blue-500/30 rounded-full flex items-center justify-center mb-6">
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-3xl font-bold text-white mb-2 font-poppins">¡Postulación Enviada!</h3>
            <p class="text-gray-400 text-sm max-w-sm font-inter">Hemos recibido tu currículum. Si tu perfil se adapta a alguna de nuestras vacantes, te contactaremos pronto.</p>
            <button id="success-close-btn" class="mt-8 px-8 py-3 bg-blue-600 hover:bg-blue-500 text-white font-medium rounded-xl transition-all tracking-wider text-xs uppercase">
                Entendido
            </button>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script>
    gsap.registerPlugin(ScrollTrigger);

        // All scripts from index.html here...
        // [Scripts truncated for brevity in this tool call, but will be fully implemented]
        <?php include(get_template_directory() . '/inline-scripts.js'); ?>
</script>
</body>

</html>