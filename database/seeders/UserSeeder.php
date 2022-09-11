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
            'password' => bcrypt('12345678'),
            'role'     => 'admin',
        ]);

        \App\Models\User::create([
            'name'      => 'Karyawan 1',
            'email'     => 'karyawan@testing.com',
            'password'  => bcrypt('12345678'),
            'role'      => 'karyawan',
        ]);
    }
}
