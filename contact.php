<?php
$page_id = 'contact';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">お問い合わせ</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">お問い合わせ</h1>
            <p class="section-subtitle">Contact Us</p>
            <p class="text-center" style="max-width: 700px; margin: 0 auto; line-height: 1.8;">
                サービスに関するご質問やご相談など、お気軽にお問い合わせください。<br>
                専門のスタッフが丁寧にご対応いたします。
            </p>
        </div>
    </section>

    <!-- お問い合わせ方法 -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <div class="grid grid-2">
                <div class="card text-center">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">📧 お問い合わせフォーム</h3>
                    <p style="line-height: 1.8; margin-bottom: 20px;">
                        下記フォームよりお問い合わせください。<br>
                        通常、1〜2営業日以内にご返信いたします。
                    </p>
                    <a href="#form" class="btn btn-primary">フォームへ移動</a>
                </div>
                <div class="card text-center">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">📞 お電話でのお問い合わせ</h3>
                    <p class="tel-number" style="font-size: 2rem; font-weight: 700; color: var(--color-primary); margin: 20px 0;">
                        <a href="tel:<?php echo str_replace('-', '', COMPANY_TEL); ?>"><?php echo h(COMPANY_TEL); ?></a>
                    </p>
                    <p style="color: var(--color-text-light);">
                        <?php echo h(BUSINESS_HOURS); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section id="form" class="section">
        <div class="container">
            <div class="contact-form">
                <h2 class="text-center mb-40" style="font-size: 1.8rem; color: var(--color-primary);">お問い合わせフォーム</h2>
                
                <form action="contact_send.php" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label required">お名前</label>
                            <input type="text" id="name" name="name" class="form-control" required placeholder="山田 太郎">
                        </div>
                        
                        <div class="form-group">
                            <label for="furigana" class="form-label required">フリガナ</label>
                            <input type="text" id="furigana" name="furigana" class="form-control" required placeholder="ヤマダ タロウ">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label required">メールアドレス</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="example@email.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="tel" class="form-label">電話番号</label>
                            <input type="tel" id="tel" name="tel" class="form-control" placeholder="03-1234-5678">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="category" class="form-label required">お問い合わせ種別</label>
                        <select id="category" name="category" class="form-control" required>
                            <option value="">選択してください</option>
                            <option value="jobseeker">求職者向けサービスについて</option>
                            <option value="company">企業向けサービスについて</option>
                            <option value="recruit">採用について</option>
                            <option value="other">その他</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label required">件名</label>
                        <input type="text" id="subject" name="subject" class="form-control" required placeholder="お問い合わせの件名を入力してください">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label required">お問い合わせ内容</label>
                        <textarea id="message" name="message" class="form-control" required placeholder="お問い合わせ内容を詳しくご記入ください" rows="8"></textarea>
                        <span class="form-help">※できるだけ詳しくご記入いただけますと、スムーズにご対応できます。</span>
                    </div>
                    
                    <div class="privacy-agreement">
                        <div class="form-check">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy" class="form-check-label">
                                <a href="privacy.php" target="_blank" style="color: var(--color-primary); text-decoration: underline;">個人情報保護方針</a>に同意する
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-large">送信する</button>
                        <button type="reset" class="btn btn-outline btn-large">リセット</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- 注意事項 -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <div class="card" style="max-width: 800px; margin: 0 auto;">
                <h3 class="text-primary mb-20">お問い合わせの際の注意事項</h3>
                <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                    <li>お問い合わせいただいた内容には、1〜2営業日以内にご返信いたします。</li>
                    <li>土日祝日にいただいたお問い合わせは、翌営業日以降の対応となります。</li>
                    <li>お問い合わせ内容によっては、お時間をいただく場合がございます。</li>
                    <li>ご入力いただいた個人情報は、お問い合わせ対応の目的のみに使用いたします。</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<script src="<?php echo js_url('form-validation.js'); ?>"></script>

<?php include 'inc/footer.php'; ?>
