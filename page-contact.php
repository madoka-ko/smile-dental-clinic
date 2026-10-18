<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/CSS/contact.css">

  <!-- お問い合わせフォーム -->
  <main>
    <article>
      <!-- TOPview -->
      <section id="topview">
        <div class="topview-wrapper">
          <div class="gradient-overlay"></div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img/問診中のstaff.img.jpg" alt="問診しているスタッフ">
            <!-- ページ見出し＆リード文 -->
          <div class="topview-content">
            <div class="contact-page-header">
              <h2 class="contact-page-title">お問い合わせ</h2>
              <p class="contact-page-subtitle">CONTACT US</p>
            </div>
            <!-- リード文テキスト -->
            <div id="topmessage">
              <p>迅速な対応で、あなたの不安を解消します。<br>
                お困りのことがあれば、いつでもお気軽にご連絡ください。<br>
                痛みやその他のお悩みに対して、スピーディに対応いたします。<br>
                下記のフォームをご利用いただくか、より迅速な対応をご希望の場合は、<br>電話ボタンをクリックして直接ご連絡ください。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-page-section">
        <div class="contact-page-container">
          <!-- フォーム本体（青い枠線デザイン） -->
          <form action="<?php echo esc_url(home_url('/thanks/')); ?>" method="POST" class="contact-form-box">
            <!-- お名前 -->
             <div class="form-row">
              <div class="form-label">
                <span>お名前</span>
                <span class="required-badge">必須</span>
              </div>
              <div class="form-input">
                <input type="text" name="name" placeholder="入力してください" required>
              </div>
             </div>

            <!-- メールアドレス -->
             <div class="form-row">
              <div class="form-label">
                <span>メールアドレス</span>
                <span class="required-badge">必須</span>
              </div>
              <div class="form-input">
                <input type="email" name="email" placeholder="入力してください" required>
              </div>
             </div>

            <!-- 電話番号 -->
             <div class="form-row">
              <div class="form-label">
                <span>電話番号</span>
                <span class="required-badge">必須</span>
              </div>
              <div class="form-input">
                <input type="tel" name="tel" placeholder="入力してください" required>
              </div>
             </div>

            <!-- ご来院の目的 -->
             <div class="form-row">
              <div class="form-label">
                <span>ご来院の目的<br><small>（複数回答可）</small></span>
                <span class="required-badge">必須</span>
              </div>
              <div class="form-input checkbox-group">
                <label><input type="checkbox" name="purpose" value="緊急の処置"> 緊急の処置</label>
                <label><input type="checkbox" name="purpose" value="チェックアップ"> チェックアップ</label>
                <label><input type="checkbox" name="purpose" value="クリーニング"> クリーニング</label>
                <label><input type="checkbox" name="purpose" value="審美歯科治療の相談"> 審美歯科治療の相談</label>
                <label><input type="checkbox" name="purpose" value="矯正歯科治療の相談"> 矯正歯科治療の相談</label>
              </div>
             </div>

            <!-- 症状の有無 -->
             <div class="form-row">
              <div class="form-label">
                <span>症状の有無<br><small>（複数回答可）</small></span>
                <span class="required-badge">必須</span>
              </div>
              <div class="form-input checkbox-group">
                <label><input type="checkbox" name="symptom" value="痛み"> 痛み</label>
                <label><input type="checkbox" name="symptom" value="腫れ"> 腫れ</label>
                <label><input type="checkbox" name="symptom" value="出血"> 出血</label>
              </div>
             </div>

            <!-- ご希望の回答方法 -->
             <div class="form-row">
              <div class="form-label">
                <span>ご希望の回答方法</span>
                <span class="required-badge">必須</span>
              </div>
              <div class="form-input radio-group">
                <label><input type="radio" name="reply_method" value="お電話" checked> お電話</label>
                <label><input type="radio" name="reply_method" value="メール"> メール</label>
              </div>
             </div>

            <!-- その他 -->
             <div class="form-row">
              <div class="form-label">
                <span>その他</span>
              </div>
              <div class="form-input">
                <textarea name="message" placeholder="入力してください" rows="6"></textarea>
              </div>
             </div>

            <!-- 送信ボタンエリア -->
            <div class="form-submit-area">
              <button type="submit" class="submit-btn">送信 &rarr;</button>
            </div>
          </form>
        </div>
      </section>
    </article>
  </main>

 <?php get_footer(); ?>