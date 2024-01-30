<?php

namespace App\Http\Controllers\API;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
      

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = Berita::with(['gambar'])->findOrFail($id);
        // dd($berita);
        return  new PostBeritaResource($berita);
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
