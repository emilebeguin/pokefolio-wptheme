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
                <div class="tag"><a href="#">Luminous Agency</a></div>
              </div>
              <p>Services</p>
              <div class="exp__tag">
                <div data-aos="fade-down-left" data-aos-duration="2200" class="tag"><a href="#">Marketing</a></div>
                <div data-aos="fade-down-left" data-aos-duration="2200" class="tag"><a href="#">DSLR</a></div>
                <div data-aos="fade-down-left" data-aos-duration="2200" class="tag"><a href="#">Creative photography</a>
                </div>
              </div>
              <p>Year</p>
              <div class="exp__tag">
                <div data-aos="fade-down-left" data-aos-duration="2200" class="tag"><a href="#">2019</a></div>
              </div>
            </div>
            <div class="block-txt">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam possimus commodi iste voluptates
                eligendi maxime accusantium, doloribus iure mollitia eum, incidunt quis ipsa minus illo vero fugiat
                neque, aut quibusdam.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam possimus commodi iste voluptates
                eligendi maxime accusantium, doloribus iure mollitia eum, incidunt quis ipsa minus illo vero fugiat
                neque, aut quibusdam.</p>
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