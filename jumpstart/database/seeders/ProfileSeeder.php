<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('profiles')->count() == 0) {
            DB::table('profiles')->insert([
                [
                    'gender'    => 'Male',
                    'phone'     => '098137922',
                    'country'   => 'Indonesia',
                    'birthday'  => Carbon::parse('2000-01-01'),
                    'address'   => 'Jl. Mataram Gg Mangga No.5E',
                ],
                [
                    'gender'    => 'Female',
                    'phone'     => '098837192',
                    'country'   => 'Indonesia',
                    'birthday'  => Carbon::parse('2000-02-02'),
                    'address'   => 'Jl. Mataram Gg Mangga No.5E',
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
