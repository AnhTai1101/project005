<?php

use Illuminate\Database\Seeder;

class bill_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_detail')->insert([
            [
                'id'=>1,
                'bill_id'=>1,
                'product_id'=>25,
                'quantity'=>1,
                'price'=>100000
            ]
        ]);
    }
}
