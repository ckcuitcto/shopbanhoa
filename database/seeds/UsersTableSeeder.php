<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Thai Duc',
            'email' => 'thaiduc24896@gmail.com',
            'password' => bcrypt('duc456'),
            'level' => '2'
        ],[
            'name' => 'Gia Han',
            'email' => 'giahan123@gmail.com',
            'password' => bcrypt('han456'),
            'level' => '2'
        ]
        );
    }
}
