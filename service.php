<?php
$page_id = 'service';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">サービス内容</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">サービス内容</h1>
            <p class="section-subtitle">Services</p>
        </div>
    </section>

    <!-- 求職者向けサービス -->
    <section id="jobseeker" class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">求職者の方へ</h2>
            <p class="section-subtitle">あなたのキャリアを全力でサポートします</p>
            
            <div class="grid grid-3">
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">人材派遣サービス</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li>事務・オフィスワーク</li>
                        <li>IT・エンジニア</li>
                        <li>営業・販売</li>
                        <li>製造・軽作業</li>
                        <li>医療・介護</li>
                    </ul>
                    <p class="mt-20" style="line-height: 1.8; color: var(--color-text-light);">
                        幅広い業界・職種の中から、あなたに最適なお仕事をご紹介します。
                    </p>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">紹介予定派遣</h3>
                    <p style="line-height: 1.8; margin-bottom: 15px;">
                        派遣期間を経て正社員を目指せるサービスです。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li>企業との相性を確認できる</li>
                        <li>スキルアップしながら就業</li>
                        <li>正社員登用実績多数</li>
                    </ul>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">キャリアサポート</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2; margin-bottom: 15px;">
                        <li>無料スキルアップ研修</li>
                        <li>キャリアカウンセリング</li>
                        <li>資格取得支援制度</li>
                    </ul>
                    <p style="line-height: 1.8; color: var(--color-text-light);">
                        あなたのキャリアアップを全面的にバックアップします。
                    </p>
                </div>
            </div>
            
            <div class="text-center mt-50">
                <a href="contact.php" class="btn btn-primary btn-large">求職者の方からのお問い合わせ</a>
            </div>
        </div>
    </section>

    <!-- 企業向けサービス -->
    <section id="company" class="section">
        <div class="container">
            <h2 class="section-title">企業の方へ</h2>
            <p class="section-subtitle">最適な人材ソリューションを提供します</p>
            
            <div class="grid grid-3">
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">人材派遣サービス</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2; margin-bottom: 15px;">
                        <li>短期・長期派遣</li>
                        <li>即戦力人材のご紹介</li>
                        <li>業務委託・請負</li>
                    </ul>
                    <p style="line-height: 1.8; color: var(--color-text-light);">
                        必要な時期に、必要なスキルを持った人材を迅速にご提供します。
                    </p>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">人材紹介サービス</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2; margin-bottom: 15px;">
                        <li>正社員・契約社員採用支援</li>
                        <li>エグゼクティブサーチ</li>
                        <li>業界特化の専門人材</li>
                    </ul>
                    <p style="line-height: 1.8; color: var(--color-text-light);">
                        貴社の成長を支える優秀な人材をご紹介します。
                    </p>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">採用コンサルティング</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2; margin-bottom: 15px;">
                        <li>採用戦略立案</li>
                        <li>求人広告最適化</li>
                        <li>面接代行サービス</li>
                    </ul>
                    <p style="line-height: 1.8; color: var(--color-text-light);">
                        採用活動全体をトータルでサポートします。
                    </p>
                </div>
            </div>
            
            <div class="text-center mt-50">
                <a href="contact.php" class="btn btn-primary btn-large">企業の方からのお問い合わせ</a>
            </div>
        </div>
    </section>

    <!-- サービスの流れ -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">サービスの流れ</h2>
            <div class="grid grid-4">
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">1</span>
                    </div>
                    <h4 class="text-primary mb-10">ご相談・ヒアリング</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        お電話またはフォームからお気軽にご相談ください
                    </p>
                </div>
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">2</span>
                    </div>
                    <h4 class="text-primary mb-10">ご提案・マッチング</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        ニーズに合わせた最適なプランをご提案
                    </p>
                </div>
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">3</span>
                    </div>
                    <h4 class="text-primary mb-10">就業開始</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        万全のサポート体制でスタート
                    </p>
                </div>
                <div class="card text-center">
                    <div class="feature-icon" style="margin: 0 auto 20px;">
                        <span style="font-size: 2rem; font-weight: 700;">4</span>
                    </div>
                    <h4 class="text-primary mb-10">継続サポート</h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">
                        定期的なフォローアップで安心
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">まずはお気軽にご相談ください</h2>
            <p class="cta-description">
                求職者の方も、企業の方も、まずはお問い合わせください
            </p>
            <div class="btn-group btn-group-center">
                <a href="contact.php" class="btn btn-white btn-large">お問い合わせフォーム</a>
                <a href="tel:<?php echo str_replace('-', '', COMPANY_TEL); ?>" class="btn btn-outline btn-large" style="border-color: white; color: white;">
                    <?php echo h(COMPANY_TEL); ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
