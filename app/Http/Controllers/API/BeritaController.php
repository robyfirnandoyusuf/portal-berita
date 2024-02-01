<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Berita\GetBeritaResource;
use App\Http\Resources\Berita\PostBeritaResource;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $berita = Berita::with(['gambar','category'])->get();
        } catch (\Exception $e) {

            if (env('APP_ENV') == 'local') {
                dd($e->getMessage());
            } else {
                $berita = [
                    'status' => false,
                    'message' => 'Get Berita Failed'
                ];
            }
            return $berita;
        }
        return  GetBeritaResource::collection($berita);
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
    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        $berita = $request->validate([
            'judul' => 'required|max:255',
            'description' => 'required',
            'kategori' => 'required_with:end_page|integer|min:1|digits_between: 1,5',
            'email' => 'required'
        ]);
    // dd($user);
        // $request['id_user'] = Auth::user()->id;
        $berita = Berita::create([
            'judul' => $request->judul,
            'description' => $request->description,
            'id_kategori' => $request->kategori,
            'id_user' => $user->id
        ]);
        return new PostBeritaResource($berita->loadMissing(['gambar','category']));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = Berita::with(['gambar'])->findOrFail($id);
        // dd($berita);
        return new PostBeritaResource($berita);
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
        $user = User::where('email', $request->email)->first();

        $berita = $request->validate([
            'judul' => 'required|max:255',
            'description' => 'required',
            'kategori' => 'required_with:end_page|integer|min:1|digits_between: 1,5',
            'email' => 'required'
        ]);
        $berita = Berita::findOrFail($id);
        $berita->update([
            'judul' => $request->judul,
            'description' => $request->description,
            'id_kategori' => $request->kategori,
            'id_user' => $user->id
        ]);

        return new PostBeritaResource($berita->loadMissing(['gambar','category']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return new PostBeritaResource($berita->loadMissing(['gambar','category']));
    }
}
