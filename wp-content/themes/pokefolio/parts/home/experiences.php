<!-- SECTION EXPERIENCES -->
<section class="experiences --waterbg">
    <div class="blue waves"></div>
    <div class="wrapper">
        <div class="heading">
            <h3>Experiences</h3>
            <h1>I worked for awesome people.</h1>
        </div>
        <div class="experiences__all">




<?php
    $loop = new WP_Query( array( 
      'post_type' => 'experience', // Va rechercher le type de contenu “job”
      'posts_per_page' => -1, // Affiche tout sans limite 
      'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'date', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->



            <!-- EXP 01 -->
            <div data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="exp">
                <!-- Colonne 001 -->
                <div class="exp__logo">
                    <h5><?php echo CFS()->get( 'start_date' ); ?> - <?php echo CFS()->get( 'end_date' ); ?></h5>
                    <div class="exp__logo__img"><img src="<?php echo CFS()->get( 'logo' ); ?>">
                    </div>
                </div>
                <!-- Colonne 002 -->
                <div class="exp__timeline">
                    <div class="exp__line"></div>
                    <div class="exp__block"></div>
                </div>
                <!-- Colonne 003 -->
                <div class="exp__text">
                    <div class="exp__title"><?php the_title(  ) ?> <span class="exp__span">@ <?php echo CFS()->get( 'place' ); ?>
                    </div>
                    <?php the_content( ) ?>
                </div>
                <!-- colonne 004-->
                <div class="exp__tag">




                <?php 
                    $fields = CFS()->get( 'tags' );
                    foreach ( $fields as $field ):
                        
                ?>

                    <div class="tag"><a href="<?php bloginfo('template_directory') ?>/#"><?php echo $field['tag']; ?></a></div>

                    <?php endforeach; ?>


                </div>
            </div>


            <?php endwhile;
wp_reset_query();
?>




            
            <!-- fin des single expériences -->
        </div>
    </div>
</section>