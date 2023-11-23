<?php

namespace Database\Seeders;

use App\Models\Role as ModelsRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsRole::create(
            [
                'nama_role'    => 'admin',
            ]
        );

        ModelsRole::create(
            [
                'nama_role'    => 'user',
            ]
        );
    }
}
