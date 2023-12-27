<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    use HasFactory;


    protected $fillable= ['ip_address', 'id', 'berita_id'];

    public function Berita(){
        return $this->belongsTo('id_berita', 'id');
    }

}
