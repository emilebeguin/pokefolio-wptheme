<nav class="nav --airbg">
    <a href="<?php echo home_url() ?>" class="nav__logo">
        <img src="<?php bloginfo('template_directory') ?>/img/logosimple-lightbg.png">
    </a>
    <?php wp_nav_menu([
        'menu' =>  'Header Menu',
        'container' => false,
        'container_class' => 'hello',
        'menu_class' =>  'nav__menu',
        // 'items_wrap' =>  '<ul id="%1$s" class="%2$s nav navbar-nav mr-auto">%3$s</ul>',
        // 'add_li_class'  => 'nav-item',
        // 'link_class'   => 'nav-link'
    ]); ?>

    <!-- BURGER MENU -->
    <div class="burger">
        <span></span>
        <span></span>
        <span></span>
    </div>

</nav>