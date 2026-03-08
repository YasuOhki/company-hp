/**
 * フォームバリデーション
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // お問い合わせフォームのバリデーション
    const contactForm = document.querySelector('.contact-form form');
    if (contactForm) {
        initFormValidation(contactForm);
    }
    
});

/**
 * フォームバリデーションの初期化
 */
function initFormValidation(form) {
    const inputs = form.querySelectorAll('.form-control');
    
    // リアルタイムバリデーション
    inputs.forEach(function(input) {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                validateField(this);
            }
        });
    });
    
    // フォーム送信時のバリデーション
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        inputs.forEach(function(input) {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        
        if (isValid) {
            // バリデーション成功
            handleFormSubmit(form);
        } else {
            // 最初のエラーフィールドにフォーカス
            const firstError = form.querySelector('.form-control.error');
            if (firstError) {
                firstError.focus();
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
}

/**
 * フィールドのバリデーション
 */
function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let errorMessage = '';
    
    // 必須チェック
    if (field.hasAttribute('required') && !value) {
        errorMessage = 'この項目は必須です';
    }
    
    // メールアドレスのバリデーション
    else if (field.type === 'email' && value) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(value)) {
            errorMessage = '正しいメールアドレスを入力してください';
        }
    }
    
    // 電話番号のバリデーション
    else if (field.type === 'tel' && value) {
        const telPattern = /^[0-9-]+$/;
        if (!telPattern.test(value)) {
            errorMessage = '正しい電話番号を入力してください';
        }
    }
    
    // 文字数チェック
    if (field.hasAttribute('minlength') && value.length > 0) {
        const minLength = parseInt(field.getAttribute('minlength'));
        if (value.length < minLength) {
            errorMessage = `${minLength}文字以上で入力してください`;
        }
    }
    
    if (field.hasAttribute('maxlength') && value.length > 0) {
        const maxLength = parseInt(field.getAttribute('maxlength'));
        if (value.length > maxLength) {
            errorMessage = `${maxLength}文字以内で入力してください`;
        }
    }
    
    // エラー表示の更新
    if (errorMessage) {
        showError(field, errorMessage);
        return false;
    } else {
        clearError(field);
        return true;
    }
}

/**
 * エラーメッセージの表示
 */
function showError(field, message) {
    field.classList.add('error');
    
    // 既存のエラーメッセージを削除
    const existingError = field.parentElement.querySelector('.form-error');
    if (existingError) {
        existingError.remove();
    }
    
    // 新しいエラーメッセージを追加
    const errorElement = document.createElement('span');
    errorElement.className = 'form-error';
    errorElement.textContent = message;
    field.parentElement.appendChild(errorElement);
}

/**
 * エラー表示のクリア
 */
function clearError(field) {
    field.classList.remove('error');
    
    const errorElement = field.parentElement.querySelector('.form-error');
    if (errorElement) {
        errorElement.remove();
    }
}

/**
 * フォーム送信処理
 */
function handleFormSubmit(form) {
    // ローディング表示
    const submitButton = form.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    submitButton.textContent = '送信中...';
    submitButton.disabled = true;
    
    // フォームデータの取得
    const formData = new FormData(form);
    
    // 実際の送信処理（PHPなど）
    // fetch(form.action, {
    //     method: 'POST',
    //     body: formData
    // })
    // .then(response => response.json())
    // .then(data => {
    //     if (data.success) {
    //         showSuccessMessage();
    //         form.reset();
    //     } else {
    //         showErrorMessage(data.message);
    //     }
    // })
    // .catch(error => {
    //     showErrorMessage('送信に失敗しました。もう一度お試しください。');
    // })
    // .finally(() => {
    //     submitButton.textContent = originalText;
    //     submitButton.disabled = false;
    // });
    
    // デモ用（実際の送信は行わない）
    setTimeout(function() {
        showSuccessMessage();
        form.reset();
        submitButton.textContent = originalText;
        submitButton.disabled = false;
    }, 1000);
}

/**
 * 成功メッセージの表示
 */
function showSuccessMessage() {
    const message = document.createElement('div');
    message.className = 'form-success';
    message.textContent = 'お問い合わせを受け付けました。担当者より折り返しご連絡いたします。';
    
    const form = document.querySelector('.contact-form');
    form.insertBefore(message, form.firstChild);
    
    setTimeout(function() {
        message.remove();
    }, 5000);
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

/**
 * エラーメッセージの表示
 */
function showErrorMessage(text) {
    const message = document.createElement('div');
    message.className = 'form-error-message';
    message.textContent = text;
    
    const form = document.querySelector('.contact-form');
    form.insertBefore(message, form.firstChild);
    
    setTimeout(function() {
        message.remove();
    }, 5000);
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
