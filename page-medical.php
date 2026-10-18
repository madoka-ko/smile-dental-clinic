<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/CSS/medical.css">
  <main>
    <article>
      <section id="medical02-section">
        <div class="medical02-container">
          <div class="section-header">
            <h2 class="title">診療案内</h2>
            <p class="subtitle">Medical</p>
          </div>
          <div class="medical-grid-box">
            <!-- 4つのブロックをまとめる -->
            <div class="medical-block">
              <div class="medical-text-area bg-blue">
                <h3 class="medical-heading">安心して治療を受けられる環境</h3>
                <p class="medical-desc">
                  「スマイルデンタルクリック」では、患者様一人ひとりに合わせた治療プランを提供しています。<br>
                  当クリニックの治療は、あなたの口腔内の健康を最優先に考え、丁寧に進めていきます。<br>
                  治療においては、「治る」という信頼感をもっていただけるよう、最新の医学技術と経験豊富なスタッフが寄り添い、あなたの疑問や不安に答えます。<br>
                 当クリニックは、あなたが安心して治療を受けられるように全力を尽くします。
                </p>
              </div>
              <div class="medical-img-area">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/MEDICAL/images/top-right.jpg" alt="医師が女性患者に説明している">
              </div>
            </div>
            <div class="medical-block medical-block-reverse">
              <div class="medical-text-area bg-beige">
                <h3 class="medical-heading">痛みへの配慮</h3>
                <p class="medical-desc">
                  痛みは、歯科治療における最大の懸念事項の一つです。<br>
                  私たちは、患者様の不安や恐れを理解し、痛みを最小限に抑える治療法を採用しています。<br>
                  最新の麻酔技術や、痛みを抑える医療機器の導入により、より快適な治療体験を提供しています。<br>
                  また、治療前のカウンセリングを通じて、患者様の心理的な不安を軽減し、リラックスした状態で治療を受けていただけるように努めています。
                </p>
              </div>
              <div class="medical-img-area">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/MEDICAL/images/top-left.jpg" alt="医師がこどもに説明している">
              </div>
            </div>
          </div>
            
          </div>
          <!-- 診療項目リスト -->
          <div class="treatment-list">
            <div id="general" class="treatment-item">
              <div class="treatment-title-bar">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/tooth-chipped.png" alt="欠けた歯">
                <h4>一般歯科<span>~包括的な口腔ケア～</span></h4>
              </div>
              <p class="treatment-text">
                私たちの一般歯科治療は、虫歯や歯周病など、日常的に発生する口内の問題を対象としています。<br>
                経験豊富なスタッフが、最新の診断技術を用いて精密な診断を行い、患者様一人ひとりに合わせた治療計画を提供します。<br>
                当クリニックでは、痛みの少ない治療法を採用し、患者様が快適に治療を受けられるよう努めています。
              </p>
            </div>
            <div id="aesthetic" class="treatment-item">
              <div class="treatment-title-bar">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/tooth-clean.png" alt="きれいな歯">
                <h4>審美歯科<span>~美しさと機能性を兼ね備えた治療～</span></h4>
              </div>
              <p class="treatment-text">
                審美歯科では、歯の美しさを追求するとともに、機能的な側面も考慮した治療を行っております。<br>
                ホワイトニング、セラミッククラウン、ラミネートベニアなどの最新技術を駆使し、自然で美しい笑顔を取り戻すお手伝いをします。<br>
                個々の患者様のニーズに合わせた治療計画を立て、健康的で魅力的な口元を実現します。
              </p>
            </div>
            <div id="preventive" class="treatment-item">
              <div class="treatment-title-bar">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/toothbrush.png" alt="歯ブラシ">
                <h4>予防歯科<span>~健康な口腔環境の維持と向上～</span></h4>
              </div>
              <p class="treatment-text">
                予防歯科では、歯と口腔の健康を長期にわたって保つためのサービスを提供しています。<br>
                定期的なクリーニング、専門的な歯石除去、フッ素塗布などを通じて、虫歯や歯周病の予防に努めています。<br>
                また、患者様への教育を重視し、自宅での適切な口腔ケア方法についてもアドバイスを提供します。<br>
                健康な口腔環境の維持と向上に向けて、私たちは患者様とともに歩んでいきます。
              </p>
            </div>
          </div>

          <div class="medical-grid-box">
            <!-- 4つのブロックをまとめる -->
            <div class="medical-block">
              <div class="medical-text-area bg-beige">
                <h3 class="medical-heading">先進的な治療機器</h3>
                <p class="medical-desc">
                スマイルデンタルクリニックは、最新の治療機器を導入しています。<br>
                これにより、より正確で迅速な診断が可能となり、効率的かつ効果的な治療を提供できます。<br>
                デジタルレントゲンや3Dイメージング技術を使用し、細部まで見逃さない精密な治療を実現しています。
                </p>
              </div>
              <div class="medical-img-area">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/MEDICAL/images/under-right.jpg" alt="診察室">
              </div>
            </div>
            <div class="medical-block medical-block-reverse">
             <div class="medical-text-area bg-blue">
              <h3 class="medical-heading">革新的な治療方法</h3>
              <p class="medical-desc">
                当クリニックでは、最新の歯科治療技術を取り入れています。<br>
                これには、最小侵襲手術やレーザー治療などが含まれ、これらの術式は、従来の治療よりも回復時間が短く、痛みや不快感を軽減します。<br>
                また、修復歯科においても、自然で美しい仕上がりを実現するために、先端の材料と技術を駆使しています。
              </p>
              </div>
              <div class="medical-img-area">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/MEDICAL/images/under-left.jpg" alt="治療風景">
              </div>
            </div>
          </div>
        </div>
        </Section>
    </article>
  </main>
  
<?php get_footer(); ?>