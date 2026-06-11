<?php get_header(); ?>

<div class="absolute inset-0 z-0">
    <video autoplay muted loop playsinline class="w-full h-full object-cover">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video-custom.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black"></div>
</div>

<!-- Hero Section -->
<section id="inicio"
    class="min-h-screen pt-20 pb-8 px-6 flex flex-col items-center justify-center text-center relative overflow-hidden">
    <div
        class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-600/10 blur-[120px] rounded-full -z-10">
    </div>

    <div class="max-w-5xl w-full mx-auto relative z-10" id="hero-content">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/THT-blanco.png" alt="THT Logo"
            class="h-16 w-auto mx-auto mb-6 opacity-0 translate-y-4 reveal">

        <span class="section-badge mb-4 opacity-0 translate-y-4 reveal mx-auto">
            Holding tecnológico
        </span>
        <h1
            class="text-5xl md:text-7xl font-bold mb-4 leading-[1.05] opacity-0 translate-y-8 reveal tracking-normal text-center">
            <span class="text-white">20 años</span> <br class="md:hidden"> <span class="text-blue-500">impulsando
                la innovación global</span>
        </h1>
        <p class="text-white max-w-2xl mx-auto mb-6 opacity-0 translate-y-8 reveal text-lg text-center">
            Lideramos la transformation empresarial a través de tecnología propia y equipos de alto rendimiento en
            EE.UU, España, Argentina, Chile y Latam.
        </p>
        <div
            class="flex flex-col sm:flex-row gap-4 justify-center opacity-0 translate-y-8 reveal items-center font-inter font-medium">
            <a href="#unidades"
                class="px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white rounded-2xl transition-all shadow-[0_10px_30px_rgba(0,102,255,0.2)] hover:scale-105 flex items-center justify-center gap-2">
                Conocé nuestras empresas
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
            <a href="#nosotros"
                class="px-8 py-4 border border-blue-500 text-white rounded-2xl hover:bg-blue-500/10 transition-all flex items-center justify-center gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/play-icon-custom.png" alt="Play"
                    class="w-5 h-5 object-contain">
                Ver video institucional
            </a>
        </div>
    </div>

    <!-- Metrics -->
    <div
        class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4 max-w-3xl mx-auto w-full px-6 opacity-0 translate-y-12 reveal-stagger">
        <div
            class="glass-card p-4 py-6 flex flex-col items-center justify-center glow-hover group transition-all duration-500 border-white/5">
            <div class="flex items-baseline gap-1">
                <span class="text-4xl font-bold text-blue-500 mb-0 font-poppins counter" data-target="20">0</span>
            </div>
            <span class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.3em] mt-2">años de
                trayectoria</span>
        </div>
        <div
            class="glass-card p-4 py-6 flex flex-col items-center justify-center glow-hover group transition-all duration-500 border-white/5">
            <div class="flex items-baseline gap-1">
                <span class="text-4xl font-bold text-blue-500 font-poppins">+</span>
                <span class="text-4xl font-bold text-blue-500 mb-0 font-poppins counter" data-target="1500">0</span>
            </div>
            <span class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.3em] mt-2">Clientes
                potenciados</span>
        </div>
        <div
            class="glass-card p-4 py-6 flex flex-col items-center justify-center glow-hover group transition-all duration-500 border-white/5">
            <span class="text-4xl font-bold text-blue-500 mb-0 font-poppins counter" data-target="7">0</span>
            <span class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.3em] mt-2">Países</span>
        </div>
    </div>
</section>

