<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['id'=> 1, 'name'=> 'Nữ', 'image'=>'tai.jpg', 'content'=>' Dành cho phái đẹp'],
            ['id'=> 2, 'name'=> 'Nam', 'image'=>'tai.jpg', 'content'=>' Dành cho phái mạnh'],
        ]);
    }
}
