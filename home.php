<?php get_header();?>
   <main>
    <article>
      <!-- メインビジュアル -->
      <section id="main-visual">
        <img class="img-2" src="<?php echo get_template_directory_uri(); ?>/images/img/待合室.png" alt="緑の植物と木目調の待合室">
        <img class="hero" src="<?php echo get_template_directory_uri(); ?>/images/img/治療風景.jpg" alt="歯科医師が治療をしている">
        <div id="main-message">
          <h1>あなたの「<span>笑顔</span>」のために<br>ひとりひとりに寄り添う歯科ケア</h1>
        </div>
        <div class="contact-phone-box">
          <div class="text01">ご予約はお電話で</div>
          <div class="phone-info-row">
            <img class="ringer-volume" src="<?php echo get_template_directory_uri(); ?>/images/icon/Ringer-Volume.png" alt="電話のアイコン">
            <div class="tel-numbar">000-000-0000</div>
          </div>
          <div class="text02">8:30~12:00　14:30~17:30<br>(土曜 8:30~12:30)<br>※水・日・祝　休診</div>
        </div>
      </section>

      <!-- ニュース -->
      <section id="news-section">
        <div class="news-container">
          <div class="section-header">
            <h2 class="title">最新情報</h2>
            <p class="subtitle">News</p>
          </div>
          <ul class="news-list">
            <?php
          // お知らせリスト(最新4件取得)
            $args = array(
              'posts_per_page' => 4,  // 表示する件数
              'post_type'      => 'post',  //通常の投稿(ブログ等含む最新情報）
              'orderby'        =>'date',  //日付順
              'order'          =>'DESC'   //新着順
            );
            $news_query = new WP_Query($args);
            ?>
          
            <?php if ($news_query->have_posts()) : ?>
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
              <li class="news-item">
                <a href="<?php the_permalink(); ?>" class="news-link">
                  <!-- 投稿日 -->
                  <span class="news-date"><?php echo get_the_date('Y.m.d');?></span>
                  <!-- 設定されているカテゴリーを取得 -->
                  <span class="news-category">
                    <?php
                    $category = get_the_category();
                    if (!empty($category)) {
                       echo esc_html($category[0]->name);
                    }
                    ?>
                  </span>
                  <!-- 記事のタイトル -->
                  <span class="news-text"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <li class="news-item">
                <p class="news-text">現在情報はありません。</p>
              </li>
            <?php endif; ?>
          </ul>
        
          <!-- ボタン -->
          <div class="btn-wrapper">
            <?php 
              // カートリッジのスラッグ名を指定（例: 'news'）
              $category = get_category_by_slug('news');
              if ( $category ) {
                 $category_link = get_category_link( $category->term_id );
              } else {
                 $category_link = home_url('/'); // カテゴリーが見つからない場合のフォールバック
              }
            ?>
            <a href="<?php echo esc_url($category_link); ?>" class="btn">もっと見る &rarr;</a>
          </div>
        </div>
      </section>
      <!-- ニュースここまで -->
      
      <!-- 診療案内 -->
      <section id="medical-section">
        <div class="medical-frame">
          <div class="section-header">
            <h2 class="title">診察案内</h2>
            <p class="subtitle">Medical</p>
          </div>
          <p class="medical-read">
            当院では下記の治療を行っております。<br>
            当クリニックでは痛みを最小限に抑える治療法を採用しています。<br>
            患者様の心理的な不安も軽減し、リラックスした状態で治療を受けていただけるよう努めています。
          </p>
          <!-- 3列カードコンテンツ -->
          <div class="medical-container">
            <!-- 一般歯科 -->
            <div class="medical-card-blue">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/tooth-chipped.png" alt="虫歯の歯">
              </div>
              <h3 class="card-title">一般歯科</h3>
              <p class="card-text">
              虫歯や歯周病など、日常的に発生する口内の問題を対象としています。<br>
              痛みの少ない治療法を採用し、患者様が快適に治療を受けられるよう努めています。
              </p>
            </div>
            <!-- 審美歯科 -->
            <div class="medical-card-beige">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/tooth-clean.png" alt="きれいな歯">
              </div>
              <h3 class="card-title">審美歯科</h3>
              <p class="card-text">
                歯の美しさを追求すると共に、機能的な側面も考慮した治療を行っています。<br>
                自然で美しい笑顔を取り戻すお手伝いをします。
              </p>
            </div>
            <!-- 予防歯科 -->
            <div class="medical-card-blue">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon/toothbrush.png" alt="歯ブラシ">
              </div>
              <h3 class="card-title">予防歯科</h3>
              <p class="card-text">
                歯と口腔内の健康を長期にわたって保つためのサービスを提供しています。<br>
                健康な口内環境の維持と向上に向けて、私たちは患者様とともに歩んでいきます。
              </p>
            </div>
          </div>
          <!-- ボタン -->
          <div class="btn-wrapper">
            <?php 
              $page = get_page_by_path('medical'); // 固定ページのスラッグを指定
              $page_url = $page ? get_permalink($page->ID) : home_url('/');
            ?>
            <a href="<?php echo esc_url($page_url); ?>" class="btn">診療案内はこちら &rarr;</a>
        </div>
      </section>
      <!-- 診療案内ここまで -->

      <!-- 当院について -->
      <section id="concept" class="concept-section">
        <div class="concept-container">
          <div class="section-header">
            <h2 class="concept-title">当院について</h2>
            <p class="concept-subtitle">Concept</p>
          </div>
          <!-- キャッチコピー -->
          <div class="concept-message">
            <h3 class="concept-catch-main">～デンタルハーモニー～</h3>
            <p class="concept-catch-sub">日常生活に溶け込む、快適な歯科体験</p>
            <p class="concept-text">
              歯科医院と言えば、多くの方が痛みや待ち時間によるストレスを想像するかもしれません。<br>
              私たちは、これらの一般的な懸念を解消するために、<br>
              痛みのない治療と快適な環境作りに注力しています。
            </p>
          </div>
          <!-- メインコンテンツ -->
          <div class="concept-content">
            <!-- 丸の写真 -->
            <div class="concept-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img/笑顔の子ども.jpg" alt="歯磨きする子どもたち">
            </div>
            <!-- 3つの円形テキスト -->
            <div class="concept-points">
              <div class="point-circle point-top">
                <span>痛みの少ない<br>治療</span>
              </div>
              <div class="point-circle point-bottom-left">
                <span>快適な<br>環境作り</span>
              </div>
              <div class="point-circle point-bottom-right">
                <span>効率的な<br>予約システム</span>
              </div>
            </div>
          </div>
          <!-- ボタン -->
          <div class="btn-wrapper">
             <?php 
              $page = get_page_by_path('concept-menber'); // 固定ページのスラッグを指定
              $page_url = $page ? get_permalink($page->ID) : home_url('/');
            ?>
            <a href="<?php echo esc_url($page_url); ?>" class="btn">もっと見る &rarr;</a>
          </div>
        </div>
      </section>

      <!-- ごあいさつ（医師・スタッフ紹介） -->
      <section id="director" class="greeting-section">
        <div class="greeting-container">
          <div class="section-header">
            <h2 class="title">ごあいさつ</h2>
            <p class="subtitle">Greeting</p>
          </div>
          <div class="greeting-content">
            <!-- 左側：院長の写真と名前カード -->
            <div class="director-card">
              <div class="director-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/staff/incho.jpg" alt="院長写真">
              </div>
              <div class="director-info">
                <p class="clinic-name">SMILE Dental Clinic</p>
                <p class="director-name">院長 佐藤 健一</p>
              </div>
            </div>

            <!-- 右側：あいさつ文 -->
            <div class="greeting-message-box">
              <p>
                私たちは、皆様が笑顔でクリニックを訪れ、そして笑顔で帰られることを最大の喜びとしています。<br>
                皆様の口腔健康を守り、生活を豊かにするお手伝いができることを光栄に思います。<br>
                何かご不安な点やご質問があれば、いつでも私たちにお声をかけてください。<br>
                皆様の健康な笑顔のために、私たちは常にここにいます。<br>
                心よりお待ちしております。
              </p>
            </div>
          </div>
          <!-- ボタン -->
          <div class="btn-wrapper">
           <?php 
              $page = get_page_by_path('concept-menber'); // 固定ページのスラッグを指定
              if ( $page ) {
                $page_url = get_permalink( $page->ID ) . '#director'; 
              } else {
                $page_url = home_url('/');
              }
            ?>
            <a href="<?php echo esc_url($page_url); ?>" class="btn">医師・スタッフ紹介はこちら &rarr;</a>
          </div>
        </div>
      </section>

      <!-- 患者様の声・スタッフブログコンテンツ -->
      <section id="voice-blog-section" >
        <div class="voice-blog-container">
          <div class="voice-blog-cards">
            <?php 
        // 1. 「患者様の声」カテゴリーの最新記事を1件取得
        $latest_voice = get_posts(array(
            'category_name' => 'customer-voice', // ※実際のカテゴリーのスラッグに合わせてください
            'posts_per_page' => 1,
        ));
        if($latest_voice):
            $voice_url = get_permalink($latest_voice[0]->ID);
        else:
            $voice_url = '#';
        endif;

        // 2. 「ブログ」カテゴリーの最新記事を1件取得
        $latest_blog = get_posts(array(
            'category_name' => 'blog', // ※実際のカテゴリーのスラッグに合わせてください
            'posts_per_page' => 1,
        ));
        if($latest_blog):
            $blog_url = get_permalink($latest_blog[0]->ID);
        else:
            $blog_url = '#';
        endif;
      ?>
            <!-- 患者様の声 -->
            <a href="<?php echo esc_url($voice_url); ?>" class="voice-blog-card voice-card">
              <div class="inner-box">
                <p>患者様の声</p>
              </div>
            </a>
            <!-- スタッフブログ -->
            <a href="<?php echo esc_url($blog_url); ?>" class="voice-blog-card blog-card">
              <div class="inner-box">
                <p>スタッフブログ</p>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- ご予約・お問い合わせセクション -->
      <section id="contact-section" class="contact-section">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img/PC背景2.png" alt="模様のついた背景" class="contact-bg">
          <div class="contact-container">
            <h2 class="contact-title">ご予約・お問い合わせ</h2>
            <div class="contact-inner">
              <div class="contact-phone-box">
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
              <!-- ボタン -->
              <div class="btn-wrapper">
                <?php 
                  $page = get_page_by_path('contact'); // 固定ページのスラッグを指定
                  $page_url = $page ? get_permalink($page->ID) : home_url('/');
                ?>
                <a href="<?php echo esc_url($page_url); ?>" class="btn">お問い合わせはこちら &rarr;</a>
              </div>
            </div>
          </div>  
      </section>

      <!-- 病院案内 -->
      <section id="access" class="access-section">
        <div class="access-container">
          <div class="section-header">
            <h2 class="title">病院案内</h2>
            <p class="subtitle">Access</p>
          </div>
          <!-- 地図 -->
          <div class="access-top-wrapper">
            <div class="access-map">
              <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.735176747912!2d139.7445417395899!3d35.6588957628808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1791862918443!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"
              style="border: 0" allowfullscreen="" loading="lazy">
              </iframe>
            </div>
            <!-- Access情報 -->
            <div class="access-info-box">
              <p class="access-address"><strong>住所</strong>1234 Sunshine Avenue,HappyTown,Smile City,56789</p>
              <div class="access-method">
                <img class="car-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon/car.png" alt="車のアイコン">
                <div class="method-content">
                  <p class="method-title">お車でお越しの方</p>
                  <p class="method-text">
                    Smile Cityの中心部からSunshin Avenueを北へ15分<br>
                    【駐車場：クリニック敷地内 20台分のスペースあり】
                  </p>
                </div>
              </div>
              <div class="access-method">
                <img class="car-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon/Shuttle-bus.png" alt="バスのアイコン">
                <div class="method-content">
                  <p class="method-title">バスでお越しの方</p>
                  <p class="method-text">
                    最寄りバス停：Happy Town Bus Stop<br>
                    バス路線：1，5，7番バスがHappy Town Bus Stopに停車<br>
                    バス停から北へ　Sunshin Avenueに入り徒歩3分
                  </p>
                </div>
              </div>
              <div class="access-method">
                <img class="car-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon/Train.png" alt="電車のアイコン">
                <div class="method-content">
                  <p class="method-title">電車でお越しの方</p>
                  <p class="method-text">
                  最寄り駅：Smile City Station<br>
                    駅から東へ徒歩15分　Sunshin Avenueを右へ徒歩5分
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 診療時間 -->
        <div class="schedule">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img/business-hours.png" alt="診療スケジュール">
        </div>
      </section>
    </article>
   </main>
<?php get_footer(); ?>
 