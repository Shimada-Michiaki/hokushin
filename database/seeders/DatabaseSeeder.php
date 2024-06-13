<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 権限の作成
        $this->createPermissions();

        // ロールの作成
        $adminRole = $this->createOrUpdateRole('社内管理者');
        $userRole = $this->createOrUpdateRole('事務員');
        $runfreeAdminRole = $this->createOrUpdateRole('アプリ保守管理者');
        $manufacturerRole = $this->createOrUpdateRole('製造');
        $outsideOrderRole = $this->createOrUpdateRole('外注');
        $shippingRole = $this->createOrUpdateRole('出荷');

        // ロールに権限を付与
        $this->assignPermissionsToRole($adminRole, ['admin', 'view-any']);
        $this->assignPermissionsToRole($runfreeAdminRole, ['admin', 'view-any']);
        $this->assignPermissionsToRole($manufacturerRole, ['view-製造']);
        $this->assignPermissionsToRole($outsideOrderRole, ['view-外注']);
        $this->assignPermissionsToRole($shippingRole, ['view-出荷']);
        $this->assignPermissionsToRole($userRole, ['view-any']);

        // ユーザーの作成とロールの割り当て
        $this->createOrUpdateUser('hokushinnitta@gmail.com', 'admin', 'mihara369', $adminRole);
        $this->createOrUpdateUser('test@gmail.com', 'test', 'testtest', $userRole);
    }

    /**
     * 権限の作成
     */
    private function createPermissions()
    {
        $permissions = ['admin', 'view-any', 'view-製造', 'view-出荷', 'view-外注'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }

    /**
     * ロールの作成または更新
     *
     * @param string $roleName
     * @return \Spatie\Permission\Models\Role
     */
    private function createOrUpdateRole(string $roleName): Role
    {
        return Role::updateOrCreate(['name' => $roleName]);
    }

    /**
     * ユーザーの作成または更新
     *
     * @param string $email
     * @param string $name
     * @param string $password
     * @param \Spatie\Permission\Models\Role $role
     */
    private function createOrUpdateUser(string $email, string $name, string $password, Role $role)
    {
        $user = User::updateOrCreate(
            ['email' => $email],
            ['name' => $name, 'password' => bcrypt($password)]
        );

        $user->assignRole($role);
    }

    /**
     * ロールに権限を付与
     *
     * @param \Spatie\Permission\Models\Role $role
     * @param array $permissions
     */
    private function assignPermissionsToRole(Role $role, array $permissions)
    {
        foreach ($permissions as $permission) {
            $role->givePermissionTo($permission);
        }
    }
}
