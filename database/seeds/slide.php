<?php

use Illuminate\Database\Seeder;

class slide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['id'=>1, 'name'=>'Mùa xuân 2020', 'title'=>'Dành cho phái đẹp', 'image'=>'slide-04.jpg'],
            ['id'=>2, 'name'=>'Mùa xuân 2020', 'title'=>'Dành cho phái mạnh', 'image'=>'slide-05.jpg']
        ]);
    }
}
