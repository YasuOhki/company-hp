<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-info">
                <div class="footer-logo">
                    <img src="<?php echo image_url('common/logo-white.svg'); ?>" alt="<?php echo h(SITE_NAME); ?>">
                    <p class="footer-company-name">
                        <strong><?php echo h(SITE_NAME); ?></strong><br>
                        <span><?php echo h(SITE_NAME_EN); ?></span>
                    </p>
                </div>
                <div class="footer-contact-info">
                    <p class="footer-address"><?php echo nl2br(h(COMPANY_ADDRESS)); ?></p>
                    <p class="footer-tel">
                        TEL: <a href="tel:<?php echo str_replace('-', '', COMPANY_TEL); ?>"><?php echo h(COMPANY_TEL); ?></a>
                    </p>
                    <p class="footer-fax">FAX: <?php echo h(COMPANY_FAX); ?></p>
                    <p class="footer-email">
                        Email: <a href="mailto:<?php echo h(COMPANY_EMAIL); ?>"><?php echo h(COMPANY_EMAIL); ?></a>
                    </p>
                </div>
            </div>
            
            <div class="footer-nav">
                <div class="footer-nav-section">
                    <h3>サービス</h3>
                    <ul>
                        <li><a href="service.php#jobseeker">求職者の方へ</a></li>
                        <li><a href="service.php#company">企業の方へ</a></li>
                        <li><a href="strength.php">実績・強み</a></li>
                    </ul>
                </div>
                <div class="footer-nav-section">
                    <h3>企業情報</h3>
                    <ul>
                        <li><a href="about.php">会社概要</a></li>
                        <li><a href="about.php#message">代表メッセージ</a></li>
                        <li><a href="about.php#philosophy">企業理念</a></li>
                        <li><a href="recruit.php">採用情報</a></li>
                    </ul>
                </div>
                <div class="footer-nav-section">
                    <h3>サポート</h3>
                    <ul>
                        <li><a href="faq.php">よくある質問</a></li>
                        <li><a href="news.php">お知らせ</a></li>
                        <li><a href="access.php">アクセス</a></li>
                        <li><a href="contact.php">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <nav class="footer-menu">
                <ul>
                    <?php foreach (array_slice($footer_menu, 0, 5) as $item): ?>
                    <li><a href="<?php echo h($item['url']); ?>"><?php echo h($item['label']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <p class="copyright">
                &copy; <?php echo date('Y'); ?> <?php echo h(SITE_NAME); ?>. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="<?php echo js_url('main.js'); ?>"></script>
<script src="<?php echo js_url('navigation.js'); ?>"></script>
<script src="<?php echo js_url('smooth-scroll.js'); ?>"></script>

</body>
</html>
