<!-- SECTION BLOG -->
<section class="blog --airbg">
    <div class="purple waves"></div>
    <div class="wrapper">
        <div class="heading heading--middle">
            <h3>My blog</h3>
            <div class="border__bottom"></div>
            <h1>See more of my latest posts</h1>
            <p>Stay tuned !</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="2600" class="blog__news">

            <?php $is_first = true;
            $loop = new WP_Query( array(
                'post_type' => 'post', // fetch all content type post
                'order' => 'DESC',
                'posts_per_page' => 3,
            ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <!-- BLOG POST -->
                <div class="blog__block <?php id ?>">
                    <div class="blog__image">
                        <img src="<?php the_post_thumbnail_url() ?>">
                        <div class="blog__date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <!-- A DYNAMISER -->
                            <div><?php the_time('d/m/y'); ?></div>
                        </div>
                    </div>
                    <div class="blog__text">
                        <h6><?php the_title() ?></h6>
                        <p><?php the_excerpt() ?></p>
                        <button class="button button--darkblue"><a href="<?php the_permalink() ?>">Read
                                More</a></button>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>

        </div>
    </div>
</section>