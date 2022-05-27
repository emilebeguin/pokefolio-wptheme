<!-- MAIN -->
<main>
  <!-- CORE OF THE PAGE -->
  <section class="core --waterbg">

    <div class="article">
    <div class="the-article">
        <?php the_content(  ) ?>
    </div>
    </div>
    <!-- RIGHT PART (WIDGET-LIKE) -->
    <?php get_template_part('parts/shared/sidebar')?>

  </section>
  <?php get_template_part('parts/shared/talk') ?>
  <?php if(is_single()) {get_template_part('parts/blog/more');} ?>
</main>
<!-- END OF MAIN -->