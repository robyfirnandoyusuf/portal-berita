<?php

use App\Models\Berita;
use App\Models\Category;
use App\Models\Kategori;

function getCategory()
{
    $kategoris = Category::orderBy('created_at', 'DESC')->get();

    return $kategoris;
}

function countCat()
{
    $cat = Category::all();
    $arr = [];
    // echo '<pre>';
    foreach ($cat as $key => $value) {
        $count = Berita::where('id_kategori', $value->id)->count();
        $arr[] = [
            'category' => $value->kategori,
            'jumlah' => $count
        ];

        // var_dump($arr);
    }

    return $arr;
}
