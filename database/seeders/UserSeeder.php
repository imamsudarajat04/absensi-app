<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'     => 'Admin',
            'email'    => 'admin@testing.com',
            'password' => bcrypt('admin'),
            'role'     => 'admin',
        ]);
    }
}
