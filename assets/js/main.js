/**
 * メインJavaScript
 */

// DOM読み込み完了後に実行
document.addEventListener('DOMContentLoaded', function() {
    
    // ページトップへ戻るボタン
    initBackToTop();
    
    // フェードインアニメーション
    initFadeIn();
    
    // 外部リンクに target="_blank" を追加
    initExternalLinks();
    
});

/**
 * ページトップへ戻るボタン
 */
function initBackToTop() {
    const backToTopBtn = document.createElement('button');
    backToTopBtn.id = 'back-to-top';
    backToTopBtn.innerHTML = '↑';
    backToTopBtn.setAttribute('aria-label', 'ページトップへ戻る');
    backToTopBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: #2E5C8A;
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    `;
    
    document.body.appendChild(backToTopBtn);
    
    // スクロールイベント
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.style.opacity = '1';
            backToTopBtn.style.visibility = 'visible';
        } else {
            backToTopBtn.style.opacity = '0';
            backToTopBtn.style.visibility = 'hidden';
        }
    });
    
    // クリックイベント
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // ホバーエフェクト
    backToTopBtn.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#1a3a5a';
        this.style.transform = 'translateY(-3px)';
    });
    
    backToTopBtn.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '#2E5C8A';
        this.style.transform = 'translateY(0)';
    });
}

/**
 * フェードインアニメーション
 */
function initFadeIn() {
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeIn 0.6s ease-out';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    fadeElements.forEach(function(element) {
        observer.observe(element);
    });
}

/**
 * 外部リンクに target="_blank" を追加
 */
function initExternalLinks() {
    const links = document.querySelectorAll('a[href^="http"]');
    
    links.forEach(function(link) {
        const currentDomain = window.location.hostname;
        const linkDomain = new URL(link.href).hostname;
        
        if (currentDomain !== linkDomain) {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
        }
    });
}

/**
 * ユーティリティ: 要素の表示/非表示
 */
function toggleElement(element) {
    if (element.style.display === 'none' || !element.style.display) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

/**
 * ユーティリティ: クラスのトグル
 */
function toggleClass(element, className) {
    if (element.classList.contains(className)) {
        element.classList.remove(className);
    } else {
        element.classList.add(className);
    }
}

/**
 * ユーティリティ: デバウンス
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = function() {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
