<?php
/**
 * ヘルパー関数
 * 共通で使用する便利な関数をまとめる
 */

/**
 * HTML特殊文字をエスケープ
 */
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * URLをエスケープ
 */
function url($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * 日付のフォーマット
 */
function format_date($date, $format = 'Y.m.d') {
    return date($format, strtotime($date));
}

/**
 * 文字数制限（日本語対応）
 */
function truncate($text, $length = 100, $suffix = '...') {
    if (mb_strlen($text) > $length) {
        return mb_substr($text, 0, $length) . $suffix;
    }
    return $text;
}

/**
 * アセットURLを生成
 */
function asset_url($path) {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

/**
 * 画像URLを生成
 */
function image_url($path) {
    return IMAGES_URL . '/' . ltrim($path, '/');
}

/**
 * CSSファイルのURLを生成
 */
function css_url($path) {
    return CSS_URL . '/' . ltrim($path, '/');
}

/**
 * JavaScriptファイルのURLを生成
 */
function js_url($path) {
    return JS_URL . '/' . ltrim($path, '/');
}

/**
 * ページURLを生成
 */
function page_url($page) {
    return $page . '.php';
}

/**
 * 現在のページIDを取得
 */
function get_current_page() {
    global $page_id;
    return isset($page_id) ? $page_id : 'index';
}
