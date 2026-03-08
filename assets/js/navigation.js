/**
 * ナビゲーション制御
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ハンバーガーメニューの制御
    initMobileMenu();
    
    // スクロール時のヘッダー処理
    initStickyHeader();
    
});

/**
 * モバイルメニューの制御
 */
function initMobileMenu() {
    const navToggle = document.querySelector('.nav-toggle');
    const globalNav = document.querySelector('.global-nav');
    
    if (!navToggle || !globalNav) return;
    
    navToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        globalNav.classList.toggle('active');
        
        // アクセシビリティ
        const isExpanded = this.classList.contains('active');
        this.setAttribute('aria-expanded', isExpanded);
        
        // ボディのスクロール制御
        if (isExpanded) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });
    
    // メニュー項目をクリックしたらメニューを閉じる
    const navLinks = globalNav.querySelectorAll('.nav-item a');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            navToggle.classList.remove('active');
            globalNav.classList.remove('active');
            navToggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    });
    
    // ウィンドウリサイズ時の処理
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth > 768) {
                navToggle.classList.remove('active');
                globalNav.classList.remove('active');
                globalNav.style.display = '';
                navToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        }, 250);
    });
}

/**
 * スクロール時のヘッダー処理
 */
function initStickyHeader() {
    const header = document.querySelector('.site-header');
    if (!header) return;
    
    let lastScrollTop = 0;
    let scrollThreshold = 100;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > scrollThreshold) {
            header.classList.add('scrolled');
            
            // スクロール方向の判定
            if (scrollTop > lastScrollTop) {
                // 下にスクロール
                header.classList.add('scroll-down');
                header.classList.remove('scroll-up');
            } else {
                // 上にスクロール
                header.classList.add('scroll-up');
                header.classList.remove('scroll-down');
            }
        } else {
            header.classList.remove('scrolled');
            header.classList.remove('scroll-down');
            header.classList.remove('scroll-up');
        }
        
        lastScrollTop = scrollTop;
    });
}

/**
 * アクティブなナビゲーション項目のハイライト
 */
function highlightActiveNav() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-item a');
    
    navLinks.forEach(function(link) {
        const linkPath = new URL(link.href).pathname;
        
        if (linkPath === currentPath) {
            link.closest('.nav-item').classList.add('active');
        }
    });
}

// ページ読み込み時に実行
document.addEventListener('DOMContentLoaded', highlightActiveNav);
