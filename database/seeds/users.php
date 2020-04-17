<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id'=>1,'name'=>'Le Cong Tai', 'email'=> 'lecongtai@yahoo.com.vn', 'password'=> '$2y$10$qY8fctE9zLofVnjE4DpjxeLIyuh8fsFyYJcZ4Arl//a8kbpQz8ulC'],
            ['id'=>2,'name'=>'Le Cong Tai 1', 'email'=> 'lecongtai1@yahoo.com.vn', 'password'=> '$2y$10$qY8fctE9zLofVnjE4DpjxeLIyuh8fsFyYJcZ4Arl//a8kbpQz8ulC']
        ]);
    }
}