<section id="unidades" class="py-32 px-6 max-w-7xl mx-auto">
    <div class="text-left mb-24 max-w-2xl">
        <span class="section-badge mb-6 reveal">Nuestras
            Unidades</span>
        <h2 class="text-5xl md:text-7xl font-bold mb-8 leading-tight tracking-normal">Un ecosistema de innovación
        </h2>
        <div class="w-20 h-2 bg-blue-600 rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Tehuentec -->
        <div class="unit-card reveal">
            <div class="unit-card-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-tehuentec-card.png" alt="Tehuentec"
                    class="h-14 w-auto mb-6 self-start object-contain unit-card-logo">
                <p class="unit-card-description">Agencia de marketing digital con presencia en EE. UU.,
                    Latinoamérica y España. Más de 20 años transformando marcas e impulsando su crecimiento global.
                </p>
                <div class="unit-card-link">
                    <span class="text-xs font-medium text-white tracking-[0.2em] flex items-center gap-2">Ver
                        más <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></span>
                </div>
            </div>
            <div class="unit-card-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/unit-tehuentec.jpg" class="unit-card-image"
                alt="Tehuentec">
        </div>

        <!-- Card 2: THT Ads -->
        <div class="unit-card reveal">
            <div class="unit-card-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-tht-ads-card.png" alt="THT Ads"
                    class="h-11 w-auto mb-6 self-start object-contain unit-card-logo">
                <p class="unit-card-description">Especialistas en Google Ads. Proveemos infraestructura y gestión
                    estratégica para publicidad de afiliados, operando cuentas MCC y líneas de crédito con foco en
                    escalabilidad y control total.</p>
                <div class="unit-card-link">
                    <span class="text-xs font-medium text-white tracking-[0.2em] flex items-center gap-2">Ver
                        más <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></span>
                </div>
            </div>
            <div class="unit-card-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/unit-ads.jpg" class="unit-card-image"
                alt="THT Ads">
        </div>

        <!-- Card 3: THT Devo -->
        <div class="unit-card reveal">
            <div class="unit-card-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-tht-devo-card.png" alt="THT Devo"
                    class="h-9 w-auto mb-6 self-start object-contain unit-card-logo">
                <p class="unit-card-description">Desarrollo de software avanzado y arquitectura de agentes con IA.
                    Soluciones orientadas a la automatización inteligente y la innovación tecnológica disruptiva.
                </p>
                <div class="unit-card-link">
                    <span class="text-xs font-medium text-white tracking-[0.2em] flex items-center gap-2">Ver
                        más <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></span>
                </div>
            </div>
            <div class="unit-card-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/unit-devo.jpg" class="unit-card-image"
                alt="THT Devo">
        </div>

        <!-- Card 4: Trinomium -->
        <div class="unit-card reveal">
            <div class="unit-card-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-trinomium-card.png" alt="Trinomium"
                    class="h-11 w-auto mb-6 self-start object-contain unit-card-logo">
                <p class="unit-card-description">Inversión y desarrollo inmobiliario internacional (EE. UU. y
                    España). Generamos valor patrimonial bajo una sólida visión financiera y estratégica de largo
                    plazo.</p>
                <div class="unit-card-link">
                    <span class="text-xs font-medium text-white tracking-[0.2em] flex items-center gap-2">Ver
                        más <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></span>
                </div>
            </div>
            <div class="unit-card-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/unit-trinomium.jpg" class="unit-card-image"
                alt="Trinomium">
        </div>

        <!-- Card 5: Fundación THT -->
        <div class="unit-card reveal">
            <div class="unit-card-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-fundacion-card.png"
                    alt="Fundación THT" class="h-11 w-auto mb-6 self-start object-contain unit-card-logo">
                <p class="unit-card-description">Conectamos empresas e instituciones para brindar recursos a
                    personas en situación de vulnerabilidad. Somos el puente sólido entre la solidaridad e impacto
                    social real.</p>
                <div class="unit-card-link">
                    <span class="text-xs font-medium text-white tracking-[0.2em] flex items-center gap-2">Ver
                        más <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></span>
                </div>
            </div>
            <div class="unit-card-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/unit-fundacion.jpg" class="unit-card-image"
                alt="Fundación THT">
        </div>

        <!-- Card 6: Césped en Mendoza -->
        <div class="unit-card reveal">
            <div class="unit-card-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-cesped-card.png"
                    alt="Césped en Mendoza" class="h-11 w-auto mb-6 self-start object-contain unit-card-logo">
                <p class="unit-card-description">Líderes en comercialización de césped premium en la región. Calidad
                    garantizada y asesoramiento técnico especializado para proyectos paisajísticos de alto nivel.
                </p>
                <div class="unit-card-link">
                    <span class="text-xs font-medium text-white tracking-[0.2em] flex items-center gap-2">Ver
                        más <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></span>
                </div>
            </div>
            <div class="unit-card-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/unit-cesped.jpg" class="unit-card-image"
                alt="Césped en Mendoza">
        </div>
    </div>
