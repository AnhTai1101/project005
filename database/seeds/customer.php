<?php

use Illuminate\Database\Seeder;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'id'=>1,
                'name'=>'Le Cong Tai',
                'gender'=>0,
                'email'=>'lecongtai@yahoo.com.vn',
                'image'=>'tai.jpg',
                'phone'=> 901102893,
                'address'=>'Chuc Son, Chuong My, Ha Noi',
                'note'=>'Khong co gi het',
                'password'=>'$2y$10$qY8fctE9zLofVnjE4DpjxeLIyuh8fsFyYJcZ4Arl//a8kbpQz8ulC'
                
            ],
            [
                'id'=>2,
                'name'=>'Le Cong Tai 2',
                'gender'=>0,
                'email'=>'lecongtai2@yahoo.com.vn',
                'image'=>'tai.jpg',
                'phone'=> 901102893,
                'address'=>'Chuc Son, Chuong My, Ha Noi',
                'note'=>'Khong co gi het',
                'password'=>'$2y$10$qY8fctE9zLofVnjE4DpjxeLIyuh8fsFyYJcZ4Arl//a8kbpQz8ulC'
            ]
        ]);
    }
}
