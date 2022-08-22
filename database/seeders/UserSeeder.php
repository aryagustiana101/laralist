<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                "name" => "M Arya Anggara Gustiana",
                "email" => "aryagustiana101@gmail.com",
                "email_verified_at" => now(),
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
