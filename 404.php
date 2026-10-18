<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/CSS/thanks_404.css">
  <main class="not-found">
    <img src="<?php echo get_template_directory_uri(); ?>/images/img/404page.png" alt="404ページ画像">
    <div class="not-found-content">
      <h1>ページが見つかりませんでした。</h1>
      <p>お探しのページは移動または削除された可能性があります。</p>
      <a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a>
    </div>
  </main>
   
 <?php get_footer(); ?>