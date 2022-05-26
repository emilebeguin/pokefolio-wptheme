<!-- FOOTER -->
<footer>
  <div class="col">
    <div class="footer">
      <?php dynamic_sidebar( 'footer_1' ); ?>
    </div>
    <div class="footer">
      <div class="footer--title">Quick Links</div>
      <div class="footer--links">
      <?php wp_nav_menu([
          'menu' =>  'Footer Menu',
          'container' => false,
          'menu_class' =>  'footer__menu',
          // 'items_wrap' =>  '<ul id="%1$s" class="%2$s nav navbar-nav mr-auto">%3$s</ul>',
          // 'add_li_class'  => 'nav-item',
          // 'link_class'   => 'nav-link'
      ]); ?>
      </div>
    </div>
    <div class="footer">
      <div class="footer--title">Contact Info</div>
      <div class="footer--info">
        <div class="info">
          <i class="fa-solid fa-location-dot"></i>
          <div>1500 treat Avb, Suite 200 San Francisco, CA 9400</div>
        </div>
        <div class="info">
          <i class="fa-solid fa-envelope"></i>
          <div>pokefolio@yopmail.com</div>
        </div>
        <div class="info">
          <i class="fa-solid fa-phone"></i>
          <div>1-800-800-2299 (Support)</div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer--title">Join my newsletter</div>
      <p>Lorem Impsum dolor sit amet, consectetur adipiscing elit, sed do eludsomod tempor, incididunt.</p>
      <form action="get">
        <div class="footer--search">
          <div class="subscribe">
            <input type="text" name="subscribe-mail" id="subscribe-mail" placeholder="tiffany.milan@email.com">
          </div>
        </div>
        <button data-aos="fade-up" data-aos-duration="2600" class="button button--pink"><a href="#">Subscribe</a></button>
      </form>
    </div>    
  </div>
  <div class="footer__pink">
    <div class="copyright">Copyright @ Pikachu team, All right reserved.</div>
    <div class="footer--icone">
      <a href="<?php bloginfo('template_directory') ?>/#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="<?php bloginfo('template_directory') ?>/#"><i class="fa-brands fa-pinterest"></i></a>
      <a href="<?php bloginfo('template_directory') ?>/#"><i class="fa-brands fa-twitter"></i></a>
      <a href="<?php bloginfo('template_directory') ?>/#"><i class="fa-brands fa-instagram"></i></a>
    </div>
  </div>
</footer>
<?php get_template_part('parts/shared/scripts') ?>