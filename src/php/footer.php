<footer class="footer">
  <div class="footer__logo-box">
<!--            表示する画像をブラウザ幅で制御-->
      <picture class="footer__logo">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-green-small-1x.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo-green-small-2x.png 2x"
                  media="(max-width: 37.5em)"
                  src="<?php echo get_template_directory_uri(); ?>/img/logo-green-2x.png">
          <img srcset="<?php echo get_template_directory_uri(); ?>/img/logo-green-1x.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo-green-2x.png 2x" alt="Full logo" class="footer__logo">
      </picture>
  </div>
  <div class="footer__navigation">
      <ul class="footer__list">
          <li class="footer__item"><a href="#" class="footer__link">会社概要</a></li>
          <li class="footer__item"><a href="#" class="footer__link">お問い合わせ</a></li>
          <li class="footer__item"><a href="#" class="footer__link">採用</a></li>
          <li class="footer__item"><a href="#" class="footer__link">プライパシーポリシー</a></li>
          <li class="footer__item"><a href="#" class="footer__link">利用規約</a></li>
      </ul>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
