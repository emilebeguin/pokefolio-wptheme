 <!-- BROWSE CATEGORIES -->
 <?php
    //for each category, show all posts
    $cat_args=array(
    'orderby' => 'name',
    'order' => 'ASC'
    );
    $categories=get_categories($cat_args);
    $section_odd_or_even = 0;
    foreach($categories as $category) {
        $args=array(
        'showposts' => 4,
        'category__in' => array($category->term_id),
        'caller_get_posts'=>1
        );
        $one_on_four = 0;
        $posts=get_posts($args);
        if ($posts) {?>
        <section class="category section-<?php if($section_odd_or_even % 2 == 0): echo 'even'; else: echo 'odd'; endif; ?>">
            <div class="wrapper">
            <div class="heading">
                <?php  echo '<h3 class="--title">' . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h3>'?>
            </div>
                <?php
                    // echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
                    foreach($posts as $post) {
                    $one_on_four++;
                    setup_postdata($post);
                    if ($one_on_four % 4 == 1): // si le post est le 1er, le 5e, le 9e etc.  ?>
                        <!-- LE POST FULL -->
                        <div class="blog__news blog__full">
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
                        <div class="blog__news">
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
                    <?php
                    } // foreach($posts
                    $section_odd_or_even++;
                } // if ($posts
                ?>
            </div>
        </section>        
        <?php
        } // foreach($categories
    ?>