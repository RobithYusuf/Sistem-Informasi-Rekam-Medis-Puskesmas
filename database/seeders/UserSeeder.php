<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [

            [
                'name' => 'Admin Aplikasi',
                'username' => 'admin1',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],

            [
                'name' => 'Petugas Aplikasi',
                'username' => 'petugas1',
                'role' => 'petugas',
                'password' => bcrypt('petugas')
            ],

            [
                'name' => 'Admin Aplikasi',
                'username' => 'dokter1',
                'role' => 'dokter',
                'password' => bcrypt('dokter')
            ],

            [
                'name' => 'Admin Aplikasi',
                'username' => 'apotek1',
                'role' => 'apotek',
                'password' => bcrypt('apotek')
            ],

        ];
        foreach ($userData as $key => $val) {
            user::create($val);
        }
    }
}