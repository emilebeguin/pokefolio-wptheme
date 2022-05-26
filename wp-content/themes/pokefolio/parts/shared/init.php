<body class="<?php
    // css en fonction du type de conten
    if ( is_single() ) {
        echo 'single'; // article ou custom post
        if ( is_singular('experience') ): echo '-experience'; endif;
        if ( is_singular('service') ): echo '-service'; endif;
        if ( is_singular('skill') ): echo '-skill'; endif;
        if ( is_singular('testimonial') ): echo '-testimonial'; endif;
        if ( is_singular('work') ): echo '-work'; endif;
        if ( is_singular('post') ): echo '-blog'; endif;
    };
    if ( is_page() ) {
        echo 'page';  // page
        if ( is_page('blog') ): echo '-blog'; endif;
        if ( is_page('contact') ): echo '-contact'; endif;
        if ( is_page('services') ): echo '-services'; endif;
        if ( is_page('works') ): echo '-works'; endif;
        if ( is_page('about') ): echo '-about'; endif;
    };
    if ( is_home() )  : echo 'page-home'; endif; // home
    if ( is_404() ) : echo 'page-404'; endif;    // page 404
    
    // couleurs du thème
    echo ' ' . get_theme_mod('color_settings', 'theme-color--carapuce_blue');

    // classe pour le fond personnalisé
    echo ' ' . 'custom-background'
?>">