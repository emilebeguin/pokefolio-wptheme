<?php
    $loop = new WP_Query( array(
        'post_type' => 'service', // Va rechercher le type de contenu service
        'orderby' => 'name',
        'order' => 'ASC', // Chronologique (par défaut date)
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <!-- SECTION MARKETING -->
        <section class="<?php
            // /!\ la classe change en cas de service pair ou impair :
            // À DYNAMISER !
            $serviceDisplayNumber++;
            if($serviceDisplayNumber % 2){ echo 'marketing section-even';}
            else{ echo 'creative section-odd';}
        ?>">
            <div class="wrapper">
                <div class="block-txtimg">
                    <div class="block-txtimg__image">
                        <img alt="<?php the_post_thumbnail_caption() ?>" src="<?php the_post_thumbnail_url() ?>">
                    </div>
                    <div data-aos="zoom-out-right" data-aos-duration="2600" class="block-txtimg__text">
                        <div class="heading">
                            <h3>My Services</h3>
                            <h1><?php the_title() ?></h1>
                        </div>
                        <div class="clmn-2">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
wp_reset_query(); ?>