
<!-- HEADER HERE -->
<header style="background-image: url(<?php the_post_thumbnail_url(  ) ?>);">
    <!-- NAVIGATION -->
    <?php get_template_part('parts/shared/topnav') ?>
    
    <!-- MARKER -->
    <div class="marker">
      <!-- TITLE OF THE ARTICLE -->
      <div class="__text">
        <h1><?php the_title(  ) ?></h1>
      </div>
      
      <!-- DATE -->
      <div class="__date">
        <div class="__icon">
          <i class="fa-solid fa-calendar-days"></i>
        </div>
        <div class="__thedate">
          10/05/22
        </div>
      </div>
    </div>
  </header>
  <!-- END OF HEADER -->