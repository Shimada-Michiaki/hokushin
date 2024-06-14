// resources/js/tabControl.js
document.addEventListener('DOMContentLoaded', function() {
    // ログイン状態を確認する
    const isLoggedIn = document.querySelector('meta[name="logged-in"]').getAttribute('content') === 'true';
    
    if (isLoggedIn) {
        console.log('ログイン済み');
    } else {
        console.log('未ログイン');
    }
});
