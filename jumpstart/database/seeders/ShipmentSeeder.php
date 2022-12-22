<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('shipments')->count() == 0) {
            DB::table('shipments')->insert([
                [
                    'name'  => 'Go-Send',
                    'price'   =>  15000,
                    'estimate'   =>  '2 days',
                    'created_at'    => Carbon::now()
                ],
                [
                    'name'  => 'JNE',
                    'price'   => 10000,
                    'estimate'   =>  '3 days',
                    'created_at'    =>  Carbon::now()
                ],
                [
                    'name'  =>  'Personal Courier',
                    'price'   => 30000,
                    'estimate'   =>  'today',
                    'created_at'    =>  Carbon::now()
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
