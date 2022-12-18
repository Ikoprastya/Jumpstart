<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (DB::table('users')->count() == 0) {
            DB::table('users')->insert([
                [
                    'name' => 'Iko Prastya',
                    'email' => 'ikoprastyaaaa@gmail.com',
                    'password'  =>  bcrypt('password'),
                    'role'  =>  'ADMIN',
                    'profileID'  =>  1,
                ],
                [
                    'name' => 'user',
                    'email' => 'user@gmail.com',
                    'password'  =>  bcrypt('password'),
                    'role'  =>  'ADMIN',
                    'profileID'  =>  2,
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }

        // User::create([
        //     'name' => 'Iko Prastya',
        //     'email' => 'ikoprastyaaaa@gmail.com',
        //     'password'  =>  bcrypt('password'),
        //     'role'  =>  'ADMIN',
        //     // 'phone' => '093428734232',
        //     // 'is_email_verified' => 1,
        // ]);
    }
}