</section>

<!-- Quienes Somos Section -->
<section id="nosotros" class="py-48 px-6 bg-[#030303] relative overflow-hidden">
    <div class="max-w-[1600px] mx-auto flex flex-col items-center text-center">
        <span class="section-badge mb-12 reveal">Nuestra visión</span>

        <div class="reveal-container mb-24">
            <h2 class="huge-title reveal-item active">
                Innovación <br>
                <div class="flex items-center justify-center gap-6 my-4">
                    <div class="typo-window">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/vision-poster.png"
                            class="w-full h-full object-cover" alt="Vision Poster">
                        <div class="play-indicator">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                    <span class="font-black leading-none text-7xl md:text-9xl">con visión</span>
                </div>
                de futuro
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl text-left mt-20 border-t border-white/5 pt-20">
            <p class="text-2xl text-gray-300 font-light leading-relaxed">
                En <span class="text-white font-bold">THT Corporation</span>, lideramos diversas industrias a través
                de la innovación constante y la inversión estratégica en tecnología. Nuestro motor es el desarrollo
                del talento humano: creemos que la verdadera transformación nace de la sinergia entre personas,
                conocimiento y una visión clara del negocio.
            </p>
            <div class="flex flex-col justify-start h-full">
                <div class="highlight-card">
                    <p class="text-3xl text-white font-medium italic leading-tight">
                        "El futuro pertenece a quienes se atreven a crear y a pensar a largo plazo."
                    </p>
                    <p class="text-lg text-gray-500 font-light leading-relaxed mt-6">
                        Diseñamos soluciones de impacto que acompañan a empresas y profesionales en su evolución,
                        proyectando juntos un horizonte sólido, sostenible y escalable.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[100vw] h-[100vw] bg-blue-600/5 blur-[120px] rounded-full -z-10">
    </div>
</section>

<!-- Viví la experiencia Section -->
<section id="experiencia" class="py-0 px-0 relative bg-black">
    <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-0 items-start">
        <!-- Sticky Image Side -->
        <div class="block h-[50vh] lg:h-screen lg:sticky lg:top-0 overflow-hidden bg-black">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/team-culture.jpg" alt="Cultura THT"
                class="w-full h-full object-cover object-center lg:object-left opacity-100 lg:opacity-90 transition-all duration-700"
                id="experience-photo">
            <div class="absolute inset-0 hidden lg:block bg-gradient-to-r from-black/60 via-transparent to-transparent z-10"></div>
        </div>

        <!-- Scrollable Content Side -->
        <div class="py-60 px-6 lg:px-20 space-y-[60vh]">
            <!-- Intro -->
            <div class="reveal-stagger mb-60">
                <span class="section-badge mb-6">Nuestra Cultura</span>
                <h2 class="giant-text mb-8">Viví la <br> Cultura <br> THT</h2>
                <p class="text-2xl text-gray-500 font-light max-w-lg mb-12">Equipos de alto rendimiento diseñando el
                    futuro tecnológico.</p>
                <div class="flex flex-wrap gap-6 font-inter font-medium">
                    <a href="#contacto" id="open-join-modal-btn"
                        class="px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white rounded-2xl transition-all shadow-[0_10px_30px_rgba(0,102,255,0.2)] hover:scale-105 flex items-center justify-center gap-2">Sumate
                        al equipo
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#contacto"
                        class="px-8 py-4 border border-blue-500 text-white rounded-2xl hover:bg-blue-500/10 transition-all flex items-center justify-center gap-2">Cultura
                        THT</a>
                </div>
            </div>

            <!-- Pillars -->
            <div class="culture-pillar py-20 border-t border-white/10" id="pillar-1">
                <div class="text-7xl mb-12 text-blue-500">01</div>
                <h3 class="text-6xl font-black mb-8 uppercase tracking-normal font-poppins">Autonomía</h3>
                <p class="text-xl text-gray-400 font-inter max-w-md">Empoderamos a cada líder y equipo para tomar
                    decisiones de impacto real, fomentando la responsabilidad y el crecimiento individual.</p>
            </div>

            <div class="culture-pillar py-20 border-t border-white/10" id="pillar-2">
                <div class="text-7xl mb-12 text-blue-500">02</div>
                <h3 class="text-6xl font-bold mb-8 uppercase tracking-normal font-poppins">Aprendizaje</h3>
                <p class="text-xl text-gray-400 font-inter max-w-md">La evolución es constante. Promovemos una
                    cultura de formación continua y curiosidad tecnológica inagotable.</p>
            </div>

            <div class="culture-pillar py-20 border-t border-white/10" id="pillar-3">
                <div class="text-7xl mb-12 text-blue-500">03</div>
                <h3 class="text-6xl font-bold mb-8 uppercase tracking-normal font-poppins">Innovación</h3>
                <p class="text-xl text-gray-400 font-inter max-w-md">No seguimos tendencias, las creamos.
                    Desarrollamos soluciones disruptivas que desafían lo establecido.</p>
            </div>

            <div class="culture-pillar py-20 border-t border-white/10" id="pillar-4">
                <div class="text-7xl mb-12 text-blue-500">04</div>
                <h3 class="text-6xl font-bold mb-8 uppercase tracking-normal font-poppins">Bienestar</h3>
                <p class="text-xl text-gray-400 font-inter max-w-md">El talento brilla cuando está en equilibrio.
                    Priorizamos la salud, la flexibilidad y un ambiente colaborativo sano.</p>
            </div>
        </div>
    </div>
