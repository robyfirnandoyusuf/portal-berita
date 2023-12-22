<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\kategori;
use Illuminate\Support\Facades\Request;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data['berita'] = Berita::with(['Category', 'gambar'])->whereId($id)->firstOrFail();
        // dd($data['berita']);
        return view('frontsite.detail.index', $data);
    }

    public function detail($id)
    {
        $berita =  Berita::with(['gambar'])->firstOrFail();

        // Validasi
        $ipaddres=Request::ip();
        $existingview=Berita::where('id', $id)
        ->where('ip_addres', $ipaddres)
        ->first();

        if(!$existingview){
            //Ip belum ada di database, tambahkan view

            Berita::updated([
                'id' =>$id,
                'ip_addres'=>$ipaddres
            ]);
        }
        $berita->where('id',$id)->increment('views');
        //
        $data['berita'] = $berita;

        // foreach ($berita->gambar as $gambar)
        // {{ $gambar->filename }}
        // endforeach
        $data['kategoris'] = getCategory();
        $data['hitungKategori'] = countCat();

        return view('frontsite.detail.index', $data);
    }

    // public function detail($id)
    // {
    //     //
    //     $data['berita'] = Berita::with(['gambar'])->firstOrFail();

    //     // foreach ($berita->gambar as $gambar)
    //     // {{ $gambar->filename }}
    //     // endforeach
    //     $data['kategoris'] = getCategory();
    //     $data['hitungKategori'] = countCat();

    //     return view('frontsite.detail.index', $data);
    // }

    public function singleGambar($id)
    {
        //
        $data['berita'] = Berita::with(['singleGambar'])->whereId($id)->firstOrFail();

        return view('frontsite.detail.index', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
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
