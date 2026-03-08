# 株式会社キャリアブリッジ Webサイト

人材派遣会社のコーポレートWebサイトです。

## プロジェクト概要

このプロジェクトは、静的HTML（PHP include使用）からWordPress化への移行を見据えた構成で開発されています。

- **制作期間**: 2024年3月
- **用途**: Webサイトコーディング練習用
- **技術スタック**: HTML, CSS, JavaScript, PHP

## ディレクトリ構造

```
company-hp/
├── index.php                # トップページ
├── about.php                # 会社情報
├── service.php              # サービス内容
├── strength.php             # 実績・強み
├── recruit.php              # 採用情報
├── news.php                 # お知らせ一覧
├── news-single.php          # お知らせ詳細
├── faq.php                  # よくある質問
├── contact.php              # お問い合わせ
├── access.php               # アクセス
├── privacy.php              # プライバシーポリシー
├── sitemap.php              # サイトマップ
│
├── inc/                     # 共通パーツ
│   ├── header.php
│   ├── footer.php
│   ├── navigation.php
│   ├── sidebar.php
│   └── meta.php
│
├── functions/               # PHP関数
│   ├── config.php           # サイト設定
│   └── helpers.php          # ヘルパー関数
│
├── assets/                  # 静的アセット
│   ├── css/
│   ├── js/
│   ├── images/
│   └── fonts/
│
└── docs/                    # ドキュメント
    ├── webサイト構成案.md
    └── README.md
```

## 開発環境のセットアップ

### 必要な環境

- PHP 7.4 以上
- Webサーバー（Apache, Nginx, または PHP内蔵サーバー）

### ローカルサーバーの起動

#### 方法1: PHP内蔵サーバー（推奨）

```bash
cd company-hp
php -S localhost:8000
```

ブラウザで `http://localhost:8000` にアクセス

#### 方法2: MAMP / XAMPP

1. MAMPまたはXAMPPをインストール
2. `htdocs`（MAMP）または`htdocs`（XAMPP）フォルダに`company-hp`を配置
3. サーバーを起動
4. `http://localhost/company-hp` にアクセス

## レスポンシブ対応の確認

### ブレークポイント

```css
/* タブレット */
@media (max-width: 1024px) { ... }

/* タブレット（小） */
@media (max-width: 768px) { ... }

/* スマートフォン */
@media (max-width: 480px) { ... }
```

### 確認方法

#### Chrome DevTools

1. F12キーでデベロッパーツールを開く
2. デバイスツールバーアイコン（Ctrl+Shift+M）をクリック
3. 以下のデバイスで表示確認
   - iPhone 12/13 Pro (390x844)
   - iPad (768x1024)
   - デスクトップ (1920x1080)

#### 確認項目

- [ ] ヘッダーのハンバーガーメニュー動作（768px以下）
- [ ] ナビゲーションの表示切替
- [ ] グリッドレイアウトの崩れがないか
- [ ] 画像の表示サイズ
- [ ] テキストの可読性
- [ ] ボタンのタップ領域
- [ ] フォームの入力しやすさ

## ページ一覧

| ページ | ファイル名 | 説明 |
|--------|-----------|------|
| トップページ | index.php | ファーストビュー、サービス概要、実績、ニュース |
| 会社情報 | about.php | 会社概要、代表メッセージ、企業理念 |
| サービス内容 | service.php | 求職者向け、企業向けサービス |
| 実績・強み | strength.php | 数字で見る実績、3つの強み |
| 採用情報 | recruit.php | 募集職種、働く環境、福利厚生 |
| お知らせ | news.php | ニュース一覧 |
| お知らせ詳細 | news-single.php | ニュース記事詳細 |
| よくある質問 | faq.php | FAQ（求職者向け・企業向け） |
| お問い合わせ | contact.php | お問い合わせフォーム |
| アクセス | access.php | 本社・支店の所在地 |
| プライバシーポリシー | privacy.php | 個人情報保護方針 |
| サイトマップ | sitemap.php | 全ページリンク |

## カラースキーム

```css
--color-primary: #2E5C8A;    /* メインカラー（青） */
--color-accent: #F39C12;     /* アクセントカラー（オレンジ） */
--color-text: #333333;       /* テキスト */
--color-bg-white: #FFFFFF;   /* 背景（白） */
--color-bg-gray: #F8F9FA;    /* 背景（グレー） */
```

## フォント

- 見出し: Noto Sans JP Bold
- 本文: Noto Sans JP Regular
- 英数字: Roboto

## JavaScript機能

- スムーススクロール
- ハンバーガーメニュー
- フォームバリデーション
- ページトップへ戻るボタン
- フェードインアニメーション

## WordPress移行について

このプロジェクトはWordPress化を見据えた構造になっています。
詳細は `docs/WORDPRESS_MIGRATION.md` を参照してください。

## 今後の実装予定

- [ ] お問い合わせフォームの送信処理（PHP）
- [ ] Google Map埋め込み
- [ ] OGP画像の作成
- [ ] ファビコンの作成
- [ ] お客様の声セクション
- [ ] 実績事例ページ
- [ ] ブログ機能
- [ ] 多言語対応

## 注意事項

- このプロジェクトは学習・練習用です
- 実際の運用には、セキュリティ対策やフォーム送信処理の実装が必要です
- 画像やロゴは仮のものです（実際には適切な素材に差し替えてください）

## ライセンス

このプロジェクトは学習用途のサンプルです。

## お問い合わせ

プロジェクトに関する質問は、GitHubのIssuesまでお願いします。
