<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logins = [
            [
                'email' => '123@123.com',
                'password' => '123',
                'name' => 'Victor Tanaka',
                'birth_date' => '1999-11-14',
                'skin_type' => '',
                'points' => 0,
            ]
        ];

        foreach ($logins as $login) {
            Login::create($login);
        }

        //
    }
}
