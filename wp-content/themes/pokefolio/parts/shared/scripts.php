    <script src="<?php bloginfo('template_directory') ?>/js/main.min.js"></script>
    <!-- BURGER -->
    <script src="<?php bloginfo('template_directory') ?>/js/burger.min.js"></script>

    <?php if (is_home()): ?>
    <!-- EFFET PLONGEE -->
    <script src="<?php bloginfo('template_directory') ?>/js/plongescroll.min.js"></script>
    <!-- COUNTER-->
    <script src="<?php bloginfo('template_directory') ?>/js/counter.min.js"></script>
    <!-- STICKY MENU -->
    <script src="<?php bloginfo('template_directory') ?>/js/stickymenu.min.js"></script>
    <?php endif; ?>

    <?php if (is_404()): ?>
    <script src="<?php bloginfo('template_directory') ?>/js/404.min.js"></script>
    <?php endif; ?>
    
    <!-- SWIPER  -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/swiper.min.js"></script>
    <!-- AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php wp_footer() ?>
</body>
</html>