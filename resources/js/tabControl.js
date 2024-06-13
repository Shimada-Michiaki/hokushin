// 各ロールに対応するタブIDを定義
const roleTabs = {
    '社内管理者': '#tab1-tab',
    '事務員': '#tab2-tab',
    '製造': '#tab4-tab',
    '出荷': '#tab5-tab',
    '外注': '#tab3-tab',
};

// ページが読み込まれたときに実行される
document.addEventListener('DOMContentLoaded', function () {
    // ユーザーのロールを取得（例: サーバーからロールを取得する方法）
    const userRolesElement = document.getElementById('userRoles');
    if (!userRolesElement) {
        console.error('User roles element not found');
        return;
    }

    const userRoles = JSON.parse(userRolesElement.textContent);

    // 最初のアクティブタブを見つけて設定する
    let activeTab = ''; // デフォルトは何もアクティブにしない
    userRoles.forEach(role => {
        if (roleTabs[role] && !activeTab) {
            activeTab = roleTabs[role];
        }
    });

    // デフォルトのアクティブタブを設定
    if (activeTab) {
        const activeTabElement = document.querySelector(activeTab);
        if (activeTabElement) {
            activeTabElement.classList.add('active');
            document.querySelector(activeTabElement.dataset.bsTarget).classList.add('show', 'active');
        }
    }
});
