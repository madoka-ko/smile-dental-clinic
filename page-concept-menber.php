<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/CSS/concept_menber.css">
    <article>
      <!-- 当院について -->
      <section id="concept" class="concept-section">
        <div class="concept-container">
          <div class="section-header">
            <h2 class="concept-title">当院について</h2>
            <p class="concept-subtitle">Concept</p>
          </div>
          <!-- キャッチコピー -->
          <div class="concept-main-layout">
            <!-- 丸の写真 -->
            <div class="concept-photo">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/笑顔の子供.jpg" alt="歯磨きする子どもたち">
            </div>
            <div class="concept-message">
              <h3 class="concept-catch-main">～デンタルハーモニー～</h3>
              <p class="concept-catch-sub">日常生活に自然に溶け込む<br>快適な歯科体験</p>
              <p class="concept-text">
                歯科医院と言えば、多くの方が痛みや待ち時間による<br>ストレスを想像するかもしれません。<br>
                私たち​​は、これらの一般的な懸念を解消するために、<br>痛みのない治療法と快適な環境づくりに注力しています。<br>
                歯科医院との新たなパートナーシップを築き、<br>皆さまの生活を豊かにするお手伝いをすることが私たちの使命です。
              </p>
            </div>  
          </div>
          <!-- CONCEPTポイント -->
          <div class="concept-point-area">
            <div class="point-item">
              <div class="point-heading">
              <h3 class="point-num"><span>Point.</span>01</h3>
              <h3 class="point-title">痛みの少ない治療</h3>
              </div>
              <p class="point-desc">当院では技術革新と患者さまの快適さを常に考慮し、最新の治療技術を取り入れ痛みを最小限に抑える治療方法を採用しています。<br>最新の麻酔技術や、痛みを軽減する治療機器の導入より、より快適な治療体験を提供します。</p>
            </div>
            <div class="point-item">
              <div class="point-heading">
              <h3 class="point-num"><span>Point.</span>02</h3>
              <h3 class="point-title">快適な環境作り</h3>
              </div>
              <p class="point-desc">当院では、患者様一人ひとりに合わせた治療プランを提供しています。歯科診療が生活の一部として自然に調和するように努めます。<br>最新の医学知識と経験豊富なスタッフが寄り添い、あなたの疑問や不安に応えます。</p>
              </div>
             <div class="point-item">
              <div class="point-heading">
              <h3 class="point-num"><span>Point.</span>03</h3>
              <h3 class="point-title">効率的な予約システム</h3>
              </div>
              <p class="point-desc">当院では待ち時間を短縮するために効率的な予約システムを導入しています。<br>患者様に合わせた治療時間に合わせ時間確保することで、待ち時間をなるべく少なくし患者さまの歯科治療に対する不安を軽減できるように努めています。</p>
            </div>
          </div>
        </div>
        <div class="section-divider">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/歯ブラシ.jpg" alt="歯ブラシの仕切り">
        </div>
      </section>

      <!-- 医師・スタッフ紹介（院長紹介） -->
      <section id="director" class="director-section">
        <div class="director-container">
          
          <!-- セクション見出し -->
          <div class="section-staff-header">
            <h2 class="concept-title">医師・スタッフ紹介</h2>
            <p class="concept-subtitle">Member</p>
          </div>

          <!-- メインコンテンツ（左：写真＆名前 / 右：経歴・資格） -->
          <div class="director-main-content">
            <!-- 左側：院長写真と名前 -->
            <div class="director-profile-col">
              <div class="director-photo-circle">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/incho.jpg" alt="院長 佐藤健一">
              </div>
              <p class="director-name-area">
                <span class="director-position">院長</span>
                <span class="director-fullname">佐藤 健一</span>
                <span class="director-ruby">（さとう けんいち）</span>
              </p>
            </div>

            <!-- 右側：経歴・資格・専門分野 -->
            <div class="director-info-col">
              <!-- 経歴 -->
              <div class="info-block">
                <h3 class="info-heading">経 歴</h3>
                <ul class="info-list">
                  <li>1993年 - 神奈川県立横浜高校 卒業</li>
                  <li>1999年 - 東京医科歯科大学 歯学部 卒業</li>
                  <li>1999年 - 横浜市内の歯科医院にて勤務</li>
                  <li>2004年 - 英国ロンドン大学 歯学部にて研究員</li>
                  <li>2008年 - アメリカ合衆国 カリフォルニア州にて歯科医院勤務</li>
                  <li>2011年 - SMILE Dental Clinic院長</li>
                </ul>
              </div>

              <!-- 資格・専門分野 -->
              <div class="info-block">
                <h3 class="info-heading">資格・専門分野</h3>
                <ul class="info-list">
                  <li>最小侵襲歯科治療</li>
                  <li>痛みの少ない治療技術</li>
                  <li>先進的な歯科材料の研究と応用</li>
                  <li>歯科医師免許</li>
                  <li>臨床歯科研究の国際認定</li>
                  <li>日本語（Japanese） / 英語（English）</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <!-- 院長よりメッセージ -->
          <div class="director-message-box">
            <h3 class="message-title">院長よりメッセージ</h3>
            <p class="message-text">
              私は院長として、皆様に安心と信頼を提供することに全力を尽くしています。<br>
              私たちのクリニックでは、歯科治療を単なる医療行為ではなく、皆様の生活の質を高めるパートナーシップと捉えています。<br>
              私たちの目標は、歯科治療に関する不安や悩みを解消し、皆様が快適に治療を受けられる環境を提供することです。<br>
              このために、私たちは最新の技術を取り入れ痛みの少ない治療法と、リラックスできる空間の提供、待ち時間の短縮に努め患者さま一人ひとりのニーズに応じた治療計画を立てています。<br>
              「デンタルハーモニー」という名のもと、私たちは皆様の健康と幸福を第一に考え、日々の生活に溶け込むような治療を目指しています。<br>
              歯科医院が皆様の生活に自然に調和し、安心して通える場所であることを心がけています。<br>
              そして、皆様が笑顔でクリニックを訪れ笑顔で帰られることを最大の喜びとしています。<br>
              皆様の口腔健康を守り、生活を豊かにするお手伝いができることを光栄に思います。<br>
              何か不安な点やご質問があれば、いつでも私たちにお声かけください。<br>
              皆様の健康な笑顔のために、私たちは常にここにいます。<br>
              心よりお待ちしております。
            </p>
          </div>
        </div>

        <!-- スタッフ紹介 -->
          <div id="staff" class="staff-list-area">
            <div class="staff-item">
              <div class="staff-photo-circle">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/sato.jpg" alt="佐藤隆">
              </div>
              <div class="staff-info-col">
                <h3 class="staff-heading">
                  <span class="staff-position">一般歯科担当医</span>
                  <span class="staff-name">佐藤 隆</span>
                  <span class="staff-ruby">（さとう たかし）</span>
                </h3>
                <p class="staff-desc">治療の説明を丁寧に行い、患者様の質問に細かく答えることです。知識が不安を和らげると信じています。</p>
              </div>
           </div>

            <div class="staff-item">
              <div class="staff-photo-circle">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/ito.jpg" alt="伊東美咲">
              </div>
              <div class="staff-info-col">
                <h3 class="staff-heading">
                  <span class="staff-position">審美歯科担当医</span>
                  <span class="staff-name">伊東 美咲</span>
                  <span class="staff-ruby">（いとう みさき）</span>
                </h3>
                <p class="staff-desc">子供の頃、虫歯治療で苦しんだ経験から、他の人をその痛みから救いたいと思いました。</p>
              </div>
            </div>

            <div class="staff-item">
              <div class="staff-photo-circle">
                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/yamada.jpg" alt="山田雄大">
              </div>
              <div class="staff-info-col">
                <h3 class="staff-heading">
                  <span class="staff-position">矯正歯科担当医</span>
                  <span class="staff-name">山田 雄大</span>
                  <span class="staff-ruby">（やまだ ゆうだい）</span>
                </h3>
                <p class="staff-desc">家族と山登りに出かけることが多いです。自然の中で過ごす時間が、私のエネルギーの源です。</p>
              </div>
            </div>

            <div class="staff-item">
              <div class="staff-photo-circle">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/suzuki.jpg" alt="鈴木理恵">
              </div>
              <div class="staff-info-col">
                <h3 class="staff-heading">
                  <span class="staff-position">予防歯科担当医</span>
                  <span class="staff-name">鈴木 理恵</span>
                  <span class="staff-ruby">（すずき りえ）</span>
                </h3>
                <p class="staff-desc">まずは日々の小さな習慣が大切ということ。歯磨き一つをとっても、正しい方法で行うことが口腔健康につながります。</p>
              </div>
            </div>

            <div class="staff-item">
              <div class="staff-photo-circle">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/tanaka.jpg" alt="田中陽子">
              </div>
              <div class="staff-info-col">
                <h3 class="staff-heading">
                  <span class="staff-position">歯科衛生士</span>
                  <span class="staff-name">田中 陽子</span>
                  <span class="staff-ruby">（たなか ようこ）</span>
                </h3>
                <p class="staff-desc">週末に公園でヨガをすることです。自然の中でリフレッシュすると、患者様にもその穏やかな気持ちを伝えられるように感じます。</p>
              </div>
            </div>

            <div class="staff-item">
              <div class="staff-photo-circle">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/CONCEPT_MEMBER/img/kato.jpg" alt="加藤綾音">
              </div>
              <div class="staff-info-col">
                <h3 class="staff-heading">
                  <span class="staff-position">歯科衛生士</span>
                  <span class="staff-name">加藤 綾音</span>
                  <span class="staff-ruby">（かとう あやね）</span>
                </h3>
                <p class="staff-desc">休日はアクティブに出かけることが多いです。春夏秋冬、それぞれの季節でアウトドアを楽しんでいます。</p>
              </div>
            </div>
          </div>    
      </section>
    </article>

<?php get_footer(); ?>