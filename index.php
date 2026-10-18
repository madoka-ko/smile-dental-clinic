<!DOCTYPE html>
<html>
  <head>
    <title>SMILE DENTAL CLINIC</title>
    <meta charset="UTF-8">
    <meta name="description" content="当院は皆様の笑顔のために患者様ひとりひとりに寄り添う歯科ケアを提供します。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/main_styles.css">
 </head>
 <body>
  <!-- ここからヘッダー -->
   <header>
    <a class="logo" href="index.html" >
      <img src="images/logo/smile-dental-clinic-high-resolution-logo-transparent.svg" alt="クリニック名">
    </a>
    <!-- ハンバーガーメニュー -->
    <button id="menu-icon" onclick="document.getElementById('nav-menu').style.display = 'block'">
      <img src="images/icon/メニューアイコン.png" alt="ハンバーガーメニューを開く">
    </button>
    <!-- ナビゲーションメニュー -->
    <div id="nav-menu">
      <button id="close" onclick="document.getElementById('nav-menu').style.display = 'none'">
        <img src="images/icon/クローズアイコン.png" alt="ナビゲーションを閉じる">
      </button>
      
      <p class="menu-title">MENU</p>

      <nav>
        <ul>
          <li><a class="menu" href="index.html"onclick="document.getElementById('nav-menu').style.display = 'none'">ホーム</a></li>
          <li><a class="menu" href="index.html#concept"onclick="document.getElementById('nav-menu').style.display = 'none'">当院について</a></li>
          <li>
            <a class="menu" href="index.html#medical-section"onclick="document.getElementById('nav-menu').style.display = 'none'">診療案内</a>
            <ul class="sub-menu">
              <li><a href="MEDICAL/medical.html#general"onclick="document.getElementById('nav-menu').style.display = 'none'">一般歯科</a></li>
              <li><a href="MEDICAL/medical.html#aesthetic"onclick="document.getElementById('nav-menu').style.display = 'none'">審美歯科</a></li>
              <li><a href="MEDICAL/medical.html#preventive"onclick="document.getElementById('nav-menu').style.display = 'none'">予防歯科</a></li>
            </ul>
          </li>
           <li>
            <a class="menu" href="index.html#director"onclick="document.getElementById('nav-menu').style.display = 'none'">スタッフ紹介</a>
            <ul class="sub-menu">
              <li><a href="index.html#director">院長紹介</a></li>
              <li><a href="CONCEPT_MEMBER/concept-menber.html#director"onclick="document.getElementById('nav-menu').style.display = 'none'">スタッフ紹介</a></li>
            </ul>
          </li>
          <li>
            <a class="menu" href="index.html#news-section"onclick="document.getElementById('nav-menu').style.display = 'none'">お知らせ</a>
            <ul class="sub-menu">
              <li><a href="NEWS/newslist.html#news"onclick="document.getElementById('nav-menu').style.display = 'none'">お知らせ</a></li>
              <li><a href="NEWS/newslist.html#voice"onclick="document.getElementById('nav-menu').style.display = 'none'">患者様の声</a></li>
              <li><a href="NEWS/newslist.html#bolg"onclick="document.getElementById('nav-menu').style.display = 'none'">スタッフブログ</a></li>
            </ul>
          </li>
           <li>
            <a class="menu" href="index.html#contact-section"onclick="document.getElementById('nav-menu').style.display = 'none'">お問い合わせ</a>
            <ul class="sub-menu">
              <li><a href="index.html#main-visual"onclick="document.getElementById('nav-menu').style.display = 'none'">電話予約</a></li>
              <li><a href="CONTACT/contact.html"onclick="document.getElementById('nav-menu').style.display = 'none'">WEBお問い合わせ</a></li>
            </ul>
          </li>
          <li><a class="menu" href="index.html#access"onclick="document.getElementById('nav-menu').style.display = 'none'">アクセス</a></li>
        </ul>
      </nav>
    </div>
   </header>
  <!-- ヘッダーここまで -->
   <main>
    <article>
      <!-- メインビジュアル -->
      <section id="main-visual">
        <img class="img-2" src="images/img/待合室.png" alt="緑の植物と木目調の待合室">
        <img class="hero" src="images/img/治療風景.jpg" alt="歯科医師が治療をしている">
        <div id="main-message">
          <h1>あなたの「<span>笑顔</span>」のために<br>ひとりひとりに寄り添う歯科ケア</h1>
        </div>
        <div class="contact-phone-box">
          <div class="text01">ご予約はお電話で</div>
          <div class="phone-info-row">
            <img class="ringer-volume" src="images/icon/Ringer-Volume.png" alt="電話のアイコン">
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
          <!-- お知らせリスト -->
          <ul class="news-list">
            <li class="news-item">
              <a href="News/news-date.html" class="news-link">
                <span class="news-date">2026.5.26</span>
                <span class="news-category">お知らせ</span>
                <span class="news-text">お知らせテキスト</span>
              </a>              
            </li>
            <li class="news-item">
              <a href="News/news-date.html" class="news-link">
                <span class="news-date">2026.5.26</span>
                <span class="news-category">お知らせ</span>
                <span class="news-text">お知らせテキスト</span>
              </a>              
            </li>
            <li class="news-item">
              <a href="News/news-date.html" class="news-link">
                <span class="news-date">2026.5.26</span>
                <span class="news-category">お知らせ</span>
                <span class="news-text">お知らせテキスト</span>
              </a>              
            </li>
            <li class="news-item">
              <a href="News/news-date.html" class="news-link">
                <span class="news-date">2026.5.26</span>
                <span class="news-category">お知らせ</span>
                <span class="news-text">お知らせテキスト</span>
              </a>              
            </li> 
          </ul>
          <!-- ボタン -->
          <div class="btn-wrapper">
            <a href="News/newslist.html" class="btn">もっと見る　&rarr;</a>
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
                <img src="images/icon/tooth-chipped.png" alt="虫歯の歯">
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
                <img src="images/icon/tooth-clean.png" alt="きれいな歯">
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
                <img src="images/icon/toothbrush.png" alt="歯ブラシ">
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
            <a href="Medical/medical.html" class="btn">診療案内はこちら　&rarr;</a>
          </div>
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
              <img src="images/img/笑顔の子ども.jpg" alt="歯磨きする子どもたち">
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
            <a href="CONCEPT_MEMBER/concept-menber.html" class="btn">もっと見る　&rarr;</a>
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
                <img src="images/staff/incho.jpg" alt="院長写真">
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
            <a href="CONCEPT_MEMBER/concept-menber.html" class="btn">医師・スタッフ紹介はこちら &rarr;</a>
          </div>
        </div>
      </section>

      <!-- 患者様の声・スタッフブログコンテンツ -->
      <section id="voice-blog-section" >
        <div class="voice-blog-container">
          <div class="voice-blog-cards">
            <!-- 患者様の声 -->
            <a href="CUSTOM/customervoice.html" class="voice-blog-card voice-card">
              <div class="inner-box">
                <p>患者様の声</p>
              </div>
            </a>
            <!-- スタッフブログ -->
            <a href="CUSTOM/staffblog.html" class="voice-blog-card blog-card">
              <div class="inner-box">
                <p>スタッフブログ</p>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- ご予約・お問い合わせセクション -->
      <section id="contact-section" class="contact-section">
          <img src="images/img/PC背景2.png" alt="模様のついた背景" class="contact-bg">
          <div class="contact-container">
            <h2 class="contact-title">ご予約・お問い合わせ</h2>
            <div class="contact-inner">
              <div class="contact-phone-box">
                <div class="phone-info-row">
                  <img class="ringer-volume" src="images/icon/Ringer-Volume.png" alt="電話のアイコン">
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
                <a href="CONTACT/contact.html" class="btn">お問い合わせはこちら &rarr;</a>
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
                <img class="car-icon" src="images/icon/car.png" alt="車のアイコン">
                <div class="method-content">
                  <p class="method-title">お車でお越しの方</p>
                  <p class="method-text">
                    Smile Cityの中心部からSunshin Avenueを北へ15分<br>
                    【駐車場：クリニック敷地内 20台分のスペースあり】
                  </p>
                </div>
              </div>
              <div class="access-method">
                <img class="car-icon" src="images/icon/Shuttle-bus.png" alt="バスのアイコン">
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
                <img class="car-icon" src="images/icon/Train.png" alt="電車のアイコン">
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
          <img src="images/img/business-hours.png" alt="診療スケジュール">
        </div>
      </section>
    </article>
   </main>

  <!-- フッターここから -->
  <footer>
    <div class="footer-top">
    <div id="footer-left-container">
      <a class="logo" href="index.html">
        <img src="images/logo/smile-dental-clinic-high-resolution-logo-transparent.svg" alt="smiledentalclinic">
      </a>
      <div class="btn-wrapper">
        <a href="index.html#contact-section" class="btn">お問い合わせはこちら　&rarr;</a>
      </div>
    </div>
    <div id="footer-right-container">
      <div class="phone-info-row">
        <img class="ringer-volume" src="images/icon/Ringer-Volume.png" alt="電話のアイコン">
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
      <a href="index.html#concept">当院について</a>
      <a href="index.html#medical-section">診療案内</a>
      <a href="index.html#director">スタッフ紹介</a>
      <a href="index.html#news-section">お知らせ</a>
      <a href="index.html#contact-section">お問い合わせ</a>
      <a href="index.html#access">アクセス</a>
    </div>
    <div id="copyright">
      <p>&copy;Smail Dental Clinic All Right Reserved.</p>
    </div>
  </footer>
 </body>
</html>
