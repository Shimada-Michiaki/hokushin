// resources/js/tabControl.js
document.addEventListener('DOMContentLoaded', function() {
    // ログイン状態を確認するメタタグを取得
    const loggedInMeta = document.querySelector('meta[name="logged-in"]');
    
    // メタタグが存在するかを確認
    if (loggedInMeta) {
        const isLoggedIn = loggedInMeta.getAttribute('content') === 'true';
        
        if (isLoggedIn) {
            console.log('ログイン済み');
            
            // ログインユーザー名を取得
            const userNameMeta = document.querySelector('meta[name="user-name"]');
            const userRolesMeta = document.querySelector('meta[name="user-roles"]');
            
            // メタタグが存在するかを確認
            if (userNameMeta && userRolesMeta) {
                const userName = userNameMeta.getAttribute('content');
                const userRoles = userRolesMeta.getAttribute('content').split(',');
                
                console.log('ユーザー名:', userName);
                console.log('ユーザーロール:', userRoles);
            }
            
            // 最初のタブのIDを取得して表示
            const firstTabPane = document.querySelector('.tab-pane');
            if (firstTabPane) {
                const firstTabId = firstTabPane.getAttribute('id');
                console.log('First tab ID:', firstTabId);

                // 取得したIDにクラスを付与
                firstTabPane.classList.add('show', 'active');

                // 対応するボタン部分にもクラスを付与
                const firstTabButton = document.querySelector(`button[data-bs-target="#${firstTabId}"]`);
                if (firstTabButton) {
                    firstTabButton.classList.add('active');
                } else {
                    console.log('No button found for first tab');
                }
            } else {
                console.log('No tab found');
            }
        } else {
            console.log('未ログイン');
        }
    } else {
        console.log('ログイン状態のメタタグが見つかりません');
    }
});
