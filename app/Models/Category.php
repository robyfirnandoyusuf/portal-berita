<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    use HasFactory;

    protected $fillable = ['kategori','timestamp'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_kategori', 'id');
    }
}
