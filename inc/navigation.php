<?php
$current_page = get_current_page();
?>
<nav class="global-nav">
    <ul class="nav-menu">
        <?php foreach ($nav_menu as $item): ?>
        <li class="nav-item <?php echo is_active($current_page, $item['id']); ?>">
            <a href="<?php echo h($item['url']); ?>"><?php echo h($item['label']); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>
