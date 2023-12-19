<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Category;
use App\Models\Kategori;
use Illuminate\Http\Request;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // $Category = Kategori::latest();
        // if (request('search')) {
        //     $Category->where('judul', 'like', '%' . request('search') . '%');

        //     // return view('frontsite.kategori.index');
        // }

        // ambil berita dengan kategori berdasarkan $id yang ada di URL, misal ID kategori 1 = entertainment, maka berita yg ditampilin hanya berita dengan kategori entertainment
        // Aris Korupsi, Aris malink

        /* 
            Korupsi
        */
        $berita = Berita::where('id_kategori', $id);
        if (!empty(request()->query('search'))) {
            $search = request()->query('search');
            $berita->where('judul', 'like', "%$search%");
        }
        $berita = $berita->get();
        $data['dataBerita'] = $berita;
        // ambil berita dengan kategori idnya yang sama dengan variable $id, klo $id kategori nya 1, berarti dia ambil berita dengan id kategori 1 aja
        return view('frontsite.kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function singleGambar($id)
    {
        //
        $data['berita'] = Berita::with(['singleGambar'])->whereId($id)->firstOrFail();
        return view('frontsite.kategori.index', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function search(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
