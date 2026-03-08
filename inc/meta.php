<?php
/**
 * head内の共通meta情報
 */
$current_page = get_current_page();
$page_title = get_page_title($current_page);
$page_description = get_page_description($current_page);
$page_url = SITE_URL . '/' . ($current_page === 'index' ? '' : $current_page . '.php');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo h($page_description); ?>">
<meta name="keywords" content="人材派遣,人材紹介,採用コンサルティング,キャリア支援,求人,<?php echo h(SITE_NAME); ?>">
<meta name="author" content="<?php echo h(SITE_NAME); ?>">

<!-- OGP -->
<meta property="og:title" content="<?php echo h($page_title); ?>">
<meta property="og:description" content="<?php echo h($page_description); ?>">
<meta property="og:type" content="<?php echo $current_page === 'index' ? 'website' : 'article'; ?>">
<meta property="og:url" content="<?php echo h($page_url); ?>">
<meta property="og:site_name" content="<?php echo h(SITE_NAME); ?>">
<meta property="og:image" content="<?php echo h(SITE_URL . image_url('common/ogp.jpg')); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo h($page_title); ?>">
<meta name="twitter:description" content="<?php echo h($page_description); ?>">
<meta name="twitter:image" content="<?php echo h(SITE_URL . image_url('common/ogp.jpg')); ?>">

<!-- Favicon -->
<link rel="icon" href="<?php echo image_url('common/favicon.ico'); ?>">
<link rel="apple-touch-icon" href="<?php echo image_url('common/apple-touch-icon.png'); ?>">

<title><?php echo h($page_title); ?></title>
