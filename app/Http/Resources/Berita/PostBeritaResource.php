<?php

namespace App\Http\Resources\Berita;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostBeritaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return     [
            'id' => $this->id,
            'judul' => $this->judul,
            'description' => $this->description,
            'created_at' => date_format($this->created_at,"y/m/d"),
            'gambar' => $this->gambar->makeHidden(['id_berita','updated_at'])
        ];

    }
}
