<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    use HasFactory;

    protected $fillable = ['judul', 'id_kategori','description','kategori','created_by','timestamps'];

}
