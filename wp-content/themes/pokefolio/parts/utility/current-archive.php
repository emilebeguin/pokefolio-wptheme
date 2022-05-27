<?php global $wp_query;
    $post_type_object = get_post_type_object( $wp_query->query_vars['post_type'] );
    echo $post_type_object;
    echo $wp_query->query_vars['post_type'];


?>

<section class="category section-odd">
    <?php  // si la catégorie existe et possède du contenu
    if ( have_posts() ) : ?>
        <div class="wrapper">
            <div class="heading"  data-aos="fade-left" data-aos-duration="2000">
                <?php the_archive_title( '<h1 class="--title">', '</h1>' ); ?>
            </div>
            
        <?php // boucle dans les archives
        $one_on_four = 0;
        while ( have_posts() ) :
            $one_on_four++;
            the_post();
            if ($one_on_four % 4 == 1): // si le post est le 1er, le 5e, le 9e etc.  ?>
                <!-- LE POST FULL -->
                <div class="blog__news blog__full" data-aos="fade-up" data-aos-duration="2000">
                    <div class="blog__block block__full">
                        <div class="blog__image">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>">
                            <div class="blog__date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <div><?php the_time('d/m/Y') ?></div>
                            </div>
                        </div>
                        <div class="blog__text --textpad">
                            <div class="full__title">
                                <h6><?php the_title() ?></h6>
                            </div>
                            <div class="full__text">
                                <?php echo wp_trim_words_retain_formatting(get_the_content(), 90, '...') ?>
                            </div>
                            <div class="read-more"><a href="<?php the_permalink() ?>">Read More</a></div>
                        </div>
                    </div>
                </div>
            <div class="blog__news" data-aos="fade-up" data-aos-duration="2000">
            <?php else: // si le post n'est PAS le 1er, le 5e, le 9e etc. ?>
                <!-- BLOG POST -->
                <div class="blog__block">
                    <div class="blog__image">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_post_thumbnail_caption() ?>">
                        <div class="blog__date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <div><?php the_time('d/m/Y') ?></div>
                        </div>
                    </div>
                    <div class="blog__text">
                        <h6><?php the_title() ?></h6>
                        <?php the_excerpt() ?>
                        <button class="button button--darkblue"><a href="<?php the_permalink() ?>">Learn More</a></button>
                    </div>
                </div>
                <?php endif; ?>
                
            <?php endwhile;
            if ($one_on_four % 4 == 1):?></div><?php endif;
                // Navigation
                // the_post_navigation();
            else :?>
            <div class="heading">
                <h1>Archive non trouvée</h1>
                <p>Cette catégorie ne contient aucun contenu</p>
            </div>
            <?php endif;
            ?>
            
    </div>
</section>
