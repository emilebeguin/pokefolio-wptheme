<!-- SECTION BROWSE MORE -->
<?php
  $prev = get_previous_post(); // work précédent
  $next = get_next_post(); // work suivant
?>

<section class="browse-more --waterbg">
    <div class="wrapper">
      <div class="browse-more-inside">
        
        <div class="heading heading--middle">
          <h3>Browse more</h3>
          <div class="border__bottom"></div>
          <h1>See more cool projects</h1>
        </div>
        <div class="see-more df">

          <?php if(get_previous_post()): ?>
            <div data-aos="zoom-in-right" data-aos-duration="2600" class="article-1">
              <a href="<?php echo get_permalink( $prev->ID ); ?>">
                <img src="<?php echo get_the_post_thumbnail_url( $prev->ID ); ?>" alt="<?php
                if ( get_the_post_thumbnail_caption($prev->ID) )
                { echo get_the_post_thumbnail_caption($prev->ID);} 
                else { echo get_the_title($prev->ID);}
              ?>">
              </a>
              <a href="<?php echo get_permalink( $prev->ID ); ?>">
                <div class="btn-posts btn-prev"></div>
              </a>
              <div class="article-txt">
                <a href="<?php echo get_permalink( $prev->ID ); ?>"><h3><?php echo $prev->post_title;?></h3></a>
                <p>
                  <?php echo $prev->post_excerpt; ?>
                </p>
              </div>
            </div>
          <?php endif; ?>

          <?php if(get_next_post()): ?>
            <div data-aos="zoom-in-left" data-aos-duration="2600" class="article-2">
              <a href="<?php echo get_permalink( $next->ID ); ?>">
                <img src="<?php echo get_the_post_thumbnail_url( $next->ID ); ?>" alt="<?php
                if ( get_the_post_thumbnail_caption($next->ID) )
                { echo get_the_post_thumbnail_caption($next->ID);} 
                else { echo get_the_title($next->ID);}
              ?>">
              </a>
              <a href="<?php echo get_permalink( $next->ID ); ?>">
                <div class="btn-posts btn-next"></div>
              </a>
              <div class="article-txt">
                <a href="<?php echo get_permalink( $next->ID ); ?>"><h3><?php echo $next->post_title;?></h3></a>
                <p>
                  <?php echo $next->post_excerpt; ?>
                </p>
              </div>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </section>