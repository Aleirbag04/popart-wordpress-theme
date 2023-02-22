<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriela's Portfolio</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="menu-container">
            <div class="menu-wrapper burguer">
                <div class="menu-btn" ;>
                    <div class="menu-btn-burger">
                    </div>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location'    =>  'menu-main',
                    'container'         =>  'li',
                    'menu_class'        =>  'main-menu',
                    'items_wrap'        => '<div class="%2$s visually-hidden"><ul>%3$s</ul></div>',
                ));
                ?>

                <div class="social-links">
                    <!-- Font - Awesome free version icons -->
                    <!-- <div class="social linkedin">
                        <i class="fab fa-linkedin-in"></i>
                        <span class="screen-reader-text">Linkedin</span>
                    </div>
                    <div class="social github">
                        <i class="fab fa-github"></i>
                        <span class="screen-reader-text">Github</span>
                    </div> -->

                    <?php
                    wp_nav_menu(array(
                        'theme_location'    =>  'menu-social',
                        'container'         =>  'li',
                        'container_class'   =>  'menu-container',
                        'menu_class'        =>  'social-menu',
                        'link_before'       => '<span class="screen-reader-text visually-hidden">',
                        'link_after'        => '</span>'
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="header-img">
            <!-- All images are Gabrielas's property -->
            <img srcset="http://gabrielafchaves.com/wp-content/uploads/2021/12/header-dots-mobile.png 601w,
                         http://gabrielafchaves.com/wp-content/uploads/2021/12/header-dots.png" 1367w" sizes="(max-width: 600px) 600px,
                        1200px" src="http://gabrielafchaves.com/wp-content/uploads/2021/12/header-dots.png" class="dots">
            <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/Gabriela.jpg" alt="Gabriela's Pic" class="profilepic">
            <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/about.png" alt="About Card" class="about">
            <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/folder.png" alt="Folder Card" class="folder">
            <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/contact.png" alt="Contact Card" class="contact">
            <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/dialog.png" alt="I am Gabriela" class="dialog">
            <aside class="mood-widget">
                <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/colour-wheel.png" alt="Colour-wheel" class="colour">
                <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/widget1.png" alt="Colour-mood Widget" class="widget1">
                <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/widget2.png" alt="Colour-mood Widget" class="widget2">
                <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/gray-wheel.png" alt="Gray-wheel" class="gray">
            </aside>

        </div>

    </header>