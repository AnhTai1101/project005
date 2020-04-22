<?php

use Illuminate\Database\Seeder;

class size extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->insert([
            ['id'=>1, 'name'=>'Z'],
            ['id'=>2, 'name'=>'X'],
            ['id'=>3, 'name'=>'L']
        ]);
    }
}
