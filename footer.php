 <!-- フッターここから -->
  <footer>
    <div class="footer-top">
    <div id="footer-left-container">
      <a class="logo" href="<?php echo get_template_directory_uri(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo/smile-dental-clinic-high-resolution-logo-transparent.svg" alt="smiledentalclinic">
      </a>
      <div class="btn-wrapper">
        <?php 
          $page = get_page_by_path('contact'); // 固定ページのスラッグを指定
          $page_url = $page ? get_permalink($page->ID) : home_url('/');
        ?>
        <a href="<?php echo esc_url($page_url); ?>" class="btn">お問い合わせはこちら &rarr;</a>
      </div>
    </div>
    <div id="footer-right-container">
      <div class="phone-info-row">
        <img class="ringer-volume" src="<?php echo get_template_directory_uri(); ?>/images/icon/Ringer-Volume.png" alt="電話のアイコン">
        <div class="tel-numbar">000-000-0000</div>
      </div>
      <div class="text02">
        8:30~12:00、14:30~17:30<br>
        （土曜 8:30~12:30）<br>
        ※水・日・祝 休診
      </div>
    </div>
    </div>
    <div id="footer-link">
      <a href="<?php echo esc_url(home_url('/#concept')); ?>">当院について</a>
      <a href="<?php echo esc_url(home_url('/#medical-section')); ?>">診療案内</a>
      <a href="<?php echo esc_url(home_url('/#director')); ?>">スタッフ紹介</a>
      <a href="<?php echo esc_url(home_url('/category/news/')); ?>">お知らせ</a>
      <a href="<?php echo esc_url(home_url('/#contact-section')); ?>">お問い合わせ</a>
      <a href="<?php echo esc_url(home_url('/#access')); ?>">アクセス</a>
    </div>
    <div id="copyright">
      <p>&copy;Smail Dental Clinic All Right Reserved.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
 </body>
</html>
