<?php
$page_id = 'faq';
require_once 'functions/config.php';

// FAQ データ
$faq_jobseeker = [
    ['q' => '登録に費用はかかりますか？', 'a' => '登録は完全無料です。ご相談からお仕事紹介、就業後のサポートまで、一切費用はかかりません。'],
    ['q' => '未経験でも仕事を紹介してもらえますか？', 'a' => 'はい、未経験の方でも大丈夫です。研修制度も充実しており、未経験からスタートできるお仕事も多数ございます。'],
    ['q' => '社会保険には加入できますか？', 'a' => '一定の条件を満たす場合、健康保険・厚生年金保険・雇用保険に加入いただけます。詳しくはお問い合わせください。'],
    ['q' => '交通費は支給されますか？', 'a' => '派遣先企業により異なりますが、多くの案件で交通費の全額または一部を支給しています。'],
    ['q' => '就業中の相談はできますか？', 'a' => 'もちろんです。専任のコーディネーターが定期的にフォローアップを行い、いつでもご相談いただける体制を整えています。'],
];

$faq_company = [
    ['q' => '派遣と紹介の違いは何ですか？', 'a' => '派遣は当社と雇用契約を結んだスタッフを派遣先に派遣するサービス、紹介は貴社と求職者の直接雇用をサポートするサービスです。'],
    ['q' => '最短でどれくらいで人材を紹介してもらえますか？', 'a' => 'ご要望の内容によりますが、最短で翌日からのご紹介も可能です。まずはお気軽にご相談ください。'],
    ['q' => '料金体系について教えてください', 'a' => 'サービス内容により異なります。詳しくはお問い合わせいただければ、貴社に最適なプランをご提案いたします。'],
    ['q' => '業界特化の人材はいますか？', 'a' => 'はい、IT・医療・製造など、各業界に特化した専門人材のネットワークを持っています。'],
    ['q' => 'トライアル期間は設けられますか？', 'a' => '紹介予定派遣をご利用いただくことで、最長6ヶ月間のトライアル期間を設けることが可能です。'],
];
?>
<?php include 'inc/header.php'; ?>

<main>
    <!-- パンくずリスト -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                <li class="breadcrumb-item">よくある質問</li>
            </ul>
        </div>
    </div>

    <!-- ページタイトル -->
    <section class="section">
        <div class="container">
            <h1 class="section-title">よくある質問</h1>
            <p class="section-subtitle">FAQ</p>
        </div>
    </section>

    <!-- 求職者向けFAQ -->
    <section class="section" style="background-color: var(--color-bg-gray);">
        <div class="container">
            <h2 class="section-title">求職者の方向け</h2>
            <div style="max-width: 900px; margin: 0 auto;">
                <?php foreach ($faq_jobseeker as $index => $item): ?>
                <div class="card mb-20 fade-in">
                    <h3 class="text-primary mb-15" style="font-size: 1.2rem;">
                        <span style="display: inline-block; width: 30px; height: 30px; background-color: var(--color-primary); color: white; border-radius: 50%; text-align: center; line-height: 30px; margin-right: 10px;">Q</span>
                        <?php echo h($item['q']); ?>
                    </h3>
                    <div style="padding-left: 40px; line-height: 1.8; color: var(--color-text-light);">
                        <span style="display: inline-block; width: 30px; height: 30px; background-color: var(--color-accent); color: white; border-radius: 50%; text-align: center; line-height: 30px; margin-right: 10px;">A</span>
                        <?php echo h($item['a']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 企業向けFAQ -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">企業の方向け</h2>
            <div style="max-width: 900px; margin: 0 auto;">
                <?php foreach ($faq_company as $index => $item): ?>
                <div class="card mb-20 fade-in">
                    <h3 class="text-primary mb-15" style="font-size: 1.2rem;">
                        <span style="display: inline-block; width: 30px; height: 30px; background-color: var(--color-primary); color: white; border-radius: 50%; text-align: center; line-height: 30px; margin-right: 10px;">Q</span>
                        <?php echo h($item['q']); ?>
                    </h3>
                    <div style="padding-left: 40px; line-height: 1.8; color: var(--color-text-light);">
                        <span style="display: inline-block; width: 30px; height: 30px; background-color: var(--color-accent); color: white; border-radius: 50%; text-align: center; line-height: 30px; margin-right: 10px;">A</span>
                        <?php echo h($item['a']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2 class="cta-title">その他ご不明点がございましたら</h2>
            <p class="cta-description">
                お気軽にお問い合わせください
            </p>
            <a href="contact.php" class="btn btn-white btn-large">お問い合わせフォーム</a>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
