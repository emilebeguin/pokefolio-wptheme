
<?php
    $loop = new WP_Query( array(
        'post_type' => 'service', // Va rechercher le type de contenu service
        'orderby' => 'name',
        'order' => 'ASC', // Chronologique (par défaut date)
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <!-- SECTION MARKETING -->
        <section class="<?php
            // la classe change en cas de service pair ou impair
            $serviceDisplayNumber++;
            if($serviceDisplayNumber % 2){ echo 'marketing section-even';}
            else{ echo 'creative section-odd';}
        ?>">
            <div class="wrapper">

                <div class="block-txtimg">
                    <div class="block-txtimg__image">
                        <img alt="Grow and Stand Out" src="img/service1.jpeg">
                    </div>
                    <div class="block-txtimg__text">
                        <div class="heading">
                            <h3>My Services</h3>
                            <h1>Marketing</h1>
                        </div>
                        <div class="clmn-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam
                                liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                placerat facer possim assum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam
                                liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                placerat facer possim assum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam
                                liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                placerat facer possim assum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
wp_reset_query(); ?>