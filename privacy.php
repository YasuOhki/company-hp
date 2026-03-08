<?php
$page_id = 'privacy';
require_once 'functions/config.php';
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">プライバシーポリシー</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">プライバシーポリシー</h1>
            <p class="section-subtitle">Privacy Policy</p>
        </div>
    </section>

    <!-- プライバシーポリシー内容 -->
    <section class="section">
        <div class="container">
            <div class="card" style="max-width: 900px; margin: 0 auto;">
                <div style="line-height: 2;">
                    <p class="mb-30">
                        株式会社キャリアブリッジ（以下「当社」）は、個人情報の重要性を認識し、個人情報を保護することが社会的責務であると考え、個人情報に関する法令を遵守し、当社で取り扱う個人情報の取得、利用、管理を適正に行います。
                    </p>
                    
                    <h3 class="text-primary mb-15 mt-40">1. 個人情報の定義</h3>
                    <p class="mb-20">
                        個人情報とは、氏名、住所、電話番号、メールアドレスなど、個人を識別することができる情報をいいます。
                    </p>
                    
                    <h3 class="text-primary mb-15 mt-40">2. 個人情報の収集</h3>
                    <p class="mb-20">
                        当社は、以下の目的のために個人情報を収集することがあります。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; margin-bottom: 20px;">
                        <li>人材派遣・人材紹介サービスの提供</li>
                        <li>お問い合わせへの対応</li>
                        <li>サービスに関する情報のご案内</li>
                        <li>マーケティング活動</li>
                        <li>その他、上記各項に付随する業務</li>
                    </ul>
                    
                    <h3 class="text-primary mb-15 mt-40">3. 個人情報の利用目的</h3>
                    <p class="mb-20">
                        当社は、収集した個人情報を以下の目的で利用いたします。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; margin-bottom: 20px;">
                        <li>人材派遣・人材紹介サービスの提供</li>
                        <li>お客様からのお問い合わせへの対応</li>
                        <li>サービスに関する情報のご案内</li>
                        <li>サービス向上のための分析</li>
                        <li>新サービスの開発</li>
                    </ul>
                    
                    <h3 class="text-primary mb-15 mt-40">4. 個人情報の第三者提供</h3>
                    <p class="mb-20">
                        当社は、以下の場合を除き、ご本人の同意なく個人情報を第三者に提供することはありません。
                    </p>
                    <ul style="list-style: disc; padding-left: 20px; margin-bottom: 20px;">
                        <li>法令に基づく場合</li>
                        <li>人の生命、身体または財産の保護のために必要がある場合</li>
                        <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合</li>
                        <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合</li>
                    </ul>
                    
                    <h3 class="text-primary mb-15 mt-40">5. 個人情報の安全管理</h3>
                    <p class="mb-20">
                        当社は、個人情報の漏えい、滅失または毀損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。
                    </p>
                    
                    <h3 class="text-primary mb-15 mt-40">6. 個人情報の開示・訂正・削除</h3>
                    <p class="mb-20">
                        ご本人から個人情報の開示、訂正、削除等のお申し出があった場合には、ご本人であることを確認の上、速やかに対応いたします。
                    </p>
                    
                    <h3 class="text-primary mb-15 mt-40">7. お問い合わせ窓口</h3>
                    <p class="mb-20">
                        個人情報の取り扱いに関するお問い合わせは、以下までご連絡ください。
                    </p>
                    <div style="padding: 20px; background-color: var(--color-bg-gray); border-radius: 4px;">
                        <p>
                            <?php echo h(SITE_NAME); ?><br>
                            <?php echo nl2br(h(COMPANY_ADDRESS)); ?><br>
                            TEL: <?php echo h(COMPANY_TEL); ?><br>
                            Email: <?php echo h(COMPANY_EMAIL); ?>
                        </p>
                    </div>
                    
                    <p class="mt-40 text-right">
                        制定日：2015年4月1日<br>
                        最終改定日：2024年4月1日
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
