<!-- SECTION LASTEST POST -->
<section class="lastestpost --airbg">
    <div class="heading">
        <h1>My latest posts</h1>
        <p>Check out some of the amazing news i've brought to life</p>
    </div>
    <div class="blog__news">

    <?php $is_first = true;
    // ↑ je ne comprends pas comment je suis le premier à
    // me rendre compte de cette lacune de dynamisation -_-
    $loop = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
        ));?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <!-- Ce qui doit être "bouclé" -->

        <div class="blog__block <?php if($is_first){ echo 'block__full';}?>">
            <div class="blog__image" onclick="location.href='<?php the_permalink() ?>';" style="cursor: pointer;">
                <img src="<?php the_post_thumbnail_url() ?>">
            </div>
            <div class="blog__text <?php if($is_first){ echo '--textfull'; }?>">
                <h6><?php the_title() ?></h6>
                <p><?php the_excerpt() ?></p>
                <?php // c'est pourtant évident...
                if($is_first): ?>
                <div class="read-more"><a href="<?php the_permalink() ?>">Read More</a></div>
                <?php else: ?>
                <button class="button button--darkblue"><a href="<?php the_permalink() ?>">Read More</a></button>
                <?php endif;?>
            </div>
        </div>

        <?php
            $is_first = false; 
            endwhile;
            wp_reset_query();
        ?>
        
    </div>
</section>