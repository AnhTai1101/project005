<?php

use Illuminate\Database\Seeder;

class color extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color')->insert([
            ['id'=>1, 'name'=>'blue'],
            ['id'=>2, 'name'=>'red']
        ]);
    }
}
