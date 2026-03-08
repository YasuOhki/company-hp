<?php
$page_id = 'sitemap';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">サイトマップ</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">サイトマップ</h1>
            <p class="section-subtitle">Sitemap</p>
        </div>
    </section>

    <!-- サイトマップ -->
    <section class="section">
        <div class="container">
            <div class="grid grid-3">
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.3rem;">メインページ</h3>
                    <ul style="line-height: 2;">
                        <li><a href="index.php">トップページ</a></li>
                        <li><a href="about.php">会社情報</a></li>
                        <li><a href="service.php">サービス内容</a></li>
                        <li><a href="strength.php">実績・強み</a></li>
                        <li><a href="recruit.php">採用情報</a></li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.3rem;">サービス</h3>
                    <ul style="line-height: 2;">
                        <li><a href="service.php#jobseeker">求職者の方へ</a></li>
                        <li><a href="service.php#company">企業の方へ</a></li>
                        <li><a href="faq.php">よくある質問</a></li>
                        <li><a href="contact.php">お問い合わせ</a></li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.3rem;">その他</h3>
                    <ul style="line-height: 2;">
                        <li><a href="news.php">お知らせ</a></li>
                        <li><a href="access.php">アクセス</a></li>
                        <li><a href="privacy.php">プライバシーポリシー</a></li>
                        <li><a href="sitemap.php">サイトマップ</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="card mt-40" style="max-width: 700px; margin: 40px auto 0;">
                <h3 class="text-primary mb-20" style="font-size: 1.3rem;">会社情報</h3>
                <ul style="line-height: 2;">
                    <li><a href="about.php">会社概要</a></li>
                    <li><a href="about.php#message">代表メッセージ</a></li>
                    <li><a href="about.php#philosophy">企業理念</a></li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
