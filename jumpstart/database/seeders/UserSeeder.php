<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
                    'phone'     => '098137922',
                    'country'   => 'Indonesia',
                    'address'   => 'Jl. Mataram Gg Mangga No.5E',
                ],
                [
                    'name' => 'user',
                    'email' => 'user@gmail.com',
                    'password'  =>  bcrypt('password'),
                    'role'  =>  'USER',
                    'phone'     => null,
                    'country'   => null,
                    'address'   => null,
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
