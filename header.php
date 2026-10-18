<!DOCTYPE html>
<html>
  <head>
    <title>SMILE DENTAL CLINIC</title>
    <meta charset="UTF-8">
    <meta name="description" content="当院は皆様の笑顔のために患者様ひとりひとりに寄り添う歯科ケアを提供します。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/main_styles.css"> 
    <?php wp_head(); ?>
 </head>
 <body>
  <!-- ここからヘッダー -->
   <header>
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" >
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/smile-dental-clinic-high-resolution-logo-transparent.svg" alt="クリニック名">
    </a>
    <!-- ハンバーガーメニュー -->
    <button id="menu-icon" onclick="document.getElementById('nav-menu').style.display = 'block'">
      <img src="<?php echo get_template_directory_uri(); ?>/images/icon/メニューアイコン.png" alt="ハンバーガーメニューを開く">
    </button>
    <!-- ナビゲーションメニュー -->
    <div id="nav-menu">
      <button id="close" onclick="document.getElementById('nav-menu').style.display = 'none'">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/クローズアイコン.png" alt="ナビゲーションを閉じる">
      </button>
      
      <p class="menu-title">MENU</p>

      <nav>
        <ul>
          <li><a class="menu" href="<?php echo esc_url(home_url('/')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">ホーム</a></li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/#concept')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">当院について</a></li>
          <li>
            <a class="menu" href="<?php echo esc_url(home_url('/#medical-section')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">診療案内</a>
            <ul class="sub-menu">
              <li><a href="<?php echo esc_url(home_url('/medical/#general')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">一般歯科</a></li>
              <li><a href="<?php echo esc_url(home_url('/medical/#aesthetic')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">審美歯科</a></li>
              <li><a href="<?php echo esc_url(home_url('/medical/#preventive')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">予防歯科</a></li>
            </ul>
          </li>
           <li>
            <a class="menu" href="<?php echo esc_url(home_url('/#director')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">スタッフ紹介</a>
            <ul class="sub-menu">
              <li><a href="<?php echo esc_url(home_url('/#director')); ?>">院長紹介</a></li>
              <li><a href="<?php echo esc_url(home_url('/concept-menber/#staff')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">スタッフ紹介</a></li>
            </ul>
          </li>
          <li>
            <a class="menu" href="<?php echo esc_url(home_url('/#news-section')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">お知らせ</a>
          </li>
           <li>
            <a class="menu" href="<?php echo esc_url(home_url('/#contact-section')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">お問い合わせ</a>
            <ul class="sub-menu">
              <li><a href="<?php echo esc_url(home_url('/#main-visual')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">電話予約</a></li>
              <li><a href="<?php echo esc_url(home_url('/contact')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">WEBお問い合わせ</a></li>
            </ul>
          </li>
          <li><a class="menu" href="<?php echo esc_url(home_url('/#access')); ?>"onclick="document.getElementById('nav-menu').style.display = 'none'">アクセス</a></li>
        </ul>
      </nav>
    </div>
   </header>
  <!-- ヘッダーここまで -->