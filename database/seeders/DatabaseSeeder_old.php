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
        // 既存のロールを削除
        Role::where('name', 'admin')->orWhere('name', 'user')->delete();

        // ロール作成
        $adminRole = Role::firstOrCreate(['name' => '社内管理者']);
        $userRole = Role::firstOrCreate(['name' => '事務員']);

        // 権限作成
        $registerPermission = Permission::firstOrCreate(['name' => 'admin']);

        // admin役割にregister権限を付与
        $adminRole->givePermissionTo($registerPermission);

        // ユーザー作成
        $AdminUser = User::updateOrCreate(
            ['email' => 'hokushinnitta@gmail.com'],
            ['name' => 'admin', 'password' => bcrypt('mihara369')]
        );

        $normalUser = User::updateOrCreate(
            ['email' => 'test@gmail.com'],
            ['name' => 'test', 'password' => bcrypt('testtest')]
        );

        // ユーザーにロールを割り当て
        $AdminUser->assignRole($adminRole);
        $normalUser->assignRole($userRole);
    }
}
