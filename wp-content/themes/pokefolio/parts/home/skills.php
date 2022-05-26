<section class="skills --airbg">
    <div class="purple waves"></div>
    <div class="wrapper">
        <div class="heading">
            <h3>Skills</h3>
            <h1>I've got super powers.</h1>
        </div>
        <div class="skills__block">
            <div class="percentage">



<?php
  $loop = new WP_Query( array( 
      'post_type' => 'skill', // Va rechercher le type de contenu “job”
      'posts_per_page' => 3, // Affiche tout sans limite 
      'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'date', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->


                <!-- PERCENTAGE 01 -->
                <div data-aos="fade-up" data-aos-duration="1200" class="percentage__block">
                    <div class="percentage__number counterup">
                        <div class="counter-text" data-number="<?php echo CFS()->get( 'general_mastery' ); ?>"></div>%
                    </div>
                    <h6><?php the_title(  ) ?></h6>
                    <?php the_content(  ) ?>
                </div>


                <?php endwhile;
wp_reset_query();
?>






                
            </div>
        </div>
        <div class="skills__colonne">

        <?php
  $loop = new WP_Query( array( 
      'post_type' => 'skill', // Va rechercher le type de contenu “job”
      'posts_per_page' => 1, // Affiche tout sans limite 
      'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'date', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->


            <!-- colonne de gauche -->
            <div data-aos="zoom-out-right" data-aos-duration="2600" class="skills__left">
                <div class="skills__title">
                    <h2><?php the_title(  ) ?></h2>
                </div>
                <div class="coding">


                <?php 
                    $fields = CFS()->get( 'sub_masteries' );
                    foreach ( $fields as $field ):
                        
                ?>

                    <!-- CODING 01 -->
                    <div class="coding__block">
                        <div class="coding__text">
                            <div class="coding__name"><?php echo $field['name']; ?></div>
                        </div>
                        <div class="coding__rod coding-<?php echo $field['mastery']; ?>"></div>
                    </div>

                    <?php endforeach; ?>


                    
                </div>
            </div>

<?php endwhile;
wp_reset_query();
?>


<?php
  $loop = new WP_Query( array( 
      'post_type' => 'skill', // Va rechercher le type de contenu “job”
      'posts_per_page' => 1, // Affiche tout sans limite 
      'offset' => 4, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'date', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->


            <!-- colonne de gauche -->
            <div data-aos="zoom-out-left" data-aos-duration="2600" class="skills__right">
                <div class="skills__title">
                    <h2><?php the_title(  ) ?></h2>
                </div>
                <div class="coding">


                <?php 
                    $fields = CFS()->get( 'sub_masteries' );
                    foreach ( $fields as $field ):
                        
                ?>

                    <!-- CODING 01 -->
                    <div class="coding__block">
                        <div class="coding__text">
                            <div class="coding__name"><?php echo $field['name']; ?></div>
                        </div>
                        <div class="coding__rod coding-<?php echo $field['mastery']; ?>"></div>
                    </div>

                    <?php endforeach; ?>


                    
                </div>
            </div>

<?php endwhile;
wp_reset_query();
?>





        </div>
    </div>
</section>