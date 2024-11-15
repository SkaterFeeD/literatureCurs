<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role_user = Role::create([
            'name' => 'Пользователь',
            'code' => '1',
        ]);
        $role_admin = Role::create([
            'name' => 'Администратор',
            'code' => '2',
        ]);
        User::create([
            'email' => 'noway@gmail.com',
            'name' => 'Дегустатор кайфа',
            'nickname' => 'DeadlyPosition',
            'avatar' => '',
            'birth' => '2005-11-11',
            'token' => null,
            'password' => 'noway',
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'email' => 'lol@gmail.com',
            'name' => 'Шлифовочный аппарат',
            'nickname' => 'DeadEorda',
            'avatar' => '',
            'birth' => '2002-12-12',
            'token' => null,
            'password' => 'lol320381',
            'role_id' => $role_user->id,
        ]);
    }
}
