/**
 * スムーススクロール
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ページ内リンクのスムーススクロール
    initSmoothScroll();
    
});

/**
 * スムーススクロールの初期化
 */
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(function(link) {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // #のみの場合はページトップへ
            if (href === '#' || href === '#top') {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                return;
            }
            
            // 対象要素が存在する場合
            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                // ヘッダーの高さを取得
                const header = document.querySelector('.site-header');
                const headerHeight = header ? header.offsetHeight : 0;
                const offset = 20; // 追加のオフセット
                
                // スクロール位置を計算
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                const scrollPosition = targetPosition - headerHeight - offset;
                
                // スムーススクロール実行
                window.scrollTo({
                    top: scrollPosition,
                    behavior: 'smooth'
                });
                
                // URLのハッシュを更新（履歴には残さない）
                if (history.pushState) {
                    history.pushState(null, null, href);
                }
                
                // フォーカスを移動（アクセシビリティ）
                targetElement.focus();
                if (document.activeElement !== targetElement) {
                    targetElement.setAttribute('tabindex', '-1');
                    targetElement.focus();
                }
            }
        });
    });
}

/**
 * URLのハッシュが存在する場合、ページ読み込み時にスクロール
 */
window.addEventListener('load', function() {
    if (window.location.hash) {
        const hash = window.location.hash;
        const targetElement = document.querySelector(hash);
        
        if (targetElement) {
            setTimeout(function() {
                const header = document.querySelector('.site-header');
                const headerHeight = header ? header.offsetHeight : 0;
                const offset = 20;
                
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                const scrollPosition = targetPosition - headerHeight - offset;
                
                window.scrollTo({
                    top: scrollPosition,
                    behavior: 'smooth'
                });
            }, 100);
        }
    }
});
