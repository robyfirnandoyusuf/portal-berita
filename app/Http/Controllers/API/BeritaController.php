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

    public function filter(Request $request){
        $judul_query = Berita::with(['gambar', 'category']);
        // Pencarian By Judul dan ID
        if($request->judul){
            $judul_query->where('judul', 'LIKE', '%'.$request->judul. '%');
        }    
        if($request->desc){
            $judul_query->where('description', 'LIKE', '%'.$request->desc. '%');
        }

        // Filter By Category
        if($request->category)
        $judul_query->whereHas('category', function($query) use($request){
            $query->where('kategori',$request->category);
        });

        //sort ASC/DESC
        if($request->sortBy && in_array($request->sortBy,['id','created_at'])){
            $sortBy = $request->sortBy;
        } else {
            $sortBy = 'id';
        }
        if($request->sortOrder && in_array($request->sortOrder,['asc','desc'])){
            $sortOrder = $request->sortOrder;
        } else {
            $sortOrder = 'desc';
        }

        //Pagination
        if($request->perPage){
            $perPage = $request->perPage;

        } else {
            $perPage = 5;
        }

        if($request->paginate){
            $juduls = $judul_query->orderBY($sortBy,$sortOrder)->paginate($perPage);

        } else {
            $juduls = $judul_query->orderBY($sortBy,$sortOrder)->get();
        }

        $juduls = $judul_query->orderBY($sortBy,$sortOrder)->get();
        return  GetBeritaResource::collection($juduls);
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
