<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => "hafiidh",
                'password' => Hash::make(1234)
            ],
            [
                'username' => "basri",
                'password' => Hash::make(1234)
            ]
        ];

        foreach ($users as $user) {
           DB::table('user')->insert($user);
        }
    }
}
