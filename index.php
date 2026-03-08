<?php
$page_id = 'index';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- ヒーローセクション -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">あなたの可能性と、<br>企業の未来をつなぐ。</h1>
            <p class="hero-subtitle">
                人と企業、それぞれの成長を支える最適なマッチングを。<br>
                キャリアブリッジは、確かな実績と信頼で、新しい働き方を創造します。
            </p>
            <div class="btn-group btn-group-center">
                <a href="service.php" class="btn btn-white btn-large">サービス内容を見る</a>
                <a href="contact.php" class="btn btn-accent btn-large">お問い合わせ</a>
            </div>
        </div>
    </section>

    <!-- 会社の強み・特徴 -->
    <section class="section features">
        <div class="container">
            <h2 class="section-title">キャリアブリッジの3つの強み</h2>
            <p class="section-subtitle">確かな実績と信頼で、お客様の成長を支えます</p>
            
            <div class="grid grid-3">
                <div class="card feature-item fade-in">
                    <div class="feature-icon">
                        <span>📊</span>
                    </div>
                    <h3 class="feature-title">豊富な実績と信頼</h3>
                    <p class="feature-description">
                        創業以来、1,200社以上の企業様との取引実績。大手企業から中小企業まで幅広い業界・職種に対応しています。
                    </p>
                </div>
                
                <div class="card feature-item fade-in">
                    <div class="feature-icon">
                        <span>👥</span>
                    </div>
                    <h3 class="feature-title">きめ細やかなサポート</h3>
                    <p class="feature-description">
                        専任コーディネーターが就業前から就業中まで一貫してサポート。定期的なフォローアップで安心して働けます。
                    </p>
                </div>
                
                <div class="card feature-item fade-in">
                    <div class="feature-icon">
                        <span>📚</span>
                    </div>
                    <h3 class="feature-title">充実の研修制度</h3>
                    <p class="feature-description">
                        ビジネスマナーからPC研修、専門スキルまで。無料で受講できる研修プログラムが充実しています。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス概要 -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">サービス内容</h2>
            <p class="section-subtitle">求職者の方も、企業の方も、最適なソリューションを提供します</p>
            
            <div class="grid grid-2">
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.8rem;">求職者の方へ</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li><strong>人材派遣サービス</strong><br>事務・IT・営業・製造・医療介護など幅広い職種</li>
                        <li><strong>紹介予定派遣</strong><br>派遣期間を経て正社員を目指せる</li>
                        <li><strong>キャリアサポート</strong><br>無料スキルアップ研修・キャリアカウンセリング</li>
                    </ul>
                    <div class="mt-30">
                        <a href="service.php#jobseeker" class="btn btn-primary">詳しく見る</a>
                    </div>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.8rem;">企業の方へ</h3>
                    <ul style="list-style: disc; padding-left: 20px; line-height: 2;">
                        <li><strong>人材派遣サービス</strong><br>短期・長期派遣、即戦力人材のご紹介</li>
                        <li><strong>人材紹介サービス</strong><br>正社員・契約社員採用支援</li>
                        <li><strong>採用コンサルティング</strong><br>採用戦略立案・求人広告最適化</li>
                    </ul>
                    <div class="mt-30">
                        <a href="service.php#company" class="btn btn-primary">詳しく見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 実績・数字で見るキャリアブリッジ -->
    <section class="stats">
        <div class="container">
            <h2 class="section-title" style="color: white;">数字で見るキャリアブリッジ</h2>
            <div class="stats-grid">
                <div class="stat-item fade-in">
                    <div class="stat-number">15,000+</div>
                    <div class="stat-label">累計就業者数</div>
                </div>
                <div class="stat-item fade-in">
                    <div class="stat-number">1,200+</div>
                    <div class="stat-label">取引企業数</div>
                </div>
                <div class="stat-item fade-in">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">継続就業率</div>
                </div>
                <div class="stat-item fade-in">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">満足度</div>
                </div>
            </div>
        </div>
    </section>

    <!-- お知らせ・ニュース -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">お知らせ</h2>
            <p class="section-subtitle">最新のニュースをお届けします</p>
            
            <ul class="news-list">
                <li class="news-item fade-in">
                    <time class="news-date" datetime="2024-03-15">2024.03.15</time>
                    <div class="news-title">
                        <a href="news-single.php?id=1">ゴールデンウィーク期間中の営業について</a>
                    </div>
                </li>
                <li class="news-item fade-in">
                    <time class="news-date" datetime="2024-03-01">2024.03.01</time>
                    <div class="news-title">
                        <a href="news-single.php?id=2">大阪支店オープンのお知らせ</a>
                    </div>
                </li>
                <li class="news-item fade-in">
                    <time class="news-date" datetime="2024-02-20">2024.02.20</time>
                    <div class="news-title">
                        <a href="news-single.php?id=3">「働きがいのある会社」ランキングに選出されました</a>
                    </div>
                </li>
            </ul>
            
            <div class="text-center mt-40">
                <a href="news.php" class="btn btn-outline">お知らせ一覧</a>
            </div>
        </div>
    </section>

    <!-- CTA（お問い合わせ） -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">まずはお気軽にご相談ください</h2>
            <p class="cta-description">
                求職者の方も、企業の方も、お問い合わせをお待ちしております。<br>
                専門のスタッフが丁寧にご対応いたします。
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
