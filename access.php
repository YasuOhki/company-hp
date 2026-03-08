<?php
$page_id = 'access';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">アクセス</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">アクセス</h1>
            <p class="section-subtitle">Access</p>
        </div>
    </section>

    <!-- 本社 -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">本社</h2>
            
            <div class="grid grid-2">
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">所在地</h3>
                    <table style="width: 100%; line-height: 2;">
                        <tr>
                            <th style="width: 100px; vertical-align: top; padding: 5px 0;">住所</th>
                            <td><?php echo nl2br(h(COMPANY_ADDRESS)); ?></td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">電話</th>
                            <td><?php echo h(COMPANY_TEL); ?></td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">FAX</th>
                            <td><?php echo h(COMPANY_FAX); ?></td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">営業時間</th>
                            <td><?php echo h(BUSINESS_HOURS); ?></td>
                        </tr>
                    </table>
                </div>
                
                <div class="card">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">アクセス</h3>
                    <ul style="line-height: 2;">
                        <li>🚃 JR「東京駅」丸の内南口より徒歩3分</li>
                        <li>🚇 東京メトロ丸ノ内線「東京駅」より徒歩1分</li>
                        <li>🚇 東京メトロ千代田線「二重橋前駅」より徒歩5分</li>
                    </ul>
                </div>
            </div>
            
            <div class="card mt-30">
                <div style="width: 100%; height: 400px; background-color: var(--color-bg-gray); display: flex; align-items: center; justify-content: center; color: var(--color-text-light);">
                    ※ Google Mapは今後埋め込み予定
                </div>
            </div>
        </div>
    </section>

    <!-- 支店 -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">支店</h2>
            
            <div class="grid grid-2">
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">大阪支店</h3>
                    <table style="width: 100%; line-height: 2;">
                        <tr>
                            <th style="width: 100px; vertical-align: top; padding: 5px 0;">住所</th>
                            <td>〒530-0001<br>大阪府大阪市北区梅田1-1-1<br>梅田ビル8F</td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">電話</th>
                            <td>06-1234-5678</td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">アクセス</th>
                            <td>JR「大阪駅」より徒歩5分</td>
                        </tr>
                    </table>
                </div>
                
                <div class="card fade-in">
                    <h3 class="text-primary mb-20" style="font-size: 1.5rem;">名古屋支店</h3>
                    <table style="width: 100%; line-height: 2;">
                        <tr>
                            <th style="width: 100px; vertical-align: top; padding: 5px 0;">住所</th>
                            <td>〒450-0002<br>愛知県名古屋市中村区名駅1-1-1<br>名駅ビル7F</td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">電話</th>
                            <td>052-123-4567</td>
                        </tr>
                        <tr>
                            <th style="vertical-align: top; padding: 5px 0;">アクセス</th>
                            <td>JR「名古屋駅」より徒歩3分</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">お気軽にお越しください</h2>
            <p class="cta-description">
                ご来社の際は、事前にご連絡いただけますとスムーズです
            </p>
            <a href="contact.php" class="btn btn-white btn-large">お問い合わせ</a>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
