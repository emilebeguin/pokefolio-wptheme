<!-- SECTION CLIENTS -->
<section class="clients --airbg">
    <div class="wrapper">
        <div class="heading heading--middle">
            <h3>Success stories</h3>
            <div class="border__bottom"></div>
            <h1>Just a few of my clients</h1>
        </div>
        <div class="clients__block">

            <div class="swiper-container">
                <!-- swiper wrapper -->
                <div class="swiper-wrapper">


                    <?php $loop = new WP_Query( array(
                        'post_type' => 'client', // fetch all content type client
                        // il faudra sans doute créer des contenus de type client...
                        'order' => 'DESC',
                    ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="swiper-slide">

                        <!-- LOGO -->
                        <div class="clients__logos">
                            <img src="<?php bloginfo('template_directory') ?>/img/client-jm.jpg">
                        </div>

                    </div>
                    <?php endwhile;
                    wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>