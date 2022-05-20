<!-- SECTION LASTEST POST -->
<section class="lastestpost">
    <div class="heading">
        <h1>My latest posts</h1>
        <p>Check out some of the amazing news i've brought to life</p>
    </div>
    <div class="blog__news">








    <?php
$loop = new WP_Query( array( 
      'post_type' => 'post', // Va rechercher le type de contenu “job”
      'posts_per_page' => -1, // Affiche tout sans limite 
      'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
      'orderby' => 'date', // Ordonne par le nom de l'élément
      'order' => 'ASC', // Chronologique ou pas (DESC)
        ));?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!-- Ce qui doit être "bouclé" -->


        <div class="blog__block">
            <div class="blog__image">
                <img src="<?php the_post_thumbnail_url(  ) ?>">
            </div>
            <div class="blog__text">
                <h6><?php the_title(  ) ?></h6>
                <p><?php the_excerpt(  ) ?></p>
                <button class="button button--darkblue"><a href="<?php the_permalink(  ) ?>">Learn More</a></button>
            </div>
        </div>



        <?php endwhile;
wp_reset_query();
?>
        
    </div>
</section>