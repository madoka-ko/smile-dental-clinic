 <?php get_header(); ?>

 <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/CSS/news_blog_voice.css">
  
 <main>
    <article>
      <section class="newslist-container">
        <div class="section-header">
          <h2 class="title">最新情報</h2>
          <p class="subtitle">News</p>
        </div>
        <!-- フィルタータブ -->
        <div class="filter-tabs">
          <a href="#all" class="tab active" data-category="all">すべて</a>
          <a href="#blog" class="tab" data-category="blog">ブログ</a>
          <a href="#news" class="tab" data-category="news">お知らせ</a>
          <a href="#voice" class="tab" data-category="customer-voice">患者様の声</a>
        </div>
       

          <!-- 記事一覧 -->
        <div id="news-list-container">

          <?php
            // 全カテゴリーから投稿を取得する設定
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 10, // 1ページに表示する最大件数（必要に応じて変更してください）
              'paged'          => $paged,
            );
            $all_posts_query = new WP_Query( $args );
          ?>

          <?php if ( $all_posts_query->have_posts() ) : ?>
            <?php while ( $all_posts_query->have_posts() ) : $all_posts_query->the_post(); ?>
              <!-- 記事の種類（カテゴリーのスラッグ）を data出力 -->
              <?php 
                $cat = get_the_category();
                $cat_slug = !empty($cat) ? $cat[0]->slug : '';
              ?>
              <div class="news-card" data-category="<?php echo esc_attr($cat_slug); ?>">
                <div class="news-icon">
                  <?php 
                    if (!empty($cat)) {
                      $cat_slug = $cat[0]->slug; // カテゴリーのスラッグを取得
        
                      // カテゴリーのスラッグに応じてアイコンを分岐
                      if ($cat_slug === 'voice') {
                        // 「患者様の声」カテゴリーの場合
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/icon/humanアイコン.png" alt="人のアイコン">';
                      } elseif ($cat_slug === 'blog') {
                        // 「ブログ」カテゴリーの場合
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/icon/news-toothアイコン.png" alt="歯のアイコン">';
                      } else {
                        // その他の場合（お知らせなど）
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/icon/news-toothアイコン.png" alt="歯のアイコン">';
                      }
                    }
                  ?>
                </div>
                <div class="news-content">
                  <div class="news-meta">
                    <p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <p class="news-label">
                      <?php 
                        if (!empty($cat)) {
                          echo esc_html($cat[0]->name);
                        }
                      ?>
                    </p>
                  </div>
                  <h2 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="news-text">
                    <?php 
                        echo wp_trim_words( get_the_content(), 100, '...' ); 
                    ?>  
                  </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn">もっと見る</a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p>現在情報はありません。</p>
          <?php endif; ?>

        </div>

       <!-- ページネーション（カスタムクエリ用のページャー） -->
        <div class="pagenation">
          <?php
            // カスタムクエリに対応したページネーション
            echo paginate_links(array(
              'total'     => $all_posts_query->max_num_pages,
              'current'   => $paged,
              'mid_size'  => 2,
              'prev_text' => __('<< 前へ'),
              'next_text' => __('次へ >>'),
            ));
          ?>
        </div>
      </section>
    </article>
  </main>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.filter-tabs .tab');
    const cards = document.querySelectorAll('.news-card');

    tabs.forEach(tab => {
      tab.addEventListener('click', function(e) {
        e.preventDefault(); // ページ内リンクのデフォルト動作を防ぐ

        // 1. すべてのタブから active クラスを外して、クリックされたタブに付与
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        // 2. 選択されたカテゴリーを取得
        const category = this.getAttribute('data-category');

        // 3. 記事カードをフィルターして表示・非表示を切り替え
        cards.forEach(card => {
          const cardCategory = card.getAttribute('data-category');
          if (category === 'all' || cardCategory === category) {
            card.classList.remove('is-hidden');
          } else {
            card.classList.add('is-hidden');
          }
        });
      });
    });
  });
</script>
 
<?php get_footer(); ?>