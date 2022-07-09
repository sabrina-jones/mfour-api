<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
          [  
            [
            'first_name' => 'one',
            'last_name' => 'lastOne',
            'email' => Str::random(10).'@gmail.com',
            ],
    
        [
            'first_name' => 'two',
            'last_name' => 'lastTwo',
            'email' => Str::random(10).'@gmail.com',
        ],
    
        [
            'first_name' => 'three',
            'last_name' => 'lastThree',
            'email' => Str::random(10).'@gmail.com',
        ]
          ]

    );
    }
}
