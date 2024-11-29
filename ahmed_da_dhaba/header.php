<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title();?></title>
    <?php wp_head();?>
</head>

<body>
    <header class="header-container">
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri(); ?>/screenshot.jpg" alt="Logo">
        </div>
        <nav class="menu-container">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'menu_class' => 'menu-items'
                ));
            ?>
        </nav>
        <div class="btn-container">
            <button class="btn-area">Contact Us</button>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="shot-menu" id="mobile-menu-toggle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/shotmenu.png" alt="Menu">
        </div>
    </header>