<?php
/**
 * サイト設定ファイル
 * WordPress化時は functions.php に移行
 */

// サイト基本情報
define('SITE_NAME', '株式会社キャリアブリッジ');
define('SITE_NAME_EN', 'CareerBridge Inc.');
define('SITE_URL', 'https://www.careerbridge.co.jp');
define('SITE_DESCRIPTION', '人と企業、それぞれの成長を支える最適なマッチングを。キャリアブリッジは、確かな実績と信頼で、新しい働き方を創造します。');

// パス設定
define('ASSETS_URL', '/assets');
define('IMAGES_URL', ASSETS_URL . '/images');
define('CSS_URL', ASSETS_URL . '/css');
define('JS_URL', ASSETS_URL . '/js');

// 会社情報
define('COMPANY_TEL', '03-1234-5678');
define('COMPANY_FAX', '03-1234-5679');
define('COMPANY_EMAIL', 'info@careerbridge.co.jp');
define('COMPANY_ADDRESS', '〒100-0005 東京都千代田区丸の内1-1-1 丸の内ビル10F');

// 営業時間
define('BUSINESS_HOURS', '平日 9:00〜18:00（土日祝除く）');

// ページタイトル
$page_titles = [
    'index' => 'HOME',
    'about' => '会社情報',
    'service' => 'サービス内容',
    'strength' => '実績・強み',
    'recruit' => '採用情報',
    'news' => 'お知らせ',
    'news-single' => 'お知らせ詳細',
    'faq' => 'よくある質問',
    'contact' => 'お問い合わせ',
    'access' => 'アクセス',
    'privacy' => 'プライバシーポリシー',
    'sitemap' => 'サイトマップ'
];

// ページ説明
$page_descriptions = [
    'index' => 'あなたの可能性と、企業の未来をつなぐ。人材派遣・人材紹介サービスの株式会社キャリアブリッジ',
    'about' => '株式会社キャリアブリッジの会社概要、代表メッセージ、企業理念をご紹介します。',
    'service' => '人材派遣、人材紹介、採用コンサルティングなど、キャリアブリッジのサービス内容をご紹介します。',
    'strength' => '累計就業者数15,000名以上、取引企業数1,200社以上。キャリアブリッジの実績と強みをご紹介します。',
    'recruit' => '株式会社キャリアブリッジの採用情報。キャリアコーディネーター、営業職などの募集要項をご案内します。',
    'news' => '株式会社キャリアブリッジからのお知らせ・ニュース一覧です。',
    'faq' => 'よくあるご質問。求職者向け、企業向けのFAQをまとめています。',
    'contact' => 'お問い合わせフォーム。求職者の方、企業の方からのご相談を受け付けています。',
    'access' => '株式会社キャリアブリッジの本社・支店へのアクセス情報です。',
    'privacy' => '個人情報保護方針について',
    'sitemap' => 'サイトマップ - 全ページへのリンク一覧'
];

// ナビゲーションメニュー
$nav_menu = [
    ['url' => 'index.php', 'label' => 'HOME', 'id' => 'index'],
    ['url' => 'about.php', 'label' => '会社情報', 'id' => 'about'],
    ['url' => 'service.php', 'label' => 'サービス', 'id' => 'service'],
    ['url' => 'strength.php', 'label' => '実績・強み', 'id' => 'strength'],
    ['url' => 'recruit.php', 'label' => '採用情報', 'id' => 'recruit'],
    ['url' => 'news.php', 'label' => 'お知らせ', 'id' => 'news'],
    ['url' => 'faq.php', 'label' => 'FAQ', 'id' => 'faq'],
    ['url' => 'contact.php', 'label' => 'お問い合わせ', 'id' => 'contact']
];

// フッターメニュー
$footer_menu = [
    ['url' => 'about.php', 'label' => '会社情報'],
    ['url' => 'service.php', 'label' => 'サービス内容'],
    ['url' => 'strength.php', 'label' => '実績・強み'],
    ['url' => 'recruit.php', 'label' => '採用情報'],
    ['url' => 'news.php', 'label' => 'お知らせ'],
    ['url' => 'faq.php', 'label' => 'よくある質問'],
    ['url' => 'access.php', 'label' => 'アクセス'],
    ['url' => 'contact.php', 'label' => 'お問い合わせ'],
    ['url' => 'privacy.php', 'label' => 'プライバシーポリシー'],
    ['url' => 'sitemap.php', 'label' => 'サイトマップ']
];

// カラースキーム
$color_scheme = [
    'primary' => '#2E5C8A',
    'accent' => '#F39C12',
    'text' => '#333333',
    'bg_white' => '#FFFFFF',
    'bg_gray' => '#F8F9FA'
];

// ヘルパー関数: ページタイトルを取得
function get_page_title($page_id) {
    global $page_titles;
    $base_title = isset($page_titles[$page_id]) ? $page_titles[$page_id] : '';
    return $base_title ? $base_title . ' | ' . SITE_NAME : SITE_NAME;
}

// ヘルパー関数: ページディスクリプションを取得
function get_page_description($page_id) {
    global $page_descriptions;
    return isset($page_descriptions[$page_id]) ? $page_descriptions[$page_id] : SITE_DESCRIPTION;
}

// ヘルパー関数: アクティブクラスを返す
function is_active($current_id, $check_id) {
    return $current_id === $check_id ? 'active' : '';
}
