<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/partials/css/about.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
</head>

<body <?php body_class(); ?>>
    <div id="search-form" class="bg-white hidden justify-center text-center fixed top-0 left-0 w-full shadow-md z-50">
        <div class="w-[800px] py-16 mx-auto">
            <h3 class="font-bold mb-2"><?= __('Search', 'tailwindtheme'); ?></h3>
            <input type="search" class="border-b-1 border-black-300 w-full text-center px-4 py-2 mb-8" placeholder="<?= __('What are you looking for...', 'tailwindtheme'); ?>" />
            <p><?= _('People also search for:', 'tailwindtheme'); ?></p>
            <div class="groups-btn-search text-center mt-2">
                <button class="btn-search border border-blue-500 px-4 py-1 text-blue-500 font-bold-medium rounded-md" data-group="all"><?= __('All', 'tailwindtheme'); ?></button>
                <button class="btn-search border border-blue-500 px-4 py-1 text-blue-500 font-bold-medium rounded-md" data-group="page"><?= __('Pages', 'tailwindtheme'); ?></button>
                <button class="btn-search border border-blue-500 px-4 py-1 text-blue-500 font-bold-medium rounded-md" data-group="post"><?= __('Posts', 'tailwindtheme'); ?></button>
                <button class="btn-search border border-blue-500 px-4 py-1 text-blue-500 font-bold-medium rounded-md" data-group="product"><?= __('Products', 'tailwindtheme'); ?></button>
            </div>
        </div>
    </div>
    <header class="w-full flex items-center justify-between shadow-md transparent border border-gray-300">
        <!-- logo -->
        <div class="px-8 py-4">
            <a href="https://themexriver.com/wp/agenriver-demo/creative-agency" aria-label="name">
                <img src="https://themexriver.com/wp/agenriver-demo/creative-agency/wp-content/uploads/sites/2/2024/12/logo-1.svg" alt="">
            </a>
        </div>
        <div class="flex items-center space-between">
            <!-- menu -->
            <nav class="flex items-center justify-center px-8 py-2">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'flex space-x-4',
                    ));
                ?>
            </nav>
            <div id="search" class="border-x border-gray-300 px-4 py-2 h-[75px] w-[185px] flex items-center justify-center">
                <button id="btn-show-search"><i class="fas fa-search"></i> <?= __('Search Here...', 'tailwindtheme'); ?></button>
            </div>
            <div id="contact-button" class="px-4 py-2 h-[75px] w-[285px] flex items-center justify-center">
                <a href="/contact" class="bg-[#fb995a] text-white px-4 py-2 rounded-full"><?= __('Contact Me Now', 'tailwindtheme'); ?></a>
            </div>
            <!-- menu btn -->
            <div class="menu-btn">
                <button>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>