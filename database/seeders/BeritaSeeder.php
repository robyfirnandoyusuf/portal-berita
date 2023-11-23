<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $arr = [
            [
                'id_kategori' => null,
                'judul' => 'Berita 1',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => now(),
            ],
            [
                'id_kategori' => null,
                'judul' => 'Berita 2',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => now(),
            ],
            [
                'id_kategori' => null,
                'judul' => 'Berita 3',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => now(),
            ],
            [
                'id_kategori' => null,
                'judul' => 'Berita 4',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => now(),
            ],
            [
                'id_kategori' => null,
                'judul' => 'Berita 5',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => now(),
            ],
            [
                'id_kategori' => null,
                'judul' => 'Berita 6',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => now(),
            ],
        ];

        Berita::insert($arr);
    }
}
