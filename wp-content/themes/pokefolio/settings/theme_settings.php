<?php
/* https://www.webdesignsun.com/insights/wordpress-color-switch-feature/ */
add_action('customize_register', function($customizer){
    /* Options de couleur */
    $customizer->add_section(
        'theme_color',
        array(
            'title' => 'Couleurs Pokefolio',
            'description' => 'Changez vous-même la couleur du thème !',
        )
    );
    $customizer->add_setting(
        'color_settings',
        array('default' => 'theme-color--carapuce_blue')
    );
    $customizer->add_control(
        'color_settings',
        array(
            'type' => 'select',
            'label' => 'Theme Color',
            'section' => 'theme_color',
            'choices' => array(
                'theme-color--carapuce_blue' => 'Carapuce',
                'theme-color--pikachu_yellow' => 'Pikachu',
                'theme-color--bulbizarre_green' => 'Bulbizarre',
                'theme-color--melofee_pink' => 'Mélofée',
                'theme-color--salameche_red' => 'Salamèche',
            ),
        )
    );
});

// ne fonctionne pas avec la classe plongescroll
// add_action( 'after_setup_theme', function() {
//     $args = array(
//         'default-image'      => get_template_directory_uri() . '/img/work1.jpeg',
//         'default-text-color' => '000',
//         'width'              => 1110,
//         'height'             => 750,
//         'flex-width'         => true,
//         'flex-height'        => true,
//     );
//     add_theme_support( 'custom-header', $args );
// });
