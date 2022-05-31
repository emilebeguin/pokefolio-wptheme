<!-- MAIN -->
<main>
  <!-- CORE OF THE PAGE -->
  <section class="core --waterbg">
    <!-- LEFT PART (CORE ARTICLE) -->
    <div class="article">
      <!-- TAGS/CATEGORIES -->
      <div class="art-categories --padbot">


        <!-- SINGLE CAT -->
        <div class="__single-cat">
          <a href="archive.html" class="--colorblack">
            <div class="full__tag">
              <i class="fa-solid fa-tags"></i>
              <div class="full__category">Marketing</div>
            </div>
          </a>

        </div>
        <!-- END OF SINGLE CAT -->

        <!-- SINGLE CAT -->
        <div class="__single-cat ">
          <a href="archive.html" class="--colorblack">
            <div class="full__tag">
              <i class="fa-solid fa-tags"></i>
              <div class="full__category">Strategy</div>
            </div>
          </a>
        </div>
        <!-- END OF SINGLE CAT -->


      </div>
      <!-- THE ARTICLE (THE CONTENT) -->
      <div class="the-article">
        <?php the_content(  ) ?>

        <div class="share">
          <div class="__title">
            Share this article
          </div>
          <div class="__socials">

          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT PART (WIDGET-LIKE) -->
    <?php get_template_part('parts/shared/sidebar')?>

  </section>

  <?php get_template_part('parts/blog/more') ?>
</main>
<!-- END OF MAIN -->