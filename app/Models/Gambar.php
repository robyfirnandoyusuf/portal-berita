<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gambar extends Model
{
    protected $table = 'gambar';
    use HasFactory;
    protected $fillable = ['filename','id_berita'];


}