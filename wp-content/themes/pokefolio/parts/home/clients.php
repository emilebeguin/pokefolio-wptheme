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
                    <?php 
                        $fields = CFS()->get( 'clients', CFS()->options->page( 'Options' ) );
                        foreach ( $fields as $field ):
                    ?>

                        <!-- LOGO -->
                            <div class="swiper-slide">
                            <div class="clients__logos">
                                <img src="<?php echo $field['logo']; ?>" alt="logo">
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>