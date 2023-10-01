<?php

function adicionar_estilos_e_scripts() {
    // Adicione folhas de estilo
    
    wp_enqueue_style('icon-bootstrap', get_template_directory_uri() . '/assets/bootstrap-icons/bootstrap-icons.min.css', array(), '1.0');
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');

    // Adicione scripts
    wp_enqueue_script('jquery'); // Use a versão do jQuery incluída no WordPress

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'adicionar_estilos_e_scripts');


function registrar_menus() {
    register_nav_menus(
        array(
            'menu-principal' => 'Menu Principal',
            'second-menu' => 'Segundo Menu',
            'menu-rodape'   => 'Menu Rodapé',
            'menu-rodape2' => 'Menu Rodapé 2'
        )
    );
}
add_action('init', 'registrar_menus');

// Função para registrar widgets
function registrar_widgets() {
    register_sidebar(
        array(
            'name'          => 'Barra lateral', // Nome da barra lateral
            'id'            => 'barra-lateral', // ID exclusivo da barra lateral
            'description'   => 'Esta é a barra lateral do seu tema.', // Descrição da barra lateral
            'before_widget' => '<div class="widget">', // HTML antes do widget
            'after_widget'  => '</div>', // HTML após o widget
            'before_title'  => '<h2 class="widget-title">', // HTML antes do título do widget
            'after_title'   => '</h2>', // HTML após o título do widget
        )
    );
}
add_action('widgets_init', 'registrar_widgets');

// Função para adicionar suporte a imagens destacadas
add_theme_support('post-thumbnails');

// Função para adicionar suporte a formatos de postagem
add_theme_support('post-formats', array('aside', 'gallery', 'video'));

// Função para personalizar o comprimento do resumo
function comprimento_resumo_personalizado($length) {
    return 20; // Número de palavras no resumo
}
add_filter('excerpt_length', 'comprimento_resumo_personalizado');

// Função para adicionar classes CSS ao corpo da página
function classes_css_body($classes) {
    if (is_single() || is_page()) {
        $classes[] = 'pagina-unica'; // Adicione uma classe específica para páginas únicas
    }
    return $classes;
}
add_filter('body_class', 'classes_css_body');

function adicionar_suporte_a_logo() {
    add_theme_support('custom-logo');
}

// Adicione um tamanho de imagem personalizado
add_image_size('head_post', 800, 380, true);
add_image_size('head_post_top', 1920, 230, true);


add_action('after_setup_theme', 'adicionar_suporte_a_logo');
