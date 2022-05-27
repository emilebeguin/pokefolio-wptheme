<!-- SECTION SINGLE WORK -->
<main class="single-work --darkbg">
  <div class="single-work-inside">
    <div class="container-sticky">
      <section class="sticky-one --airbg">
        <div class="sticky-one-inside">
          <div class="heading">
            <h3>Works</h3>
            <h1><?php the_title(  ) ?></h1>
          </div>
          <div class="single-work-txt">
            <div class="block-info">
              <p>Client</p>
              <div class="exp__tag">
                <div class="tag"><a href="#"><?php echo CFS()->get( 'client' ); ?></a></div>
              </div>
              <p>Services</p>
              <div class="exp__tag">

                <?php 
                    $fields = CFS()->get( 'services' );
                    foreach ( $fields as $field ):
                        
                ?>


                <div data-aos="fade-down-left" data-aos-duration="2200" class="tag"><a href="#"><?php echo $field['service']; ?></a></div>

                <?php endforeach; ?>

        
              
              </div>
              <p>Year</p>
              <div class="exp__tag">
                <div data-aos="fade-down-left" data-aos-duration="2200" class="tag"><a href="#"><?php echo CFS()->get( 'year' ); ?></a></div>
              </div>
            </div>
            <div class="block-txt">
            <?php echo CFS()->get( 'summary' ); ?>
            </div>
          </div>
        </div>
      </section>
      <div class="img-top wrapper sticky-two">
        <img src="<?php the_post_thumbnail_url(  ) ?>" alt="post thumbnail">
      </div>
    </div>
  </div>

  <section class="content single-work-inside">
    <div class="wrapper">
      <?php the_content(  ) ?>
    </div>
  </section>
</main>