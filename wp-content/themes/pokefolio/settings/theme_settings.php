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