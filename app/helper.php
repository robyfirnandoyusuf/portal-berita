<?php

use App\Models\Category;
use App\Models\Kategori;

function getCategory()
{
    $kategoris = Category::orderBy('created_at', 'DESC')->get();

    return $kategoris;
}
