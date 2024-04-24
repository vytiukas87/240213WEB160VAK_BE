<?php
function myProjectStylesAndScripts()
{
    wp_enqueue_style(
        'project_fonts',
        'https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap',
    );

    if (is_page(41) === false) {
        wp_enqueue_style(
            'project_style',
            get_stylesheet_uri(),
            ['project_fonts']
        );
    }
    
    if (is_page(41)) {
        wp_enqueue_style(
            'project_services_style',
            get_template_directory_uri() . '/styles/services.css',
            ['project_fonts']
        );
    }

    wp_enqueue_script(
        'materialize_script',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',
        [],
        '',
        true
    );
}
add_action('wp_enqueue_scripts', 'myProjectStylesAndScripts');

function register_my_menus() {
    register_nav_menus(
        array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

?>

