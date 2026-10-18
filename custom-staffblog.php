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
            <!-- カテゴリー名を動的に表示（ブログなど） -->
            <h2 class="title">
              <?php 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo esc_html( $categories[0]->name );
                }
              ?>
            </h2>
            <p class="subtitle">Blog</p>
          </div>

          <div class="voice-area">
            <div class="card-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/news-toothアイコン.png" alt="歯のアイコン">
            </div>
            
            <div class="card-content">
              <div class="card-meta">
                <!-- 投稿日を動的に表示 -->
                <p class="card"><?php echo get_the_date('Y.m.d'); ?></p>
                <!-- 記事タイトルを動的に表示 -->
                <h2 class="voice-title"><?php the_title(); ?></h2>
              </div>
              
              <!-- 記事の本文（管理画面で入力した内容）を動的に表示 -->
              <div class="voice-text">
                <?php the_content(); ?>
              </div>
              
              <!-- 一覧へ戻るボタン（最新情報一覧ページへリンク） -->
              <a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="btn">一覧へ戻る</a>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
      
    
    </article>
  </main>
  
<?php get_footer(); ?>