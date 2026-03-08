<?php
/**
 * サイドバー（必要に応じて使用）
 */
?>
<aside class="sidebar">
    <div class="sidebar-widget">
        <h3 class="widget-title">お知らせ</h3>
        <ul class="news-list">
            <li>
                <time datetime="2024-03-15">2024.03.15</time>
                <a href="news-single.php?id=1">ゴールデンウィーク期間中の営業について</a>
            </li>
            <li>
                <time datetime="2024-03-01">2024.03.01</time>
                <a href="news-single.php?id=2">大阪支店オープンのお知らせ</a>
            </li>
            <li>
                <time datetime="2024-02-20">2024.02.20</time>
                <a href="news-single.php?id=3">「働きがいのある会社」ランキングに選出</a>
            </li>
        </ul>
        <a href="news.php" class="btn btn-outline btn-small">お知らせ一覧</a>
    </div>
    
    <div class="sidebar-widget">
        <h3 class="widget-title">お問い合わせ</h3>
        <p>サービスに関するご質問やご相談は、お気軽にお問い合わせください。</p>
        <a href="contact.php" class="btn btn-primary btn-block">お問い合わせフォーム</a>
        <p class="contact-tel">
            <strong>お電話でのお問い合わせ</strong><br>
            <a href="tel:<?php echo str_replace('-', '', COMPANY_TEL); ?>" class="tel-link">
                <?php echo h(COMPANY_TEL); ?>
            </a><br>
            <small><?php echo h(BUSINESS_HOURS); ?></small>
        </p>
    </div>
    
    <div class="sidebar-widget">
        <h3 class="widget-title">関連リンク</h3>
        <ul class="link-list">
            <li><a href="service.php">サービス内容</a></li>
            <li><a href="strength.php">実績・強み</a></li>
            <li><a href="recruit.php">採用情報</a></li>
            <li><a href="faq.php">よくある質問</a></li>
        </ul>
    </div>
</aside>
