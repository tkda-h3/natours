<footer class="footer">
  <div class="footer__logo-box">
    <!--            表示する画像をブラウザ幅で制御-->
    <a href="/">
      <picture class="footer__logo">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-green-small-1x.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo-green-small-2x.png 2x" media="(max-width: 37.5em)" src="<?php echo get_template_directory_uri(); ?>/img/logo-green-2x.png">
        <img srcset="<?php echo get_template_directory_uri(); ?>/img/logo-green-1x.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo-green-2x.png 2x" alt="Full logo" class="footer__logo">
      </picture>
    </a>
  </div>

  <div class="footer__navigation">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'footer_menu',
      'container' => '',
      'menu_class' => 'footer__list',
    ));
    ?>

  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>