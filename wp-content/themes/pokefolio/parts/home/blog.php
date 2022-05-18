<!-- SECTION BLOG -->
<section class="blog">
    <div class="purple waves"></div>
    <div class="wrapper">
        <div class="heading heading--middle">
            <h3>My blog</h3>
            <div class="border__bottom"></div>
            <h1>See more of my latest posts</h1>
            <p>Stay tuned !</p>
        </div>
        <div class="blog__news">

            <?php $loop = new WP_Query( array(
                'post_type' => 'post', // fetch all content type post
                'order' => 'DESC',
            ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <!-- BLOG 01 -->
                <div class="blog__block">
                    <div class="blog__image">
                        <img src="<?php the_post_thumbnail_url() ?>">
                    </div>
                    <div class="blog__text">
                        <h6><?php the_title() ?></h6>
                        <p><?php the_excerpt() ?></p>
                        <button class="button button--darkblue"><a href="<?php the_permalink() ?>/#">Read
                                More</a></button>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>

        </div>
    </div>
</section>