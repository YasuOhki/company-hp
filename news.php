<?php
$page_id = 'news';
require_once 'functions/config.php';

// サンプルニュースデータ
$news_list = [
    ['id' => 1, 'date' => '2024-03-15', 'title' => 'ゴールデンウィーク期間中の営業について', 'category' => 'お知らせ'],
    ['id' => 2, 'date' => '2024-03-01', 'title' => '大阪支店オープンのお知らせ', 'category' => 'ニュース'],
    ['id' => 3, 'date' => '2024-02-20', 'title' => '「働きがいのある会社」ランキングに選出されました', 'category' => 'プレスリリース'],
    ['id' => 4, 'date' => '2024-02-10', 'title' => '新サービス「キャリアアップ支援プログラム」開始', 'category' => 'サービス'],
    ['id' => 5, 'date' => '2024-01-25', 'title' => '年末年始休業のお知らせ', 'category' => 'お知らせ'],
    ['id' => 6, 'date' => '2024-01-15', 'title' => '新春キャンペーンのご案内', 'category' => 'キャンペーン'],
];
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">お知らせ</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">お知らせ</h1>
            <p class="section-subtitle">News</p>
        </div>
    </section>

    <!-- お知らせ一覧 -->
    <section class="section">
        <div class="container">
            <ul class="news-list">
                <?php foreach ($news_list as $news): ?>
                <li class="news-item fade-in">
                    <time class="news-date" datetime="<?php echo h($news['date']); ?>">
                        <?php echo format_date($news['date']); ?>
                    </time>
                    <div class="news-title">
                        <span class="badge" style="display: inline-block; padding: 3px 10px; background-color: var(--color-accent); color: white; font-size: 0.8rem; border-radius: 3px; margin-right: 10px;">
                            <?php echo h($news['category']); ?>
                        </span>
                        <a href="news-single.php?id=<?php echo $news['id']; ?>">
                            <?php echo h($news['title']); ?>
                        </a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            
            <!-- ページネーション（今後実装） -->
            <div class="text-center mt-50">
                <p style="color: var(--color-text-light);">※ページネーションは今後実装予定</p>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
