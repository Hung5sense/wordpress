<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold"><?php bloginfo('name'); ?></h1>
            <nav>
            </nav>
        </div>
    </header>
    <header>
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- logo -->
            <a href="https://themexriver.com/wp/agenriver-demo/creative-agency" aria-label="name">
                <img src="https://themexriver.com/wp/agenriver-demo/creative-agency/wp-content/uploads/sites/2/2024/12/logo-1.svg" alt="">
            </a>
            <div>
                <!-- menu -->
                <nav>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'flex space-x-4',
                        ));
                    ?>
                </nav>
                <!-- menu btn -->
                <button class="menu-btn">
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