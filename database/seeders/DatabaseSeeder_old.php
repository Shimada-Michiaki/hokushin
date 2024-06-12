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
        // ユーザー作成
        $AdminUser = User::updateOrCreate(
            ['email' => 'hokushinnitta@gmail.com'],
            ['name' => 'admin', 'password' => bcrypt('mihara369'), 'role' => 'admin']
        );

        $normalUser = User::updateOrCreate(
            ['email' => 'test@gmail.com'],
            ['name' => 'test', 'password' => bcrypt('testtest'), 'role' => 'user']
        );

        // ロール作成
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // 権限作成
        $registerPermission = Permission::firstOrCreate(['name' => 'admin']);

        // admin役割にregister権限を付与
        $adminRole->givePermissionTo($registerPermission);

        // ユーザーにロールを割り当て
        $AdminUser->assignRole($adminRole);
        $normalUser->assignRole($userRole);
    }
}
