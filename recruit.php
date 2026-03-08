<?php
$page_id = 'recruit';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">採用情報</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">採用情報</h1>
            <p class="section-subtitle">Recruit</p>
            <p class="text-center" style="max-width: 700px; margin: 0 auto; line-height: 1.8;">
                私たちと一緒に、人と企業の未来を創りませんか？<br>
                キャリアブリッジでは、共に成長できる仲間を募集しています。
            </p>
        </div>
    </section>

    <!-- 募集職種 -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">募集職種</h2>
            
            <div class="grid grid-2">
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">キャリアコーディネーター</h3>
                    <p style="line-height: 1.8; margin-bottom: 15px;">
                        求職者と企業をつなぐ、やりがいのあるお仕事です。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li>求職者のカウンセリング</li>
                        <li>企業への人材提案</li>
                        <li>就業後のフォロー</li>
                    </ul>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">営業（法人向け）</h3>
                    <p style="line-height: 1.8; margin-bottom: 15px;">
                        企業の人材ニーズをヒアリングし、最適なソリューションを提案します。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li>新規顧客開拓</li>
                        <li>既存顧客フォロー</li>
                        <li>採用支援コンサルティング</li>
                    </ul>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">事務スタッフ</h3>
                    <p style="line-height: 1.8; margin-bottom: 15px;">
                        社内の業務を円滑に進めるサポート役です。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li>データ入力・書類作成</li>
                        <li>電話・来客対応</li>
                        <li>各種事務サポート</li>
                    </ul>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">システムエンジニア</h3>
                    <p style="line-height: 1.8; margin-bottom: 15px;">
                        社内システムの開発・保守を担当します。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li>Webシステム開発</li>
                        <li>データベース設計</li>
                        <li>システム保守・運用</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 働く環境 -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">働く環境</h2>
            
            <div class="grid grid-3">
                <div class="card text-center">
                    <div class="feature-icon">
                        <span>📅</span>
                    </div>
                    <h4 class="text-primary mb-15">完全週休2日制</h4>
                    <p style="line-height: 1.8;">
                        土日祝休み<br>
                        年間休日120日
                    </p>
                </div>
                
                <div class="card text-center">
                    <div class="feature-icon">
                        <span>⏰</span>
                    </div>
                    <h4 class="text-primary mb-15">フレックスタイム制</h4>
                    <p style="line-height: 1.8;">
                        働き方に合わせた<br>
                        柔軟な勤務時間
                    </p>
                </div>
                
                <div class="card text-center">
                    <div class="feature-icon">
                        <span>🏠</span>
                    </div>
                    <h4 class="text-primary mb-15">リモートワーク可</h4>
                    <p style="line-height: 1.8;">
                        職種に応じて<br>
                        在宅勤務も可能
                    </p>
                </div>
            </div>
            
            <div class="card mt-40" style="max-width: 800px; margin-left: auto; margin-right: auto;">
                <h3 class="text-primary mb-20">福利厚生</h3>
                <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                    <li>社会保険完備（健康保険、厚生年金、雇用保険、労災保険）</li>
                    <li>交通費全額支給</li>
                    <li>資格取得支援制度</li>
                    <li>社員研修制度</li>
                    <li>慶弔見舞金制度</li>
                    <li>定期健康診断</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 応募の流れ -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">応募の流れ</h2>
            <div class="grid grid-4">
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">1</span>
                    </div>
                    <h4 class="text-primary mb-10">応募</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        お問い合わせフォームまたはメールから応募
                    </p>
                </div>
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">2</span>
                    </div>
                    <h4 class="text-primary mb-10">書類選考</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        履歴書・職務経歴書による選考
                    </p>
                </div>
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">3</span>
                    </div>
                    <h4 class="text-primary mb-10">面接</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        1〜2回の面接を実施
                    </p>
                </div>
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">4</span>
                    </div>
                    <h4 class="text-primary mb-10">内定</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        条件確認後、入社日を決定
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">一緒に働きませんか？</h2>
            <p class="cta-description">
                応募に関するご質問もお気軽にお問い合わせください
            </p>
            <a href="contact.php" class="btn btn-white btn-large">応募・お問い合わせ</a>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
