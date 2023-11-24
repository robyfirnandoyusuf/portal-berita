<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'DESC')->get();
        $data['beritas'] = $berita;

        return view('backsite.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backsite.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arr = [
            // 'nama' => $request->nama,
            'judul' =>  $request->judul,
            // 'id_kategori' =>  $request->id_kategori,
            'description' =>  $request->description,
            'kategori' =>  $request->kategori
        ];
        Berita::insert($arr);
        // Berita::create($request->all());

        return redirect()->route('backsite.berita.index')->with('success', 'Berita added successfully');
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
        $berita = Berita::findOrFail($id);
        $data['berita'] = $berita;
        /*
            select * from role where id = 6
        */

        return view('backsite.berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Berita::findOrFail($id);

        $berita->update($request->all());
        return redirect()->route('backsite.berita.index')->with('success','Berita updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();
        return redirect()->route('backsite.berita.index')->with('success','Berita delete succesfully');
    }
}
