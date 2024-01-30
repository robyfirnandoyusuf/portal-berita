<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table = 'berita';
    use HasFactory;
    protected $hidden = [
        'id_berita',
    ];

    const EXCERPT_LENGTH = 50;
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

// public function ipAdress(){

// }

    public function excerpt()
    {
        return Str::limit($this->description, Berita::EXCERPT_LENGTH);
    }
    
    public function visitors(){
        return $this->hasMany(Visitors::class, 'id_berita', 'id');
    }
    
}