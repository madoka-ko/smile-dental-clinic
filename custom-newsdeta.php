<?php
/*
Template Name: イベント投稿ページ
Template Post Type: post
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/CSS/news_blog_voice.css">
  <main>
    <article>
    <!-- TOPview -->
    <section id="topview">
      <div class="topview-wrapper">
        <div class="gradient-overlay"></div>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img/img_1.jpg" alt="テーブルと歯科医療器具">
      </div>
    </section>
    <section id="deta-section">
      <div class="deta-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="section-header">
            <h2 class="title"><?php echo esc_html(get_the_category_by_id(get_the_category()[0]->term_id ?? 0)); ?></h2>
            <p class="subtitle"><?php echo esc_html(get_post_type()); ?></p>
          </div>
          
          <div class="voice-area">
            <div class="card-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/news-toothアイコン.png" alt="歯のアイコン">
            </div>
            
            <div class="card-content">
              <div class="card-meta">
                <!-- 投稿日を動的に出力 -->
                <p class="card"><?php echo get_the_date('Y.m.d'); ?></p>
                <!-- 記事タイトルを動的に出力 -->
                <h2 class="voice-title"><?php the_title(); ?></h2>
              </div>
              
              <!-- 記事の本文（エディタに入力した内容）を動的に出力 -->
              <div class="voice-text">
                <?php the_content(); ?>
              </div>
              
              <!-- 一覧へ戻るボタン（投稿一覧ページやカテゴリ一覧へのURLに変更） -->
              <a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="btn">一覧へ戻る</a>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
      
    
    </article>
  </main>
  
<?php get_footer(); ?>