<!-- SECTION FEEDBACK -->
<section class="feedback --waterbg">
  <div class="purple waves"></div>
  <div class="wrapper">
    <div class="heading">
      <h3>Client feedback</h3>
      <h1>Don't just take my word for it.</h1>
    </div>
    <div class="swiper">
      <!-- swiper wrapper -->
      <div class="swiper-wrapper">





      <?php $loop = new WP_Query( array( 
            'post_type' => 'testimonial', // Va rechercher le type de contenu “job”
            'posts_per_page' => 4, // Affiche tout sans limite 
            'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
            'orderby' => 'date', // Ordonne par le nom de l'élément
            'order' => 'ASC', // Chronologique ou pas (DESC)
            ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <!-- FEEDBACK 01 -->
        <div class="swiper-slide">
          <p><?php the_content() ?></p>
          <div class="feedback__subtitle">
            <div><?php the_title(  ) ?></div>
            <div class="feedback__star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <span><?php echo CFS()->get( 'agency' ); ?></span>
        </div>

<?php endwhile;
            wp_reset_query();
            ?>





        
      </div>
      <!-- navigation buttons -->
      <div class="button-slider">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>