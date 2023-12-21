<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;
use App\Models\Kategori;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // ini method yaa
    public function index()
    {
        //
        $berita = Berita::orderBy('created_at', 'DESC')->simplePaginate(12);
        // @dd($beritas);
        $data['berita'] = $berita;
      

        return view('home', $data);
    }


    // public function create(Request $data)
    //     {
    //     // style synax 2
    //     $r = new Role;
    //     $r->judul = $request->judul;
    //     $r->description = $request->description;
    //     $r->save(); 
    //     Role::insert($arr);
    //     }
    //     Role::create($request->all())

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function singleGambar($id)
    {
        //
        $data['berita'] = Berita::with(['singleGambar'])->whereId($id)->firstOrFail();
        dd($data);
        return view('home', $data);
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
        $kategoris = Category::orderBy('created_at', 'DESC')->get();
        // @dd($Kategori);
        $data['kategoris'] = $kategoris;
        return view('layouts.layout', $data);
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