</section>

<!-- Spirit Phrase Section -->
<section class="py-40 px-6 relative overflow-hidden bg-black" id="adn-section">
    <div class="max-w-7xl mx-auto">
        <span class="section-badge mb-12 reveal">Nuestro Espíritu</span>
        <div class="mt-20 max-w-5xl">
            <p class="text-4xl md:text-7xl font-light text-gray-800" id="scrub-phrase"
                style="line-height: 1.2 !important;">
                <span class="scroll-reveal-text">Modelamos</span>
                <span class="scroll-reveal-text">el</span>
                <span class="scroll-reveal-text">presente</span>
                <span class="scroll-reveal-text">para</span>
                <span class="scroll-reveal-text">dominar</span>
                <span class="scroll-reveal-text">el</span>
                <span class="scroll-reveal-text">mañana.</span>
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contacto" class="py-40 px-6 bg-black relative">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-20 items-center">
        <div class="md:w-1/2">
            <span class="section-badge mb-6">Contacto</span>
            <h2 class="text-4xl md:text-6xl font-bold mb-6 tracking-normal">Comunícate con THT Corporation</h2>
            <div class="space-y-12">
                <div class="flex flex-wrap gap-8">
                    <div class="flex items-center gap-3">
                        <img src="https://flagcdn.com/w80/us.png" alt="USA" class="flag-circle">
                        <span class="font-bold">USA</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="https://flagcdn.com/w80/es.png" alt="España" class="flag-circle">
                        <span class="font-bold">España</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="https://flagcdn.com/w80/ar.png" alt="Argentina" class="flag-circle">
                        <span class="font-bold">Argentina</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="https://flagcdn.com/w80/cl.png" alt="Chile" class="flag-circle">
                        <span class="font-bold">Chile</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <div class="glass-card p-12 border-white/5">
                <form class="space-y-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-xs font-medium uppercase tracking-widest text-gray-500">Nombre</label>
                            <input type="text"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 focus:border-blue-500 outline-none transition-all"
                                placeholder="Tu nombre">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-medium uppercase tracking-widest text-gray-500">Email</label>
                            <input type="email"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 focus:border-blue-500 outline-none transition-all"
                                placeholder="vos@email.com">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-medium uppercase tracking-widest text-gray-500">Mensaje</label>
                        <textarea rows="4"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 focus:border-blue-500 outline-none transition-all"
                            placeholder="¿Cómo podemos ayudarte?"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium py-4 rounded-xl transition-all shadow-lg hover:shadow-blue-600/30 tracking-widest">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>