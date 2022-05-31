<!-- BOTTOM PART (MORE ARTICLES) -->
<section class="blog more-articles --waterbg">
    <div class="wrapper">
        <div class="heading heading--middle">
            <h3>My blog</h3>
            <div class="border__bottom"></div>
            <h1>Some of my latest posts</h1>
            <p>Stay tuned !</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="2600" class="blog__news">
            <!-- BLOG 01 -->
            <?php $loop = new WP_Query( array( 
                'post_type' => 'post', // Va rechercher le type de contenu “job”
                'posts_per_page' => 3, // Affiche tout sans limite 
                'offset' => 0, // Commence la boucle au premier
                'orderby' => 'date', // Ordonne par la date
                'order' => 'ASC', // Chronologique ou pas (DESC)
            ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            
                <div class="blog__block">
                    <div class="blog__image">
                        <img src="<?php the_post_thumbnail_url() ?>">
                        <div class="blog__date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <div><?php the_time('d/m/Y') ?></div>
                        </div>
                    </div>
                    <div class="blog__text">
                        <h6><?php the_title() ?></h6>
                        <?php the_excerpt() ?>
                        <button class="button button--darkblue"><a href="<?php the_permalink() ?>">Read More</a></button>
                    </div>
                </div>
                
            <?php endwhile;
            wp_reset_query();
            ?>

        </div>
    </div>
</section>