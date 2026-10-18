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
      <div id="topmessage">
        <p>スマイルデンタルクリニックにご来院いただいた患者様からの声をご紹介します。<br>
           私たちは、患者様一人ひとりの声に耳を傾け、<br>クリニックのサービスを常に改善していきたいと考えています。<br>
           ご満足いただけた点も、さらに向上させるべき点も、患者様の率直な意見として大切にしています。<br>
           当クリニックでの体験が、皆様にとってどのようなものだったかを、<br>こちらの声を通じて感じていただければ幸いです。</p>
      </div>
    </section>
    <section id="deta-section">
      <div class="deta-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="section-header">
            <!-- カテゴリー名を動的に表示（例: 患者様の声、お知らせ、ブログなど） -->
            <h2 class="title">
              <?php 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo esc_html( $categories[0]->name );
                }
              ?>
            </h2>
            <p class="subtitle">Voice of patient</p>
          </div>

          <div class="voice-area">
            <div class="card-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/humanアイコン.png" alt="人のアイコン">
            </div>
            
            <div class="card-content">
              <div class="card-meta">
                <!-- 投稿日を動的に表示 -->
                <p class="card"><?php echo get_the_date('Y.m.d'); ?></p>
                <!-- 記事タイトル（例: 佐藤太郎 様）を動的に表示 -->
                <h2 class="voice-title"><?php the_title(); ?></h2>
              </div>
              
              <!-- 本文（管理画面で入力した内容）を動的に表示 -->
              <div class="voice-text">
                <?php the_content(); ?>
              </div>
              
              <!-- 一覧へ戻るボタン：最新情報一覧ページ（/category/news/ など）へリンク -->
              <a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="btn">一覧へ戻る</a>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
      
    
    </article>
  </main>
  
<?php get_footer(); ?>