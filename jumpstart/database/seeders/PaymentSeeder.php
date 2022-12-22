<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('payments')->count() == 0) {
            DB::table('payments')->insert([
                [
                    'name'  => 'Cash on Delivery (COD)',
                    'created_at'    => Carbon::now()
                ],
                [
                    'name'  => 'Card',
                    'created_at'    =>  Carbon::now()
                ],
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}
