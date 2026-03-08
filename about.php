<?php
$page_id = 'about';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">会社情報</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">会社情報</h1>
            <p class="section-subtitle">About Us</p>
        </div>
    </section>

    <!-- 代表メッセージ -->
    <section id="message" class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">代表メッセージ</h2>
            <div class="card" style="max-width: 900px; margin: 0 auto;">
                <p style="line-height: 2; font-size: 1.1rem;">
                    「人材こそが企業の最大の資産である」という信念のもと、私たちは求職者一人ひとりのキャリアビジョンを大切にし、企業様には最適な人材をご紹介することを使命としています。変化の激しい時代だからこそ、人と人とのつながりを大切に、信頼される人材サービス企業として成長し続けます。
                </p>
                <p class="text-right mt-30" style="font-weight: 700;">
                    代表取締役社長　山田 太郎
                </p>
            </div>
        </div>
    </section>

    <!-- 企業理念 -->
    <section id="philosophy" class="section">
        <div class="container">
            <h2 class="section-title">企業理念</h2>
            <div class="grid grid-3">
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">ミッション</h3>
                    <p style="line-height: 1.8;">
                        人と企業の最適なマッチングを通じて、社会に新しい価値を創造する
                    </p>
                </div>
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">ビジョン</h3>
                    <p style="line-height: 1.8;">
                        誰もが自分らしく働ける社会の実現
                    </p>
                </div>
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">バリュー</h3>
                    <ul style="line-height: 1.8;">
                        <li><strong>信頼</strong>: 誠実な対応と確かな実績</li>
                        <li><strong>成長</strong>: 共に学び、共に成長する</li>
                        <li><strong>革新</strong>: 時代に合わせた柔軟なサービス</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 会社概要 -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">会社概要</h2>
            <div class="card" style="max-width: 900px; margin: 0 auto;">
                <table style="width: 100%;">
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; width: 30%; background-color: var(--color-bg-gray);">会社名</th>
                        <td style="padding: 15px;">株式会社キャリアブリッジ</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">代表者</th>
                        <td style="padding: 15px;">代表取締役社長 山田 太郎</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">設立</th>
                        <td style="padding: 15px;">2015年4月1日</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">資本金</th>
                        <td style="padding: 15px;">5,000万円</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">従業員数</th>
                        <td style="padding: 15px;">120名（2024年4月現在）</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">事業内容</th>
                        <td style="padding: 15px;">
                            一般労働者派遣事業<br>
                            有料職業紹介事業<br>
                            採用コンサルティング
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">許認可番号</th>
                        <td style="padding: 15px;">
                            派 13-000000<br>
                            13-ユ-000000
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">本社所在地</th>
                        <td style="padding: 15px;"><?php echo nl2br(h(COMPANY_ADDRESS)); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">電話番号</th>
                        <td style="padding: 15px;"><?php echo h(COMPANY_TEL); ?>（代表）</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">FAX</th>
                        <td style="padding: 15px;"><?php echo h(COMPANY_FAX); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">メールアドレス</th>
                        <td style="padding: 15px;"><?php echo h(COMPANY_EMAIL); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">URL</th>
                        <td style="padding: 15px;"><?php echo h(SITE_URL); ?></td>
                    </tr>
                    <tr>
                        <th style="padding: 15px; text-align: left; background-color: var(--color-bg-gray);">取引銀行</th>
                        <td style="padding: 15px;">
                            みずほ銀行 東京営業部<br>
                            三井住友銀行 丸の内支店
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">お問い合わせ</h2>
            <p class="cta-description">
                サービスに関するご質問やご相談は、お気軽にお問い合わせください
            </p>
            <a href="contact.php" class="btn btn-white btn-large">お問い合わせフォーム</a>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
