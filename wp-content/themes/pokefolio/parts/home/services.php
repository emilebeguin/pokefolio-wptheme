<section class="our-services --waterbg">
    <div class="blue waves"></div>
    <div class="wrapper">
        <div class="services">
            <!-- PALIER ANIMATION 2600 -->
            <div data-aos="fade-up" data-aos-duration="2600" class="services__marketing">





            <?php $loop = new WP_Query( array( 
            'post_type' => 'service', // Va rechercher le type de contenu “job”
            'posts_per_page' => 4, // Affiche tout sans limite 
            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
            'orderby' => 'date', // Ordonne par le nom de l'élément
            'order' => 'ASC', // Chronologique ou pas (DESC)
            ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


                <!-- MARKETING 01 -->
                <div class="marketing__block">
                    <img class="marketing__image" src="<?php the_post_thumbnail_url(  ) ?>">
                    <div class="marketing__title">
                        <h6><?php the_title(  ) ?></h6>
                        <img src="<?php bloginfo('template_directory') ?>/img/check.png">
                    </div>
                    <p><?php the_excerpt(  ) ?></p>
                    <button class="button button--blue"><a href="<?php bloginfo('template_directory') ?>/services">Learn
                            More</a></button>
                </div>


                <?php endwhile;
            wp_reset_query();
            ?>





                
            </div>
            <div class="about__text">
                <h3>My Services</h3>
                <h1>I can make <span>great stuff</span> for you</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ante vitae arcu condimentum vehicula
                    efficitur pulvinar orci. Maecenas vitae risus ultrices, vestibulum eros non, varius justo. Nunc
                    convallis, lacus a aliquet consequat, lorem odio placerat augue, sit amet gravida felis enim sit
                    amet tellus. Phasellus varius malesuada justo non iaculis. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus. Suspendisse ut quam sed metus convallis convallis ut in justo. Vestibulum ut
                    augue rhoncus, mattis odio vel, pharetra nisl.</p>
                <p>Phasellus varius malesuada justo non iaculis. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Suspendisse ut quam sed metus convallis convallis ut in justo. Vestibulum ut augue
                    rhoncus, mattis odio vel, pharetra nisl.</p>
                <button class="button button--blue"><a href="<?php bloginfo('template_directory') ?>/services">All
                        Services</a></button>
            </div>
        </div>
    </div>
</section>