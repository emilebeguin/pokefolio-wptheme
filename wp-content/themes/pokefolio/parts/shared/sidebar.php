<aside class="widgets">
    <!-- OTHER ARTICLES -->
    <div class="articles --padbot">
    <h3 class="--bigtitle">Articles you might like</h3>

    <?php  $loop = new WP_Query( array(
        'post_type' => 'post', // fetch all content type member elems
        'posts_per_page' => 3,
        'order' => 'DESC',
    ));?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <!-- SINGLE ARTICLE -->
            <div class="blog__block2 --marginbot">
                <div class="blog__image">
                <a href="<?php the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url() ?>"
                    alt="<?php the_post_thumbnail_caption() ?>">
                </a>
                <div class="blog__date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <div><?php the_time('d/m/y') ?></div>
                </div>
                </div>
                <div class="blog__text">
                <h6 class="--littlepadbot"><?php the_title() ?></h6>
                <a href="#" class="--colorblack --padtopbot">
                    <div class="full__tag">
                        <i class="fa-solid fa-tags"></i>
                        <div class="full__category">Marketing</div>
                    </div>
                </a>
                <?php // the_excerpt() ?>
                <button class="button button--darkblue"><a href="<?php the_permalink() ?>">Read More</a></button>
                </div>
            </div>
            <!-- END OF SINGLE ARTICLE -->
        <?php endwhile;
    wp_reset_query(); ?>

    </div>


    <?php dynamic_sidebar( 'right_sidebar_1' ); ?>
    <!-- CATEGORIES -->

</aside>