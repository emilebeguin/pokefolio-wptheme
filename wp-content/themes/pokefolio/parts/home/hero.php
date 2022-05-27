<!-- HEADER HERE -->
<header class="bg --darkbg">

    <!-- NAVIGATION -->
    <?php get_template_part('parts/shared/topnav')?>

    <!-- HEADER CONTENT -->
    <div class="header">
        <img class="plongescroll" src="<?php echo CFS()->get( 'hero_image', CFS()->options->page( 'Options' ) ); ?>">
    </div>
    <div class="white waves animated"></div>
</header>