<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    use HasFactory;

    protected $fillable = ['judul', 'id_kategori','description','kategori','created_by','timestamps','views'];


    public function gambar() {
        // 1 berita memiliki 1 gambar
        return $this->hasMany(Gambar::class, 'id_berita', 'id');

        // 1 berita dimiliki 1 gambar
        // return $this->belongsTo(Gambar::class, 'id', 'id_berita');
    }

    public function category() {
        // 1 berita memiliki 1 gambar
        return $this->hasOne(Category::class, 'id', 'id_kategori');

        // 1 berita dimiliki 1 gambar
        // return $this->belongsTo(Gambar::class, 'id', 'id_berita');
    }

    public function singleGambar(){
        return $this->hasOne(Gambar::class, 'id_berita', 'id');
    }
}
