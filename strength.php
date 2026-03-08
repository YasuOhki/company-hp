<?php
$page_id = 'strength';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">実績・強み</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">実績・強み</h1>
            <p class="section-subtitle">Strength & Achievement</p>
        </div>
    </section>

    <!-- 数字で見るキャリアブリッジ -->
    <section class="stats">
        <div class="container">
            <h2 class="section-title" style="color: white;">数字で見るキャリアブリッジ</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">15,000+</div>
                    <div class="stat-label">累計就業者数</div>
                    <p style="font-size: 0.9rem; margin-top: 10px; opacity: 0.8;">
                        2015年創業以来の実績
                    </p>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1,200+</div>
                    <div class="stat-label">取引企業数</div>
                    <p style="font-size: 0.9rem; margin-top: 10px; opacity: 0.8;">
                        大手から中小企業まで
                    </p>
                </div>
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">継続就業率</div>
                    <p style="font-size: 0.9rem; margin-top: 10px; opacity: 0.8;">
                        派遣スタッフの満足度
                    </p>
                </div>
                <div class="stat-item">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">満足度</div>
                    <p style="font-size: 0.9rem; margin-top: 10px; opacity: 0.8;">
                        スタッフアンケート結果
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3つの強み -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">キャリアブリッジの3つの強み</h2>
            
            <div class="grid grid-3">
                <div class="card fade-in">
                    <div class="feature-icon">
                        <span>📊</span>
                    </div>
                    <h3 class="feature-title">豊富な実績と信頼</h3>
                    <p class="feature-description" style="line-height: 2;">
                        創業以来、1,200社以上の企業様との取引実績。大手企業から中小企業まで幅広い業界・職種に対応しています。長年の実績により培った信頼関係が、質の高いマッチングを実現します。
                    </p>
                </div>
                
                <div class="card fade-in">
                    <div class="feature-icon">
                        <span>👥</span>
                    </div>
                    <h3 class="feature-title">きめ細やかなサポート体制</h3>
                    <p class="feature-description" style="line-height: 2;">
                        専任コーディネーターが就業前から就業中まで一貫してサポート。定期的なフォローアップにより、安心して働ける環境を提供します。困ったことがあればいつでもご相談いただけます。
                    </p>
                </div>
                
                <div class="card fade-in">
                    <div class="feature-icon">
                        <span>📚</span>
                    </div>
                    <h3 class="feature-title">充実の研修制度</h3>
                    <p class="feature-description" style="line-height: 2;">
                        ビジネスマナーからPC研修、専門スキルまで。無料で受講できる研修プログラムが充実しています。未経験からでもスキルアップできる環境を整えています。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 業界別実績 -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">業界別実績</h2>
            <div class="grid grid-4">
                <div class="card text-center">
                    <h4 class="text-primary mb-15" style="font-size: 1.3rem;">IT・エンジニア</h4>
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-accent); margin-bottom: 10px;">3,500+</div>
                    <p style="color: var(--color-text-light);">累計派遣実績</p>
                </div>
                <div class="card text-center">
                    <h4 class="text-primary mb-15" style="font-size: 1.3rem;">事務・オフィス</h4>
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-accent); margin-bottom: 10px;">6,000+</div>
                    <p style="color: var(--color-text-light);">累計派遣実績</p>
                </div>
                <div class="card text-center">
                    <h4 class="text-primary mb-15" style="font-size: 1.3rem;">営業・販売</h4>
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-accent); margin-bottom: 10px;">2,800+</div>
                    <p style="color: var(--color-text-light);">累計派遣実績</p>
                </div>
                <div class="card text-center">
                    <h4 class="text-primary mb-15" style="font-size: 1.3rem;">医療・介護</h4>
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-accent); margin-bottom: 10px;">2,700+</div>
                    <p style="color: var(--color-text-light);">累計派遣実績</p>
                </div>
            </div>
        </div>
    </section>

    <!-- お客様の声（今後実装予定） -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">お客様の声</h2>
            <p class="text-center" style="color: var(--color-text-light);">
                ※お客様の声は今後掲載予定です
            </p>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">まずはお気軽にご相談ください</h2>
            <p class="cta-description">
                確かな実績と信頼で、あなたのビジネスをサポートします
            </p>
            <div class="btn-group btn-group-center">
                <a href="contact.php" class="btn btn-white btn-large">お問い合わせフォーム</a>
                <a href="service.php" class="btn btn-outline btn-large" style="border-color: white; color: white;">
                    サービス内容を見る
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
