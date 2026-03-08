<?php
require_once __DIR__ . '/../functions/helpers.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include __DIR__ . '/meta.php'; ?>

<!-- Stylesheets -->
<link rel="stylesheet" href="<?php echo css_url('reset.css'); ?>">
<link rel="stylesheet" href="<?php echo css_url('style.css'); ?>">
<link rel="stylesheet" href="<?php echo css_url('responsive.css'); ?>">
<link rel="stylesheet" href="<?php echo css_url('components/header.css'); ?>">
<link rel="stylesheet" href="<?php echo css_url('components/footer.css'); ?>">
<link rel="stylesheet" href="<?php echo css_url('components/buttons.css'); ?>">
<link rel="stylesheet" href="<?php echo css_url('components/forms.css'); ?>">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="page-<?php echo h(get_current_page()); ?>">

<header class="site-header">
    <div class="header-container">
        <div class="header-top">
            <div class="header-logo">
                <a href="index.php">
                    <img src="<?php echo image_url('common/logo.svg'); ?>" alt="<?php echo h(SITE_NAME); ?>">
                    <span class="logo-text">
                        <strong><?php echo h(SITE_NAME); ?></strong>
                        <small><?php echo h(SITE_NAME_EN); ?></small>
                    </span>
                </a>
            </div>
            
            <div class="header-contact">
                <div class="header-tel">
                    <span class="tel-label">お電話でのお問い合わせ</span>
                    <a href="tel:<?php echo str_replace('-', '', COMPANY_TEL); ?>" class="tel-number">
                        <?php echo h(COMPANY_TEL); ?>
                    </a>
                    <span class="tel-hours"><?php echo h(BUSINESS_HOURS); ?></span>
                </div>
                <a href="contact.php" class="btn btn-primary btn-contact">お問い合わせ</a>
            </div>
            
            <button class="nav-toggle" aria-label="メニュー">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        
        <?php include __DIR__ . '/navigation.php'; ?>
    </div>
</header>
