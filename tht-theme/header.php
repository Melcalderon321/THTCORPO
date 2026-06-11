<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #050505;
            color: #ffffff;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        p,
        span,
        a,
        label,
        li,
        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        /* Mesh Gradient Background */
        .mesh-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background:
                radial-gradient(circle at 10% 10%, rgba(0, 102, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 90% 90%, rgba(0, 51, 153, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(0, 0, 0, 1) 0%, rgba(5, 5, 5, 1) 100%);
        }

        /* Glassmorphism Classes */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
        }

        .glass-header {
            background: rgba(5, 5, 5, 0.3);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-bottom: 1px solid var(--glass-border);
        }

        /* Copy all styles from index.html here or keep them in style.css */
        /* For this initial conversion, I'll keep the specialized styles here to maintain the structure */
        <?php include(get_template_directory() . '/inline-styles.php'); ?>
    </style>
</head>

<body <?php body_class(); ?>>
    <div class="mesh-bg"></div>

    <!-- Header -->
    <header
        class="fixed top-0 left-0 w-full z-50 glass-header px-6 py-4 flex justify-between items-center transition-all duration-300"
        id="main-header">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-main.png" alt="THT Corporation"
                class="h-10 w-auto">
        </div>
        <nav class="hidden md:flex gap-8 items-center font-inter font-medium text-sm">
            <a href="#inicio" class="hover:text-blue-500 transition-colors">Inicio</a>
            <a href="#unidades" class="hover:text-blue-500 transition-colors">Institucional</a>
            <a href="#experiencia" class="hover:text-blue-500 transition-colors">Empresas</a>
            <a href="#experiencia" class="hover:text-blue-500 transition-colors">Talento humano</a>
            <a href="#contacto" class="hover:text-blue-500 transition-colors">Contacto</a>
            <a href="#contacto"
                class="ml-4 px-6 py-2.5 bg-blue-500 text-white rounded-2xl hover:bg-blue-600 transition-all shadow-[0_10px_30px_rgba(0,102,255,0.15)] hover:scale-105">Contáctanos</a>
        </nav>
        <button class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </header>