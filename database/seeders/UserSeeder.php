<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $arr = [
            [
                'username'    => 'Jov',
                'name'    => 'Jovfrin',
                'email'    => 'Jovfrin@gmail.com',
                'password'    => bcrypt('12340'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'username'    => 'Bia',
                'name'    => 'Abia',
                'email'    => 'Abia@gmail.com',
                'password'    => bcrypt('56780'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'username'    => 'Ky',
                'name'    => 'Dzaky',
                'email'    => 'Dzaky@gmail.com',
                'password'    => bcrypt('90000'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        User::insert($arr);
      
        //
    }
}
