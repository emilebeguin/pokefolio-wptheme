<!-- SECTION ABOUT ME -->
<section class="about-us --airbg" id="anchor">
    <div class="wrapper">
        <div class="about">
            <div class="about__image">
                <img data-aos="fade-up" data-aos-duration="3000"  alt="about" src="<?php echo CFS()->get( 'about_image', CFS()->options->page( 'Options' ) ); ?>">
            </div>
            <div class="about__text">
                <h3>About Me</h3>
                <h1><?php echo CFS()->get( 'about_introduction', CFS()->options->page( 'Options' ) ); ?></h1>
                <?php echo CFS()->get( 'about_presentation', CFS()->options->page( 'Options' ) ); ?>
                <button data-aos="fade-up" data-aos-duration="2600" class="button button--pink"><a href="<?php bloginfo('template_directory') ?>/about">Learn
                        More</a></button>
            </div>
        </div>
    </div>
</section>