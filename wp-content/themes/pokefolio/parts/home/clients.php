<!-- SECTION CLIENTS -->
<section class="clients">
    <div class="wrapper">
        <div class="heading heading--middle">
            <h3>Success stories</h3>
            <div class="border__bottom"></div>
            <h1>Just a few of my clients</h1>
        </div>
        <div class="clients__block">

            <?php $loop = new WP_Query( array(
                'post_type' => 'client', // fetch all content type client
                // il faudra sans doute créer des contenus de type client...
                'order' => 'DESC',
            ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <!-- LOGO -->
                <div class="clients__logos">
                    <img src="<?php bloginfo('template_directory') ?>/img/client-jm.jpg">
                </div>

            <?php endwhile;
            wp_reset_query(); ?>

        </div>
    </div>
</section>