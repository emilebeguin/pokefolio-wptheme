<!-- SECTION FEATURED WORK -->
<section class="work --darkbg">
  <div class="container-sticky">
    <div class="sticky-one">
      <div class="sticky-one-inside">
        <div class="heading heading--white">
          <h3>Works</h3>
          <div class="border__bottom"></div>
          <h1>You'll love what I do</h1>
          <p>Lorem impsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut Enim ad minim.</p>
        </div>
        <div class="work__image">

          <?php $loop = new WP_Query( array( 
            'post_type' => 'work', // Va rechercher le type de contenu “job”
            'posts_per_page' => -1, // Affiche tout sans limite 
            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
            'orderby' => 'date', // Ordonne par le nom de l'élément
            'order' => 'ASC', // Chronologique ou pas (DESC)
          ));?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <!-- WORK SINGLE -->

          <div data-aos="fade-up" data-aos-duration="2800" class="work__single">
            <a href="<?php the_permalink( ); ?>">
              <div class="singlework__text">
                <h1><?php the_title( ); ?></h1>
                <p><?php the_excerpt( ); ?></p>
              </div>
              <img src="<?php the_post_thumbnail_url( ); ?>">
            </a>
          </div>

          <?php endwhile;
            wp_reset_query();
          ?>

        </div>
      </div>
    </div>
    <div class="img-top wrapper sticky-two">
      <img src="img/work1.jpeg" alt="">
    </div>
  </div>
</section>