<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make(123123123),
            'role' => 'admin',
            'phone' => '5333455665',
        ]);

        User::query()->create([
            'name' => 'User',
            'surname' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make(123123123),
            'role' => 'user',
            'phone' => '5333455665',
        ]);
    }
}
