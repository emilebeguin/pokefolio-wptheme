
<!-- HEADER HERE -->
<header style="background-image: url(<?php the_post_thumbnail_url(  ) ?>);">
    <!-- NAVIGATION -->
    <nav class="nav">
      <a href="index.html" class="nav__logo"><img src="img/logosimple-lightbg.png"></a>
      <div class="nav__menu">
        <a href="index.html">Accueil</a>
        <a href="services.html">Services</a>
        <a href="#">Projets</a>
        <a href="blog.html">Blog</a>
        <a href="about.html">À propos</a>
      </div>
    </nav>
    
    <!-- MARKER -->
    <div class="marker">
      <!-- TITLE OF THE ARTICLE -->
      <div class="__text">
        <?php the_title(  ) ?>
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