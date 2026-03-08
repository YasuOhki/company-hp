<?php
$page_id = 'news-single';
require_once 'functions/config.php';

// サンプルニュースデータ（IDで取得）
$news_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$news_data = [
    1 => [
        'title' => 'ゴールデンウィーク期間中の営業について',
        'date' => '2024-03-15',
        'category' => 'お知らせ',
        'content' => '
            <p>平素より格別のお引き立てを賜り、厚く御礼申し上げます。</p>
            <p>誠に勝手ながら、下記の期間を休業とさせていただきます。</p>
            <h3>休業期間</h3>
            <p>2024年4月29日（月）～ 2024年5月6日（月）</p>
            <p>※5月7日（火）より通常営業いたします。</p>
            <p>休業期間中にいただいたお問い合わせにつきましては、5月7日以降、順次ご対応させていただきます。<br>
            お客様にはご不便をおかけいたしますが、何卒ご理解いただきますようお願い申し上げます。</p>
        '
    ],
    2 => [
        'title' => '大阪支店オープンのお知らせ',
        'date' => '2024-03-01',
        'category' => 'ニュース',
        'content' => '
            <p>この度、株式会社キャリアブリッジは、2024年3月1日に大阪支店を開設いたしました。</p>
            <p>これまで以上に、関西エリアのお客様へより良いサービスを提供できるよう、スタッフ一同努めてまいります。</p>
            <h3>大阪支店 所在地</h3>
            <p>
            〒530-0001<br>
            大阪府大阪市北区梅田1-1-1 梅田ビル8F<br>
            TEL: 06-1234-5678
            </p>
            <p>今後とも変わらぬご愛顧を賜りますよう、よろしくお願い申し上げます。</p>
        '
    ],
    3 => [
        'title' => '「働きがいのある会社」ランキングに選出されました',
        'date' => '2024-02-20',
        'category' => 'プレスリリース',
        'content' => '
            <p>株式会社キャリアブリッジは、この度「2024年版 働きがいのある会社」ランキングにおいて、中小企業部門で選出されました。</p>
            <p>これは、従業員満足度調査の結果や、働き方改革への取り組みが評価されたものです。</p>
            <h3>評価されたポイント</h3>
            <ul>
                <li>フレックスタイム制度の導入</li>
                <li>リモートワークの推進</li>
                <li>充実した研修制度</li>
                <li>ワークライフバランスの実現</li>
            </ul>
            <p>今後も、従業員が働きやすい環境づくりに努めてまいります。</p>
        '
    ],
];

$news = isset($news_data[$news_id]) ? $news_data[$news_id] : $news_data[1];
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item"><a href="news.php">お知らせ</a></li>
                <li class="breadcrumb-item"><?php echo h($news['title']); ?></li>
            </ul>
        </div>
    </div>

    <!-- 記事詳細 -->
    <section class="section">
        <div class="container">
            <div class="content-wrapper">
                <article class="main-content">
                    <div class="card">
                        <div style="margin-bottom: 20px;">
                            <span class="badge" style="display: inline-block; padding: 5px 12px; background-color: var(--color-accent); color: white; font-size: 0.85rem; border-radius: 3px; margin-right: 10px;">
                                <?php echo h($news['category']); ?>
                            </span>
                            <time datetime="<?php echo h($news['date']); ?>" style="color: var(--color-text-light);">
                                <?php echo format_date($news['date']); ?>
                            </time>
                        </div>
                        
                        <h1 style="font-size: 2rem; color: var(--color-primary); margin-bottom: 30px; line-height: 1.5;">
                            <?php echo h($news['title']); ?>
                        </h1>
                        
                        <div style="line-height: 2;">
                            <?php echo $news['content']; ?>
                        </div>
                        
                        <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid var(--color-border);">
                            <a href="news.php" class="btn btn-outline">お知らせ一覧に戻る</a>
                        </div>
                    </div>
                </article>
                
                <?php include 'inc/sidebar.php'; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
