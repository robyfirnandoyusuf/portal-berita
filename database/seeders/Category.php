<?php

namespace Database\Seeders;

use App\Models\Category as ModelsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModelsCategory::create(
            [
                'kategori'    => 'Entertainment',
            ],
        );

        ModelsCategory::create(
            [
                'kategori'    => 'Aktual',
            ],
        );

        ModelsCategory::create(
            [
                'kategori'    => 'Trending',
            ],
        );
    }
}
