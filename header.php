<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>

<div class="over_body"></div>
    <header class="header">
        <div class=" content_header">
            <div class="logo_site">
            <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if (has_custom_logo()) {
                    echo '<a href="' . esc_url(home_url('/')) . '" rel="home"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
                } else {
                    echo '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                }
            ?>
            </div>
            
            <div class="over_form">
                <form action="<?= home_url() ?>/?s=" method="">
                    <input type="search" name="s" id="" value="" placeholder="O que você busca?">
                    <button><i class="bi bi-search"></i></button>
                </form>
            </div>

            <nav class="menu menu_header">
                <?php

                    wp_nav_menu(array(
                        'theme_location' => 'second-menu',
                        'menu_class' => 'menu',
                        'container' => false,
                    ));

                ?>
            </nav>

            
        </div>
        <div class="bottom_header">
            <div class="container content_bottom_header">

                <nav class="menu_second">
                    <div class="head_menu_second">
                        <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                            if (has_custom_logo()) {
                                echo '<a href="' . esc_url(home_url('/')) . '" rel="home"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
                            } else {
                                echo '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                            }
                        ?>

                        <div class="btn_close_menu">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <?php

                        wp_nav_menu(array(
                            'theme_location' => 'menu-principal',
                            'menu_class' => 'menu',
                            'container' => false,
                        ));
                    ?>
                </nav>
                <div class="btn_menu">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>
    </header>