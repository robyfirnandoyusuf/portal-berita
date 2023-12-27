<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Berita;
use App\Models\Gambar;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::with('category')->where('id_user',auth()->id())->orderBy('created_at', 'DESC')->get();
        $data['beritas'] = $berita;

        return view('backsite.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Category::orderBy('created_at', 'DESC')->get(); // ini buat ambil data dari table role
        // 2. db builder
        /*
            select * from role order by created_at desc;
        */
        $data['kategoris'] = $kategori;
        $data['kategoris'] = $kategori;

        return view('backsite.berita.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar = session('id_gambar');
        Session::forget('id_gambar');

        $b = new Berita();
        $b->judul = $request->judul;
        $b->description = $request->description;
        $b->id_kategori = $request->id_kategori;
        $b->id_user = Auth::user()->id;
        $b->save();

        if(!empty($gambar)){
        Gambar::whereIn('id', $gambar)->update([
            'id_berita' => $b->id
        ]);
    }
        return redirect()->route('backsite.berita.index')->with('success', 'Berita added successfully');
        //    // Images::insert($imageName);
        //     // Berita::create($request->all());
    }
    public function storeImage(Request $request)
    {
        $gambar = $request->file('file');
        $imageName = $gambar->getClientOriginalName();
        $gambar->move(public_path('backsite-assets-img'), $imageName);

        $imageUpload = new Gambar();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        session()->push('id_gambar', $imageUpload->id);

        return response()->json(['succes' => $imageName]);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $berita = Berita::findOrFail($id);

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
        return redirect()->route('backsite.berita.index')->with('success', 'Berita updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();
        return redirect()->route('backsite.berita.index')->with('success', 'Berita delete succesfully');
    }
}
