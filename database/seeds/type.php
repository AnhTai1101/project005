<?php

use Illuminate\Database\Seeder;

class type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert([
            ['id'=>1, 'name'=>'Quần đùi', 'image'=>'tai.jpg', 'content'=>'Quần ngắn ống'],
            ['id'=>2, 'name'=>'Quần dài', 'image'=>'tai.jpg', 'content'=>'Quần ống dài'],
        ]);
    }
}

