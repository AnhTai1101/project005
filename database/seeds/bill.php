<?php

use Illuminate\Database\Seeder;

class bill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill')->insert([
            [
                'id'=>1,
                'customer_id'=>1,
                'total'=>100000,
                'date_order'=>'2020-12-12 07:00:00'
            ]
        ]);
    }
}
