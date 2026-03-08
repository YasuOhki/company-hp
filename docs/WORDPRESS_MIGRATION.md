# WordPress移行ガイド

このドキュメントでは、静的HTML版からWordPressテーマへの移行手順を説明します。

## 目次

1. [移行の準備](#移行の準備)
2. [WordPress環境のセットアップ](#wordpress環境のセットアップ)
3. [テーマフォルダの作成](#テーマフォルダの作成)
4. [ファイルの移行](#ファイルの移行)
5. [WordPress関数への置き換え](#wordpress関数への置き換え)
6. [カスタム投稿タイプの作成](#カスタム投稿タイプの作成)
7. [プラグインの導入](#プラグインの導入)
8. [動作確認](#動作確認)

---

## 移行の準備

### チェックリスト

- [ ] 静的HTML版が完成している
- [ ] 全ページの動作確認が完了している
- [ ] WordPress環境が準備できている（Local by Flywheel / MAMP / XAMPP等）
- [ ] バックアップを取っている

---

## WordPress環境のセットアップ

### 推奨環境

- **WordPress**: 6.0 以上
- **PHP**: 7.4 以上
- **MySQL**: 5.7 以上

### Local by Flywheelを使用する場合

1. Local by Flywheelをダウンロード・インストール
2. 「+ Create a new site」をクリック
3. サイト名: `careerbridge`
4. PHP: 8.0、Webサーバー: Apache、Database: MySQL 8.0
5. WordPressの管理者情報を入力
6. サイトを作成

---

## テーマフォルダの作成

### ステップ1: テーマディレクトリの準備

WordPressインストールフォルダ内に以下のパスでテーマフォルダを作成：

```
/wp-content/themes/careerbridge/
```

### ステップ2: ディレクトリ構造

```
careerbridge/
├── style.css              # テーマ情報（必須）
├── functions.php          # テーマ関数（必須）
├── index.php              # メインテンプレート（必須）
├── header.php             # ヘッダー
├── footer.php             # フッター
├── page.php               # 固定ページテンプレート
├── single.php             # 投稿詳細
├── archive.php            # アーカイブ
├── 404.php                # 404エラーページ
│
├── template-parts/        # テンプレートパーツ
│   ├── content-hero.php
│   └── content-news.php
│
└── assets/                # 静的アセット（そのままコピー）
    ├── css/
    ├── js/
    ├── images/
    └── fonts/
```

---

## ファイルの移行

### ステップ1: style.cssの作成

静的版の`assets/css/style.css`の**先頭**に以下を追記：

```css
/*
Theme Name: CareerBridge
Theme URI: https://www.careerbridge.co.jp
Description: 株式会社キャリアブリッジ コーポレートサイト
Author: Your Name
Author URI: https://yourwebsite.com
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: careerbridge
*/

/* 以下、既存のCSSが続く */
```

### ステップ2: functions.phpの作成

静的版の`functions/config.php`の内容を基に`functions.php`を作成：

```php
<?php
/**
 * Theme Functions
 */

// テーマサポート
function careerbridge_theme_support() {
    // タイトルタグのサポート
    add_theme_support('title-tag');
    
    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');
    
    // HTML5のサポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // カスタムロゴのサポート
    add_theme_support('custom-logo');
    
    // メニューの登録
    register_nav_menus(array(
        'primary' => 'プライマリーメニュー',
        'footer' => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'careerbridge_theme_support');

// CSS・JSの読み込み
function careerbridge_enqueue_scripts() {
    // CSS
    wp_enqueue_style('careerbridge-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0');
    wp_enqueue_style('careerbridge-style', get_stylesheet_uri(), array('careerbridge-reset'), '1.0.0');
    wp_enqueue_style('careerbridge-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('careerbridge-style'), '1.0.0');
    wp_enqueue_style('careerbridge-header', get_template_directory_uri() . '/assets/css/components/header.css', array(), '1.0.0');
    wp_enqueue_style('careerbridge-footer', get_template_directory_uri() . '/assets/css/components/footer.css', array(), '1.0.0');
    wp_enqueue_style('careerbridge-buttons', get_template_directory_uri() . '/assets/css/components/buttons.css', array(), '1.0.0');
    wp_enqueue_style('careerbridge-forms', get_template_directory_uri() . '/assets/css/components/forms.css', array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap', array(), null);
    
    // JavaScript
    wp_enqueue_script('careerbridge-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('careerbridge-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);
    wp_enqueue_script('careerbridge-smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array(), '1.0.0', true);
    
    // フォームページのみバリデーションを読み込み
    if (is_page('contact')) {
        wp_enqueue_script('careerbridge-form-validation', get_template_directory_uri() . '/assets/js/form-validation.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'careerbridge_enqueue_scripts');

// サイト基本情報（定数）
define('SITE_NAME', get_bloginfo('name'));
define('SITE_URL', home_url());
define('COMPANY_TEL', '03-1234-5678');
define('COMPANY_FAX', '03-1234-5679');
define('COMPANY_EMAIL', 'info@careerbridge.co.jp');
define('COMPANY_ADDRESS', '〒100-0005 東京都千代田区丸の内1-1-1 丸の内ビル10F');
define('BUSINESS_HOURS', '平日 9:00〜18:00（土日祝除く）');

// ヘルパー関数
function h($str) {
    return esc_html($str);
}

function image_url($path) {
    return get_template_directory_uri() . '/assets/images/' . ltrim($path, '/');
}

function css_url($path) {
    return get_template_directory_uri() . '/assets/css/' . ltrim($path, '/');
}

function js_url($path) {
    return get_template_directory_uri() . '/assets/js/' . ltrim($path, '/');
}
```

### ステップ3: header.phpの移行

静的版の`inc/header.php`を以下のように変更：

**変更前（静的版）:**
```php
<link rel="stylesheet" href="<?php echo css_url('reset.css'); ?>">
```

**変更後（WordPress版）:**
```php
<?php wp_head(); ?>
```

**変更前（静的版）:**
```php
<a href="index.php">
    <img src="<?php echo image_url('common/logo.svg'); ?>" alt="<?php echo h(SITE_NAME); ?>">
</a>
```

**変更後（WordPress版）:**
```php
<a href="<?php echo home_url(); ?>">
    <img src="<?php echo image_url('common/logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
</a>
```

**変更前（静的版）:**
```php
<?php include __DIR__ . '/navigation.php'; ?>
```

**変更後（WordPress版）:**
```php
<?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'container' => 'nav',
    'container_class' => 'global-nav',
    'menu_class' => 'nav-menu',
    'fallback_cb' => false,
));
?>
```

### ステップ4: footer.phpの移行

**変更前（静的版）:**
```php
<script src="<?php echo js_url('main.js'); ?>"></script>
```

**変更後（WordPress版）:**
```php
<?php wp_footer(); ?>
</body>
</html>
```

### ステップ5: メインテンプレートの作成

各ページテンプレート（`page.php`, `single.php`, `archive.php`など）を作成。

**page.php（固定ページテンプレート）:**

```php
<?php get_header(); ?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <div class="breadcrumb">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">HOME</a></li>
                    <li class="breadcrumb-item"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <h1 class="section-title"><?php the_title(); ?></h1>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
```

---

## WordPress関数への置き換え

### 主な置き換え一覧

| 静的版 | WordPress版 |
|--------|-------------|
| `index.php` | `home_url()` または `home_url('/')` |
| `about.php` | `get_permalink(get_page_by_path('about'))` |
| `<?php echo h(SITE_NAME); ?>` | `<?php bloginfo('name'); ?>` |
| `<?php include 'inc/header.php'; ?>` | `<?php get_header(); ?>` |
| `<?php include 'inc/footer.php'; ?>` | `<?php get_footer(); ?>` |
| `<?php include 'inc/sidebar.php'; ?>` | `<?php get_sidebar(); ?>` |
| `image_url('common/logo.svg')` | `get_template_directory_uri() . '/assets/images/common/logo.svg'` |

### ループの使用

**ニュース一覧（静的版）:**
```php
<?php foreach ($news_list as $news): ?>
    <li><?php echo h($news['title']); ?></li>
<?php endforeach; ?>
```

**ニュース一覧（WordPress版）:**
```php
<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 10,
);
$news_query = new WP_Query($args);

if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post();
?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
```

---

## カスタム投稿タイプの作成

`functions.php`に追加：

```php
// カスタム投稿タイプ「お知らせ」
function careerbridge_custom_post_types() {
    register_post_type('news', array(
        'labels' => array(
            'name' => 'お知らせ',
            'singular_name' => 'お知らせ',
            'add_new' => '新規追加',
            'add_new_item' => '新しいお知らせを追加',
            'edit_item' => 'お知らせを編集',
            'new_item' => '新しいお知らせ',
            'view_item' => 'お知らせを表示',
            'search_items' => 'お知らせを検索',
            'not_found' => 'お知らせが見つかりませんでした',
            'not_found_in_trash' => 'ゴミ箱にお知らせはありません',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-megaphone',
        'rewrite' => array('slug' => 'news'),
    ));
    
    // カテゴリー
    register_taxonomy('news_category', 'news', array(
        'labels' => array(
            'name' => 'カテゴリー',
            'singular_name' => 'カテゴリー',
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'news-category'),
    ));
}
add_action('init', 'careerbridge_custom_post_types');
```

---

## プラグインの導入

### 推奨プラグイン

1. **Contact Form 7**
   - お問い合わせフォームの作成
   - インストール後、フォームを作成し、`contact.php`テンプレートにショートコードを埋め込む

2. **Advanced Custom Fields (ACF)**
   - カスタムフィールドの管理
   - 会社情報などを管理画面から編集可能に

3. **Yoast SEO**
   - SEO対策
   - メタディスクリプション、OGPの設定

4. **WP Multibyte Patch**
   - 日本語環境の最適化

5. **BackWPup**
   - バックアップの自動化

---

## 動作確認

### チェックリスト

- [ ] テーマが有効化できる
- [ ] トップページが正しく表示される
- [ ] ナビゲーションメニューが機能する
- [ ] 固定ページが作成・表示できる
- [ ] カスタム投稿タイプ「お知らせ」が機能する
- [ ] お問い合わせフォームが送信できる
- [ ] CSS・JavaScriptが正しく読み込まれる
- [ ] レスポンシブデザインが機能する
- [ ] 画像が正しく表示される

### デバッグモードの有効化

`wp-config.php`に以下を追加：

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

エラーログは`/wp-content/debug.log`に出力されます。

---

## まとめ

この手順に従うことで、静的HTML版からWordPressテーマへの移行がスムーズに行えます。

### 移行のメリット

1. **管理画面からのコンテンツ更新**
   - HTMLを編集せずにコンテンツを更新できる

2. **プラグインの活用**
   - SEO、フォーム、バックアップなど便利な機能を追加

3. **拡張性**
   - ブログ機能、会員機能などを追加しやすい

### トラブルシューティング

**Q: テーマが表示されない**
A: `style.css`のヘッダー情報が正しく記載されているか確認

**Q: CSSが反映されない**
A: `wp_enqueue_style()`でCSSを読み込んでいるか確認。ブラウザキャッシュをクリア

**Q: メニューが表示されない**
A: 管理画面 > 外観 > メニューでメニューを作成し、位置を設定

**Q: パーマリンクが404エラー**
A: 管理画面 > 設定 > パーマリンク設定で「変更を保存」をクリック

---

## 参考リンク

- [WordPress Codex（日本語）](https://wpdocs.osdn.jp/)
- [WordPress Developer Resources](https://developer.wordpress.org/)
- [Theme Handbook](https://developer.wordpress.org/themes/)

---

**作成日**: 2024年3月  
**最終更新**: 2024年3月
